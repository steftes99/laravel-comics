@extends('layouts.app')

@section('title', $comic['title'])

@section('content')
    <div class="comic-container">
        <div class="top">
            <div class="left">
                <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
            </div>
            <div class="center">
                <h1>{{$comic['title']}}</h1>
                <div class="price-container">
                    <p>U.S. Price : </p> <span>{{$comic['price']}}</span>
                    <span class="avalaible">Avalaible</span>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="right">
                <img src="{{asset('img/pub.jpg')}}" alt="logo-dc">
            </div>
        </div>
        <div class="bottom">

        </div>
        
        
    </div>
@endsection
    
