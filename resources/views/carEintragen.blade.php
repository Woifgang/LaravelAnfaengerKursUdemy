@extends('layout.layout')

@section('title' , 'Auto Eintragen')

@section('content')

    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $err)
                <li>{{  $err  }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/autoGespeichert">
        {{  csrf_field()  }}
        Automarke:
        <input type="text" name="name">
        <br>
        Baujahr:
        <input type="number" name="baujahr">
        <br>
        <input type="submit" value="Los...!">
    </form>

@endsection