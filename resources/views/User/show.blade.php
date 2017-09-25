@extends('template.backEnd')

@section('content')

        <br>
                <p>Nom : {{ $user->name }}</p>
                <p>Email : {{ $user->email }}</p>
                @if($user->admin == 1)
                    Administrateur
                @endif
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>

@endsection