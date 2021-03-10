@extends('layouts.app')

@section('title', 'Products')

@section('content')
  <div class="container">
    @foreach($formati as $formato)
      <div class="card">
        <img src="{{ $formato['src']}}" alt="{{ $formato['titolo']}}">
      </div>
    @endforeach
  </div>

@endsection
