<?php

namespace App\Support;

class QuoteForm
{
    public const BUDGETS = [
        'Discovery Sprint (£1,200 to £2,500)',
        '£2,500 to £6,000',
        '£6,000 to £20,000',
        '£20,000 to £40,000',
        '£40,000 or above',
        'Monthly Retainer (ongoing)',
        'Not sure yet',
    ];

    public const TIMELINES = [
        'As soon as possible',
        'Within 3 months',
        '3 to 6 months',
        'Just exploring',
    ];

    /**
     * Project types offered on the quote form: every service, plus products and a catch all.
     *
     * @return list<string>
     */
    public static function projectTypes(): array
    {
        $services = array_column(ServiceCatalog::all(), 'title');

        return [...$services, 'School Management System', 'Other'];
    }
}
