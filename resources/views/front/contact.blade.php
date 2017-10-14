@extends('template.frontEnd')
@section('title')
    Nous contacter
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
            @php($lesNotes= \App\Note::where('page', 'magasin')->orWhere('page', 'Toutes les pages')->get())
           @if(isset($lesNotes))
            @foreach($lesNotes as $laNote)
                <div class="alert alert-{{$laNote->style}}">
                    <strong>{{$laNote->titre}}</strong> {{$laNote->texte}}
                </div>
            @endforeach
               @endif
        </div>
        <div class="col-lg-12" id="contactTitle"><h3>Pour nous joindre:</h3></div>

        <div class="col-lg-6 col-xs-12" id="maps">
            <div>
                <p align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10108.808779256793!2d5.244806824170527!3d50.69763229978326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c104f00a56c29d%3A0x3b7404ec9e2ca342!2sAvenue+Reine+Astrid+42%2C+4300+Waremme!5e0!3m2!1sfr!2sbe!4v1413558909304&amp;amp;wmode=transparent&amp;amp;wmode=transparent&amp;amp;wmode=transparent&amp;amp;wmode=transparent&amp;amp;wmode=transparent" width="100%" height="300" frameborder="0" style="border:0"></iframe></p>
            </div>
        </div>

        <div class="col-lg-6 col-xs-12" id="messageForm">
            {!! Form::open(['url' => 'send', 'method' => 'get', 'role' => 'form']) !!}


            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre Nom']) !!}
                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
            </div>

            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Votre Email']) !!}
                {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
            </div>

            <div class="form-group {!! $errors->has('object') ? 'has-error' : '' !!}">
                {{ Form::select('object',
                                [   1=>'réservation',
                                    2=>'renseignement Sandwiches',
                                    3=>'renseignement Plats à emporter',
                                    4=>'renseignement Buffets',
                                    5=>'Autres'
                                ],
                                null,['class'=>'form-control','placeholder'=>'Objet de votre message']) }}
                {!! $errors->first('object', '<small class="help-block">:message</small>') !!}

            </div>
            <div class="form-group {!! $errors->has('leMessage') ? 'has-error' : '' !!}">
                {!! Form::textarea('leMessage', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                {!! $errors->first('leMessage', '<small class="help-block">:message</small>') !!}
            </div>
            {!! Form::submit('Envoyer', ['class' => 'btn btn-default pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    @include('menu.footer')
@endsection