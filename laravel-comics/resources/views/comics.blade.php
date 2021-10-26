@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<div class="container">
    <!-- titolo sezione -->
    <div class="section-title">Current series</div>
    <!-- sezione delle card -->
    <div class="card-section">
      {{-- <ImgCard v-for="(card,i) in cards" :key="i" :cardData="card"/> --}}
      @foreach ($comics as $comic)

        <div class="card">
          <a href="{{ url("/comic/$loop->index") }}">
            <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
            <div class="title"> {{$comic['series']}} </div>
          </a>  
        </div>

      @endforeach
    </div>
    <!-- pulsante viewMore card -->
    <button class="view-more">Load more</button>
  </div>
</div>
@endsection