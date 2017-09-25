@extends('template.frontEnd')
@section('title')
    Livre D'or
@endsection
@section('content')
    <script>
        // slide Top de la navBar
        $("#navBar").addClass('navbar-fixed-top');
        //fixe la position des éléments au top.
        $('.navbar-brand').css({
            'margin-bottom': '0em',
            'padding-top': '3em'
        });
        $('.navbar').css('opacity', '1');
    </script>


    <div class="container" >
        <div class="col-lg-12" >
            @php($lesNotes= \App\note::where('page', 'magasin')->orWhere('page', 'Toutes les pages')->get())
           @if(isset($lesNotes))
            @foreach($lesNotes as $laNote)
                <div class="alert alert-{{$laNote->style}}">
                    <strong>{{$laNote->titre}}</strong> {{$laNote->texte}}
                </div>
            @endforeach
               @endif
        </div>
        <div class="col-lg-12" id="messageForm">
            <div class="col-lg-4">
                <h2>Votre avis nous intéresse  : </h2>
            </div>
            <div class="col-lg-4" >
                <div id="AverageNote">
                    <h4>Indice de satisfaction : </h4><h2> {{$noteMoyenne}}/5</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-default btn-lg pull-right" data-toggle="modal" data-target="#myModal">Donnez votre avis</button>
            </div>
        </div>
        <div class="col-lg-12" id="zoneComment">
            @foreach($adviseList as $advise)
                <div class="commentBlock">
                    <h4><strong>{{$advise-> userName}}</strong></h4> de {{$advise->localite}}
                    <input id="input{{$advise->id}}" value="{{$advise->note}}" class="rating"   data-size="xs" >
                    <hr>
                    <p>{{$advise->message}}</p>
                </div>
                <script>
                    $('#input{{$advise->id}}').rating('refresh', { displayOnly: true});
                </script>
            @endforeach
        </div>
    </div>
    @include('Forms.adviseForms')
    @include('menu.footer')

@endsection