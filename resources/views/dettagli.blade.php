@extends('layouts.app')

@section('title', $prodotto['titolo'])

@section('content')
  <div id="dettaglio">
    <h2>{{$prodotto['titolo']}}</h2>
    <div class="foto">
      <img src="{{$prodotto['src-h']}}" alt="pasta">
      <img src="{{$prodotto['src-p']}}" alt="pasta">
    </div>
    <div class="text">
      <div class="info">
        <div class="tipo">
          TIPOLOGIA: {{$prodotto['tipo']}}
        </div>
        <div class="cottura">
          <i class="far fa-clock"></i> TEMPI DI COTTURA: {{$prodotto['cottura']}}
        </div>
        <div class="peso">
          PESO: {{$prodotto['peso']}}
        </div>
      </div>
      <p>{!! $prodotto['descrizione'] !!}</p>
    </div>
  </div>
@endsection
