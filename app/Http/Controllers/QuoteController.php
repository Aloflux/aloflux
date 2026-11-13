<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequestMail;
use App\Support\ContactSpamFilter;
use App\Support\QuoteForm;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function show(Request $request): View
    {
        $type = $request->query('type');

        return view('quote', [
            'selectedType' => in_array($type, QuoteForm::projectTypes(), true) ? $type : null,
        ]);
    }

    /**
     * Bots and spam get the same success response as real people, so they learn nothing.
     */
    public function send(Request $request, ContactSpamFilter $spamFilter): RedirectResponse
    {
        $botReason = $spamFilter->botReason($request);

        if ($botReason !== null) {
            $this->logBlocked($request, $botReason);

            return $this->accepted();
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'project_type' => ['required', 'string', Rule::in(QuoteForm::projectTypes())],
            'proposed_budget' => ['required', 'string', Rule::in(QuoteForm::BUDGETS)],
            'timeline' => ['nullable', 'string', Rule::in(QuoteForm::TIMELINES)],
            'project_description' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return $this->formPage()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();
        $spamScore = $spamFilter->spamScore(
            $validated['name'],
            $validated['company'] ?? '',
            $validated['project_description'],
        );

        if ($spamScore >= ContactSpamFilter::SPAM_SCORE) {
            $this->logBlocked($request, 'spam content', $spamScore);

            return $this->accepted();
        }

        try {
            $recipientEmail = env('MAIL_TO_ADDRESS', 'admin@aloflux.com');

            Mail::to($recipientEmail)->send(new QuoteRequestMail($validated));

            Log::info('Quote request email sent', [
                'to' => $recipientEmail,
                'from' => $validated['email'],
                'name' => $validated['name'],
                'project_type' => $validated['project_type'],
            ]);

            return $this->accepted();
        } catch (Exception $e) {
            Log::error('Quote form error: '.$e->getMessage(), ['exception' => $e]);

            return $this->formPage()
                ->with('error', 'Sorry, there was an error sending your request. Please try again later.')
                ->withInput();
        }
    }

    private function formPage(): RedirectResponse
    {
        return redirect()->route('quote')->withFragment('quote-form');
    }

    private function accepted(): RedirectResponse
    {
        return $this->formPage()->with(
            'success',
            'Thank you. Your quote request is with us and we will reply with questions or a suggested next step.',
        );
    }

    private function logBlocked(Request $request, string $reason, ?int $score = null): void
    {
        $description = $request->input('project_description');

        Log::warning('Quote form submission blocked', [
            'reason' => $reason,
            'score' => $score,
            'ip' => $request->ip(),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'company' => $request->input('company'),
            'project_type' => $request->input('project_type'),
            'proposed_budget' => $request->input('proposed_budget'),
            'project_description' => is_string($description) ? mb_substr($description, 0, 500) : null,
        ]);
    }
}
