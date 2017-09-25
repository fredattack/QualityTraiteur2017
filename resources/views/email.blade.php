@extends('template.backEnd')

@section('content')
    <br>
<h1>test</h1>
            <h1>Inscription à la lettre d'information</h1>

                {!! Form::open(['route' => 'storeEmail']) !!}
                <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                    {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre email')) !!}
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}



@endsection