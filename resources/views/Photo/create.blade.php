@extends('template.backEnd')

@section('title')
    Ajouter une images
@endsection

@section('content')
    <h1>Ajouter une Image</h1>

    {{Form::open(array('route' => 'admin.photo.store','files'=>'true'))}}

    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => "Titre de l'image"]) !!}
        {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
    </div>

    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        {!! Form::file('image') !!}
        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
    </div>

    <div class="form-group">
        {{ Form::select('role_id', $roles,1) }}
    </div>

    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}
    {!! Form::close() !!}


@endsection