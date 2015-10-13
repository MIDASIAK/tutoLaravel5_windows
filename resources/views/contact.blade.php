@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">Contactez-moi</div>
            <div class="panel-body"> 
                {!! Form::open(['url' => 'contact/form']) !!}
				<div class="form-group {!! $errors->has('civ') ? 'has-error' : '' !!}">
                        	{!! Form::radio('civ', 'Monsieur', ['class' => 'form-control']) !!} M.
					{!! Form::radio('civ', 'Mademoiselle', ['class' => 'form-control']) !!} Mlle
					{!! Form::radio('civ', 'Madame', ['class' => 'form-control']) !!} Mme
                        {!! $errors->first('civ', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
				<div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prenom']) !!}
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                        {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                        {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop