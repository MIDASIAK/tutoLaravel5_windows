@extends('template')

@section('titre')
    Les articles
@stop

@section('contenu')
    <p>C'est l'article n° {{ $numero }}</p>
@stop