@extends('template.backEnd')

@section('title')
Modifier un sandwiche
@endsection


@section('content')
<div class="container">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h2>Modifier le Sandwiche: <strong>"{{$sandwiche->nom}}"</strong></h2>
        </div>

        <div class="panel-body">
        {!! Form::model($sandwiche, ['route' =>['admin.sandwiche.update', $sandwiche->id],
                                    'method' => 'put',
                                    'class' =>'form-horizontal panel']) !!}

                <div class="col-lg-6" >
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('famille', 'Famille de sandwiche',['class'=>'col-lg-4'])}}
                        {{ Form::select('familleSandwiches', $familleSandwiches,['class'=>'form-control col-lg-4']) }}
                        {!! link_to_route('IngredientInModel', 'Ajouter une famille', ['class' => 'btn btn-success btn-block col-lg-4','style'=>'margin-left=20px']) !!}
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
                    <div class="form-group"></div>
                        <div class="checkbox" >
                            @foreach($listeDesIngredients as $ingredient)
                                <div class="col-lg-4">
                                    <label>
                                        @if(in_array($ingredient->nom,($listeComposant))==true)
                                            {!! Form::checkbox($ingredient->nom,$ingredient->id, true) !!} {!! $ingredient->nom  !!}
                                        @else
                                            {!! Form::checkbox($ingredient->nom,$ingredient->id, false) !!} {!! $ingredient->nom !!}
                                        @endif
                                    </label>
                                </div>
                            @endforeach
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
</div>

    @include('Ingredients.create')
@endsection