@extends('template.backEnd')

@section('title')
Modifier une salade
@endsection


@section('content')
<div class="container">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h2>Modifier la Salade: <strong>"{{$salade->nom}}"</strong> </h2>
        </div>
        <div class="panel-body" >
            {!! Form::model($salade, ['route' =>['admin.salade.update', $salade->id], 'method' => 'put', 'class' =>'form-horizontal panel']) !!}

                <div class="col-lg-6" >
                    <div class=" form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Le Nom']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('prix', null, ['class' => 'form-control', 'placeholder' => 'Le Prix']) !!}
                        {!! $errors->first('prix', '<small class="help-block">:message</small>') !!}
                    </div>
                    @php
                        $composants = collect($salade->composant)->pluck('nom');
                    @endphp
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                            <div class="checkbox">
                                @foreach($ingredients as $ingredient)
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
    </div>
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}
    {!! Form::close() !!}

    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour</a>
</div>
@include('Ingredients.create')

@endsection