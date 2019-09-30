@extends('template')

@section('content')
<div class="container">
    <h1>Contact Us</h1>

<form action="{{ route('contact')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="Message">Message:</label>
        <textarea id="message" name="message" class="form-control"></textarea>
    </div>

    <input type="submit" value="Send Email" class="btn btn-primary">
</form>
</div>
@endsection
