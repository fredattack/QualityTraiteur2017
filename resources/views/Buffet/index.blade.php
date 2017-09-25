@extends('template.backEnd')

@section('title')
    la liste des Buffets
@endsection



@section('content')
    <div class="container">
        <h1>Les Buffets</h1>
        {!! Form::open(['method' => 'GET', 'route' => 'admin.buffet.create']) !!}
        {!! Form::submit('Ajouter un Buffet', [ 'class' => 'btn btn-primary btn-lg pull-right', 'onclick' => '']) !!}
        {!! Form::close() !!}
        <table class="table table-bordered">
            <tr>
                <th ><h2>Nom</h2></th>
                <th ><h2>Description</h2></th>
                <th><h3>prix </h3></th>
                <th></th>
            </tr>
            @foreach ($listeBuffets as $buffet)
                <tr>
                    <td >
                        <strong> {{$buffet->nom}}</strong>
                    </td>
                    <td>
                        {{$buffet->description}}
                    </td>
                    <td>
                        {!! $buffet->prix !!}
                    </td>
                    <td>

                        {!! Form::open(['method' => 'GET', 'route' => ['admin.buffet.edit', $buffet->id]]) !!}
                        {!! Form::submit('Modifier', [ 'class' => 'btn btn-primary ', 'onclick' => '']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.buffet.destroy', $buffet->id]]) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer ce buffet ?\')'])  !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
