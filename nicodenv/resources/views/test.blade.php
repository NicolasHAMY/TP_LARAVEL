@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création Article</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! shop::open(['url' => 'user', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
					  	{!! shop::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
					  	{!! shop::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					  	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
					  	{!! shop::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
					  	{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group">
					  	{!! shop::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! shop::checkbox('admin', 1, null) !!} Administrateur
							</label>
						</div>
					</div>
					{!! shop::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! shop::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@stop
