@extends('template.backEnd')

@section('title')
    Ajouter une salade
@endsection

@section('content')
    <div class="panel panel-default">
    <div class="panel-heading"><h1>Ajouter une Salade</h1></div>
        <div class="panel-body">
        {!! Form::open(['route' => 'admin.salade.store', 'class' => 'form-horizontal panel']) !!}

        <div class="col-lg-6">
            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Le Nom']) !!}
                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                {!! Form::text('prix', null, ['class' => 'form-control', 'placeholder' => 'Le Prix']) !!}
                {!! $errors->first('prix', '<small class="help-block">:message</small>') !!}
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <div class="checkbox">
                @foreach($listeDesIngredients as $ingredient)
                    <div class="col-lg-4">
                        <label>
                            {!! Form::checkbox($ingredient->nom,$ingredient->id, null) !!} {!! $ingredient->nom !!}
                        </label>
                    </div>
                @endforeach
                    </div>
                </div>
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Ajouter un ingrédient</button>

            </div>

        </div>
    </div>

    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}
    {!! Form::close() !!}
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>

@include('Ingredients.create')
@endsection
