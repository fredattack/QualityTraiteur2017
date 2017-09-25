@extends('template.frontEnd')

@section('title')
    Galerie
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


    <div class="container" id="galleryMagasin">
        <div class="col-lg-12">
            @php($lesNotes= \App\note::where('page', 'magasin')->orWhere('page', 'Toutes les pages')->get())
            @foreach($lesNotes as $laNote)
                <div class="alert alert-{{$laNote->style}}">
                    <strong>{{$laNote->titre}}</strong> {{$laNote->texte}}
                </div>
            @endforeach
        </div>
        @include('Slide.magasinSlide')
    </div>


    @include('menu.footer')
@endsection
