@extends('template.frontEnd')
@section('title')
    Merci pour votre message
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

        <div class="col-lg-12" >
            <div class="alert alert-success" id="alertMessage">
                <strong>Merci</strong> Votre message a bien été envoyé, nous vous répondrons dans les plus brefs délais.
            </div>
        </div>
    </div>
    @include('menu.footer')
@endsection