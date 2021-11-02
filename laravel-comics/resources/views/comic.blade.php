@extends('layouts.app')

@section('title', $comic['title'])

@section('content')
    <div class="comic-container">
        <div class="top">
            <div class="left">
                <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
            </div>
            <div class="center">
                <h2>{{$comic['title']}}</h2>
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
            <div class="bottom-left">
                <h2>Talent</h2>
                <hr>
                <div class="info-container">
                    <p>Art by: </p>
                    <p class="artist">
                        @foreach ($comic["artists"] as $artist)
                            {{$artist . ','}} 
                        @endforeach
                    </p>
                    
                </div>

                <hr>
               
                <div class="info-container">
                    <p>Written by:</p>
                    <p class="artist">
                        @foreach ($comic['writers'] as $writer)
                            {{$writer . ','}}
                        @endforeach
                    </p>
                    
                </div>
                <hr>
              
            </div>
            <div class="bottom-right">
                <h2>Specs</h2>
                <hr>
                <div class="info">
                    <p>Series:</p> <p class="series">{{$comic['series']}}</p>
                </div>
                
                <hr>
                <div class="info">
                    <p>U.S. Price:</p> <p>{{$comic['price']}}</p> 
                </div>
                
                <hr>
                <div class="info">
                    <p>On Sale Date:</p> <p>{{$comic['sale_date']}}</p> 
                </div>
                
                <hr>
            </div>
        </div>
        
        
    </div>
@endsection
    
