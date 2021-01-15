@component('mail::message')
  Das ist eine Kontaktanfrage
 
  Name: {{ $request->name }}
 
  E-Mail: {{ $request->email }}
 
  Nachricht: {{ $request->message }}
 
  Vielen Dank, dein Server
@endcomponent
