@extends('layouts.app')

@section('content')
<div class="container">
    <!-- titolo sezione -->
    <div class="section-title">Current series</div>
    <!-- sezione delle card -->
    <div class="card-section">
      {{-- <ImgCard v-for="(card,i) in cards" :key="i" :cardData="card"/> --}}
      @foreach ($cardsData as $cardData)
        <div class="card">
          <img src="{{$cardData['thumb']}}" :alt="{{$cardData['series']}}">
          <div class="title"> {{$cardData['series']}} </div>
        </div>
      @endforeach
    </div>
    <!-- pulsante viewMore card -->
    <button class="view-more">Load more</button>
  </div>
</div>
@endsection