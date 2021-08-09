@extends('layout')

@section('title','Portfolio')


@section('content')
    <h1>Portfolio </h1>
    @if($portfolio)
    @forelse($portfolio as $pi)

    <li> {{ $pi['title'] }} </li>
    @empty
    <li> No hay nada para mostrar </li>
    @endempty
    @endforelse
    
@endsection
