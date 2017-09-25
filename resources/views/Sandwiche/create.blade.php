@extends('template.backEnd')

@section('title')
Ajouter un sandwiche
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h2>Création d'un sandwiche</h2></div>
    <div class="panel-body">
    {!! Form::open(['route' => 'admin.sandwiche.store', 'class' => 'form-horizontal panel']) !!}

    <div class="col-lg-6">
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group">
            {{Form::label('famille', 'Famille de sandwiche',['class'=>'col-lg-4'])}}
            {{ Form::select('familleSandwiche_id', $familleSandwiches,['class'=>'form-control col-lg-4']) }}
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Ajouter une Famille</button>
        </div>
        <div class="form-group {!! $errors->has('prixTiers') ? 'has-error' : '' !!}">
            {!! Form::text('prixTiers', null, ['class' => 'form-control', 'placeholder' => 'prix 1/3']) !!}
            {!! $errors->first('prixTiers', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('prixDemi') ? 'has-error' : '' !!}">
            {!! Form::text('prixDemi', null, ['class' => 'form-control', 'placeholder' => 'prixDemi 1/2']) !!}
            {!! $errors->first('prixDemi', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

        <div class="col-lg-6">
            <div class="form-group">
                <div class="checkbox" >
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

    <a href="javascript:history.back()" class="btn btn-primary pull-left">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>

@include('Ingredients.create')

@endsection
