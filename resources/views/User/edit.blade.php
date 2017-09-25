@extends('template.backEnd')

@section('content')
        <br>
            <div class="panel-heading">Modification d'un utilisateur</div>
                <div class="col-sm-12">
                    {!! Form::model($user, ['route' =>
                        ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('admin', 1, null) !!}Administrateur
                            </label>
                        </div>
                    </div>

                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
@endsection