@extends('layouts.app')

@section('title-block')
    Contacts  
@endsection

@section('content')
    <h1>Contacts</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="" action="{{ route('contact-form')}}" method="post">

        @csrf

        <div class="form-group mb-2">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="form-group mb-2">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <div class="form-group mb-2">
            <label for="subject">Subject:</label>
            <input class="form-control" type="subject" name="subject" id="subject">
        </div>

        <div class="form-group mb-2">
            <label for="text">Text:</label>
            <textarea class="form-control" name="text" id="text"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Send</button>
        </div>
        
    </form>   
@endsection
