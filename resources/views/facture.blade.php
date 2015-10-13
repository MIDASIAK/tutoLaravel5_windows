@extends('template')

@section('titre')
    Les factures
@stop

@section('contenu')
    <p>C'est la facture n° {{ $numero }}</p>
@stop