@extends('template.backEnd')

@section('title')
    la liste de salades
@endsection

@section('menuBt')
@endsection


@section('content')
    <div class="container">
<h1>La liste des Salades</h1>
        <input id="toggle-event" type="checkbox" data-toggle="toggle">
        <div id="console-event"></div>


        {!! Form::open(['method' => 'GET', 'route' => ['admin.salade.create'],'class'=>"btn"]) !!}
    {!! Form::submit('Ajouter une salade', [ 'class' => 'btn btn-primary btn-lg ',]) !!}
    {!! Form::close() !!}

<table class="table table-bordered">
        <tr>
            <th colspan="6"><h2>Nom</h2></th>
            <th><h3>prix</h3></th>
            <th><h3>ingredients</h3></th>
        </tr>
        @foreach ($salades as $salade)
            <tr>
                <td colspan="6">
                    <strong>{!! $salade->nom !!}</strong>
                </td>
                <td>
                    {!! $salade->prix !!}
                </td>
                <td>
                @foreach($salade->composant as $item   )
                    @if(array_search($item, $salade->composant ) !=count($salade->composant)-1)
                            {!! $item -> nom . ', ' !!}
                        @else
                            {!! $item -> nom . '.' !!}
                        @endif
                @endforeach
                </td>
                <td >
                    {!! Form::open(['method' => 'GET', 'route' => ['admin.salade.edit', $salade->id]]) !!}
                    {!! Form::submit('Modifier', [ 'class' => 'btn btn-primary', 'onclick' => '']) !!}
                    {!! Form::close() !!}
                </td>
                <td >
                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.salade.destroy', $salade->id]]) !!}
                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer ce salade ?\')']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
