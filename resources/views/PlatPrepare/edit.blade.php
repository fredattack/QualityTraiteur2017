@extends('template.backEnd')

@section('title')
    Ajouter un plat
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Modifier le plat : <strong>"{{$lePlat->nom}}"</strong></h2></div>
            <div class="panel-body">
                {!! Form::model($lePlat,['route' =>['admin.platprepare.update',$lePlat->id],'method'=>'put', 'class' => 'form-horizontal panel']) !!}
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
                        {{ Form::select('id_uniteVente', $listeUnitesVente,$lePlat->id_uniteVente,['class'=>'form-control col-lg-4']) }}
                        <button type="button" class="btn btn-link pull-right" data-toggle="modal" data-target="#uniteModal">Ajouter une unité de vente</button>
                    </div>

                    <div class="form-group">
                        {{Form::label('famille', 'Famille de Plat',['class'=>'col-lg-4'])}}
                        {{ Form::select('id_famille', $listeFamillePlat,$lePlat->id_famille,['class'=>'form-control col-lg-4']) }}
                        <button type="button" class="btn btn-link pull-right" data-toggle="modal" data-target="#familleModal">Ajouter une famille de plat</button>
                    </div>
                    <div class="checkbox" >
                        {!! Form::checkbox('publier') !!} <p>publier le plat</p>
                    </div>
                </div>

                <div class="col-lg-6" style="padding-left: 3em">
                    <div class="form-group {{ $errors->has(':name') ? 'has-error' : '' }}">
                        {{ Form::textarea('description', null, array('class'=>'form-control','placeholder'=>'Description')) }}
                        {{ $errors->first('description', '<span class="help-block">:message</span>') }}
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