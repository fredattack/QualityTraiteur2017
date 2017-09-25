@extends('template.backEnd')

@section('title')
    Ajouter un plat
@endsection

@section('content')
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Ajouter un plat</h2></div>
            <div class="panel-body">
                {!! Form::open(['route' => 'admin.platprepare.store', 'class' => 'form-horizontal panel']) !!}
                {{--<div class="col-lg-1"></div>--}}

                {{--<div class="col-lg-1"></div>--}}

                <div class="col-lg-6">
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('prix', null, ['class' => 'form-control', 'placeholder' => 'Prix']) !!}
                        {!! $errors->first('prix', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('uniteVente', 'Unite de Vente',['class'=>'col-lg-4'])}}
                        {{ Form::select('id_uniteVente', $listeUnitesVente,'1',['class'=>'form-control']) }}
                        <button type="button" class="btn btn-link pull-right" data-toggle="modal" data-target="#uniteModal">Ajouter une unité de vente</button>
                    </div>


                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Publier le Plat
                        </label>
                    </div>
                </div>

                <div class="col-lg-6" style="padding-left: 3em">
                    <div class="form-group {{ $errors->has(':name') ? 'has-error' : '' }}">
                        {{ Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Description' , 'cols' => '40','rows' => '3']) }}
                        {{ $errors->first('description', '<span class="help-block">:message</span>') }}
                    </div>
                    <div class="form-group pagination-centered">
                        {{Form::label('famille', 'Famille de Plat',['class'=>'col-lg-4','style'=>'margin-top = 2em'])}}
                        {{ Form::select('id_famille', $listeFamillePlat,'1',['class'=>'form-control col-lg-4']) }}
                        <button type="button" class="btn btn-link pull-right" data-toggle="modal" data-target="#familleModal">Ajouter une famille de plat</button>
                    </div>

                </div>


            </div>
    </div>
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}

    <a href="javascript:history.back()" class="btn btn-primary pull-left">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
    {!! Form::close()!!}
    </div>

    @include('FamillePlat.create')
    @include('UnitesVente.create')
@endsection