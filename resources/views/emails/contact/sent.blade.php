@component('mail::message')
    Das ist eine Kontaktanfrage

    Name: {{ $request->name }}

    E-Mail: {{ $request->email }}

    Betreff: {{ $request->subject }}

    Nachricht: {{ $request->message }}

    Vielen Dank, dein Server
@endcomponent