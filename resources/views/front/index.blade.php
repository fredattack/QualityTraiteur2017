@extends('template.frontEnd')

@section('content')

<script>
    showAdvise();
</script>
    <div class="container">
        <div class="col-lg-12" id="zoneNews">
        @php($lesNotes= \App\note::where('page', 'home')->orWhere('page', 'Toutes les pages')->get())
        @foreach($lesNotes as $laNote)
            <div class="alert alert-{{$laNote->style}}">
                <strong>{{$laNote->titre}}</strong> {{$laNote->texte}}
            </div>
        @endforeach
        </div>
    </div>

    @include('Slide.homeSlide')

    <div class="container">

        @include('menu.menuBt')

        <div class="loader"></div>
        <div class="container" id="zoneProduit">
            <div class="col-lg-12" id="listProduit">
                <script>
                    // slide Top de la navBar
                    $("#navBar").addClass('navbar-fixed-top');
                    $('#footer').css('opacity', '1');
                    //fixe la position des éléments au top.
                    $('.navbar-brand').css({
                    'margin-bottom': '0em',
                    'padding-top': '3em'
                    });
                    $('.navbar').css('opacity', '1');
                </script>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12" id="zoneAdvise">
            {{--zone affiche 3 avis par jquery--}}
        </div>
    </div>

    @include('menu.footer')
@endsection
