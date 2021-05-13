<h2>Dear {{ $name }},</h2>
<p>Please find attached to this mail a pdf file for 'Declaration by the candidate'. You must sign this document and attach it to the mail if you wish to enroll in the program.</p>

<img src="{{ $message->embed(public_path() . '/images/cap-auto-reply.png') }}" alt="" />

<span class="btn btn-primary">
<a href="{{ $message->embed(public_path().'/images/Declaration-by-the-Candidate.pdf') }}"  target="_blank" download="{{ public_path().'/images/Declaration-by-the-Candidate.pdf' }}"></a>
</span>