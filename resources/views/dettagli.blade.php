@extends('layouts.app')

@section('title', $prodotto['titolo'])

@section('content')
  <div class="foto-uno">
    <img src="{{$prodotto['src-h']}}" alt="pasta">
  </div>
@endsection
