@extends('template.backEnd')

@section('title')
    Ajouter un buffet
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Ajouter un Buffet</h2></div>
            <div class="panel-body">
                {!! Form::open(['route' => 'admin.buffet.store', 'files'=>'true','class' => 'form-horizontal panel']) !!}
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

                </div>

                <div class="col-lg-6" style="padding-left: 3em">
                    <div class="form-group {{ $errors->has(':name') ? 'has-error' : '' }}">
                        {{ Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Description' , 'cols' => '40','rows' => '3']) }}
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
@endsection