@extends('template.frontEnd')

@section('title')
    Page d'acceuil
@endsection

@section('content')

    <style>#footer{display: none;}</style>
    <script>
        initApp();
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

        @php($nom=session()->get('HomePage'))

        <button class="btn btn-primary-outline text-center btn-lg" id="btnEnter" onclick="Enter()">Entrer</button>

        <img src="{{asset("/image/$nom")}}" id="bg" alt="">

        @include('menu.menuBt')

        <div class="loader"></div>

        <div class="container" id="zoneProduit">
            <div class="col-lg-12" id="listProduit"></div>
        </div>

        <div class="container">
            <div class="col-lg-12" id="zoneAdvise">
                {{--zone affiche 3 avis par jquery--}}
            </div>
        </div>
    </div>

    @include('menu.footer')
@endsection
