@extends('template.backEnd')


@section('title')
    la liste de sandwiches
@endsection

@section('menuBt')
    @include('menu.menuBt')
@endsection


@section('content')
    <div class="container" id="mainContainer">
        <h1>Nos Sandwiches</h1>
        <table class="table ">
            <tr>
                <th style="width: 30%"><h2></h2></th>
                <th style="width: 50%"><h3></h3></th>
                <th style="width: 10%"><h3>prix 1/3</h3></th>
                <th style="width: 10%"><h3>prix 1/2</h3></th>
            </tr>
        </table>
    @foreach($familleSandwiches as $familleSandwiche)
        <h2>Les {{$familleSandwiche->nom}} :</h2>
        @foreach($sandwiches as $sandwiche)
            @if($sandwiche->familleSandwiche_id == $familleSandwiche->id)
                    <table class="table borderless">
                        <tr>
                            <td style="width: 30%"><strong>{!! $sandwiche->nom !!}</strong></td>
                            <td style="width: 50%">
                                @foreach($sandwiche->composant as $item   )
                                    @if(array_search($item, $sandwiche->composant ) !=count($sandwiche->composant)-1)
                                        {!! $item -> nom . ', ' !!}
                                    @else
                                        {!! $item -> nom . '.' !!}
                                    @endif
                                @endforeach
                            </td>
                            <td style="width: 10%">{!! $sandwiche->prixTiers !!}</td>
                            <td style="width: 10%">{!! $sandwiche->prixDemi !!}</td>
                        </tr>
                    </table>
            @endif
        @endforeach
    @endforeach

    </div>
    @endsection