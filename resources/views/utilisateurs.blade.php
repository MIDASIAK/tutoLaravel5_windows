@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Saisie des informations</div>
            <div class="panel-body"> 
                {!! Form::open(array('url' => 'utilisateurs/form')) !!}
                    <div class="form-group {!! $errors->has('usr_nom') ? 'has-error' : '' !!}">
                        {!! Form::text('usr_nom', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre nom')) !!}
                        {!! $errors->first('usr_nom', '<small class="help-block">:message</small>') !!}
                    </div>
			    <div class="form-group {!! $errors->has('usr_prenom') ? 'has-error' : '' !!}">
                        {!! Form::text('usr_prenom', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre pr&eacute;nom')) !!}
                        {!! $errors->first('usr_prenom', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Enregistrer !', array('class' => 'btn btn-info pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop