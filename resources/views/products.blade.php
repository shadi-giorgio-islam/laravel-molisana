@extends('layouts.app')

@section('title', 'Products')

@section('content')
  <div class="container">
    @foreach($formati as $formato)
      <div class="card">
        <img src="{{ $formato['src']}}" alt="{{ $formato['titolo']}}">
        <div class="layer">
          <div class="title">
            {{ $formato['titolo']}}
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection
