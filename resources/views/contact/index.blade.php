@extends('layouts.main')
@section('content')
    <h1>Kontaktformular</h1>
    <form method="post" action="/kontakt">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="name">E-Mail:</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="subject">Betreff:</label>
            <input type="text" name="subject" class="form-control" id="subject">
        </div>
        <div class="form-group">
            <label for="message">Nachricht:</label>
            <textarea name="message" id="message" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Abschicken</button>
    </form>
@endsection