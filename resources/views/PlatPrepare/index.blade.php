@extends('template.backEnd')

@section('title')
    la liste des plats Prepares
@endsection



@section('content')
    <div class="container">
        <h1>La liste des Plats préparés</h1>
        {!! Form::open(['method' => 'GET', 'route' => 'admin.platprepare.create']) !!}
        {!! Form::submit('Ajouter un plat', [ 'class' => 'btn btn-primary btn-lg pull-right', 'onclick' => '']) !!}
        {!! Form::close() !!}
        <table class="table table-bordered">
            <thead >
            <tr>
                <th ></th>
                <th class="text-center"><p>Famille</p></th>
                <th class="text-center"><p>Nom</p></th>
                <th class="text-center"><p>Description</p></th>
                <th class="text-center"><p>prix </p></th>
                <th class="text-center"><p>Unite de Vente</p></th>

            </tr>
            </thead>
            <tbody>
            @foreach ($listePlatPrepares as $platPrepare)
                <tr>
                    <td>
                        {!! Form::checkbox($platPrepare,$platPrepare,$platPrepare->publier ,['onclick'=>'upDateProduct('.$platPrepare->id.')']) !!}

                    </td>
                    <td class="text-center">
                        <strong>{{ $listeFamillePlat[$platPrepare->id_famille]}}</strong>
                    </td>
                    <td class="nomProduit">
                        <strong> {{$platPrepare->nom}}</strong>
                    </td>
                    <td>
                    {{$platPrepare->description}}
                    </td>
                    <td>
                        {!! $platPrepare->prix !!}
                    </td>
                    <td>
                        {{ $listeUniteVente [$platPrepare->id_uniteVente]}}
                    </td>
                    <td>

                        {!! Form::open(['method' => 'GET', 'route' => ['admin.platprepare.edit', $platPrepare->id]]) !!}
                        {!! Form::submit('Modifier', [ 'class' => 'btn btn-primary ', 'onclick' => '']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.platprepare.destroy', $platPrepare->id]]) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer ce plat ?\')'])  !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
