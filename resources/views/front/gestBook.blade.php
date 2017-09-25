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