{{-- Spam traps checked by ContactSpamFilter: a hidden honeypot field and an encrypted load time. --}}
<div aria-hidden="true" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">
    <label for="leave_blank">Leave this field empty</label>
    <input type="text" id="leave_blank" name="leave_blank" tabindex="-1" autocomplete="off" value="">
</div>
<input type="hidden" name="form_loaded_at" value="{{ old('form_loaded_at', encrypt((string) now()->timestamp)) }}">
