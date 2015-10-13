@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Envoi d'un document Word</div>
            <div class="panel-body"> 
                @if(session()->has('error'))
                    <div class="alert alert-danger">{!! session('error') !!}</div>
                @endif
                {!! Form::open(['url' => 'word/form', 'files' => true]) !!}
                    <div class="form-group {!! $errors->has('document') ? 'has-error' : '' !!}">
                        {!! Form::file('document', ['class' => 'form-control']) !!}
                        {!! $errors->first('document', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop