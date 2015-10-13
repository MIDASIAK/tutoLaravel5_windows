@extends('tempjeu')

@section('contenu')
    {!! Form::open(['url' => 'jeu/nomjeu']) !!}
        {!! Form::label('jeu', 'Saisir votre jeu : ') !!}
        {!! Form::text('jeu') !!}
        {!! Form::submit('Valider') !!}
    {!! Form::close() !!}
@stop