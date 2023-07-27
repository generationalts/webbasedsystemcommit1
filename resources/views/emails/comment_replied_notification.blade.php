<x-mail::message>
# Introduction
@component('mail::message')
# Hello {{ $comment->user->name }},

{{ $reply->user->name }} has replied to your comment on the motivation "{{ $comment->motivation->title }}". Here's their reply:

{{ $reply->reply }}

Thank you for using our platform!

@component('mail::button', ['url' => route('motivations.show', $comment->motivation_id)])
View Motivation
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
