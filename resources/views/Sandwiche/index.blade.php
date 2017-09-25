@extends('template.backEnd')

@section('title')
la liste de sandwiches
@endsection


@section('menuBt')
@endsection

@section('content')
    <div class="container">
<h1>La liste des Sandwiches</h1>
        {!! Form::open(['method' => 'GET', 'route' => 'admin.sandwiche.create']) !!}
        {!! Form::submit('Ajouter un sandwiche', [ 'class' => 'btn btn-primary btn-lg ',]) !!}
        {!! Form::close() !!}

<table class="table table-bordered">
     <tr>
        <th colspan="6"><h2>Nom</h2></th>
         <th><h3>Ingredients</h3></th>
         <th><h3>Famille</h3></th>
         <th><h3>prix 1/3</h3></th>
        <th><h3>prix 1/2</h3></th>
      </tr>

    @foreach ($sandwiches as $sandwiche)
        <tr>
            <td colspan="6">
                <strong>{!! $sandwiche->nom !!}</strong>
            </td>
            <td>
                @foreach($sandwiche->composant as $item   )
                    @if(array_search($item, $sandwiche->composant ) !=count($sandwiche->composant)-1)
                        {!! $item -> nom . ', ' !!}
                    @else
                        {!! $item -> nom . '.' !!}
                    @endif
                @endforeach
            </td>
        <td>
            {{ $familleSandwiches[$sandwiche->familleSandwiche_id]}}
        </td>
        <td>
            {!! $sandwiche->prixTiers !!}
        </td>
        <td>
            {!! $sandwiche->prixDemi !!}
        </td>
        <td>
            {!! Form::open(['method' => 'GET', 'route' => ['admin.sandwiche.edit', $sandwiche->id]]) !!}
            {!! Form::submit('Modifier', [ 'class' => 'btn btn-primary ', 'onclick' => '']) !!}
            {!! Form::close() !!}
        </td>
        <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.sandwiche.destroy', $sandwiche->id]]) !!}
            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer ce sandwiche ?\')'])  !!}
            {!! Form::close() !!}
        </td>
  </tr>
  @endforeach
</table>
</div>
@endsection
