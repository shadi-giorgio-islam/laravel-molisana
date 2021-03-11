@extends('layouts.app')

@section('title', 'Products')

@section('content')
  <div id="products">
    <div class="comment">
      <h2>LA MOLISANA: PASTA, SEMOLE E FARINE DI QUALITÀ</h2>
      <p>TIPI DI PASTA LA MOLISANA: IL CATALOGO DEI FORMATI</p>
    </div>
    @foreach($formati as $key => $formato)
      <h2>{{$key}}</h2>
      <div class="container">
        @foreach($formato as $key => $pasta)
          <div class="card">
            <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
            <div class="layer">
              <div class="title">
                <a href="{{route('pagina-dettagli', ['id' => $key])}}">{{ $pasta['titolo']}}</a>
                <hr>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>

@endsection
