@extends('layout.layout')

@section('title' , 'Formular Validator')

@section('content')

    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $err)
                <li>{{  $err  }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/validate">
        {{  csrf_field()  }}
        Username:
        <input type="text" name="username">
        <br>
        E-mail:
        <input type="email" name="email">
        <br>
        <input type="submit" value="Los...!">
    </form>

@endsection