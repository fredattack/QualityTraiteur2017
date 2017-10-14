@extends('template.backEnd')

@section('title')
    adminHome
@endsection


@section('menuBt')
@endsection

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        </div>
    @endif
    <div class="container" >
        <h1>Admin Home</h1>

{{---------------------------------------
-----------------------Les Photos--------
-----------------------------------------}}
        <div class="col-lg-6" id="photoContainer" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 style="display: inline-block;">Photos</h3>
                    <a class="btn-danger btn-sm pull-right" href="{{ route('admin.photo.index') }}" style="display: inline-block;">Modifier</a>


                </div>
                <div class="panel-body">
                    @php($listRole = \App\RolePhotos::where('id','!=', 1 )->get())
            @foreach($listRole as $role)
                        @if($role->groupe==1)
                @php($image=\App\Photo::where('role_id', $role->id)->get()->first())
                <div class="col-lg-4">
                    <div class="text-center"><h5>{{$role->nom}}</h5></div>
                    @if($image!=null)
                    <div><img src="image/{{$image['nom']}}"></div>
                    @else
                    <div><img src="image/QualityLogo.jpg" ></div>
                    @endif
                </div>
                    @elseif($role->groupe==2)
                        @php($image=\App\Photo::where('role_id', $role->id)->get()->first())
                        <div class="col-lg-4">
                            <div class="text-center"><h5>{{$role->nom}}</h5></div>
                            @if($image!=null)
                                <div><img src="image/{{$image['nom']}}" ></div>
                            @else
                                <div><img src="image/QualityLogo.jpg"></div>
                            @endif
                        </div>
                    @elseif ($role->groupe==3)
                                @php($image=\App\Photo::where('role_id', $role->id)->get()->first())
                                <div class="col-lg-4">
                                    <div class="text-center"><h5>{{$role->nom}}</h5></div>
                                    @if($image!=null)
                                        <div><img src="image/{{$image['nom']}}" ></div>
                                    @else
                                        <div><img src="image/QualityLogo.jpg" ></div>
                                    @endif
                                </div>
                        @elseif ($role->groupe==4)
                            @php($image=\App\Photo::where('role_id', $role->id)->get()->first())
                            <div class="col-lg-4">
                                <div class="text-center"><h5>{{$role->nom}}</h5></div>
                                @if($image!=null)
                                    <div><img src="image/{{$image['nom']}}" ></div>
                                @else
                                    <div><img src="image/QualityLogo.jpg" ></div>
                                @endif
                            </div>
                    @endif
            @endforeach
                </div>
            </div>
        </div>
{{-------------------------------------
----------------Les horaires-----------
----------------------------------------}}

        <div class="col-lg-6" id="horaireContainer">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Horaires</h3>
                </div>
                <div class="panel-body">
                    <table style="width: 100%">
                        @php($horaire = \App\WorkHour::all())

                    @foreach($horaire as $jour)
                            <tr> <td style="width:30% "><h4 >{{$jour->day}}:</h4></td>
                            @if($jour->startTime==$jour->endTime)
                                    <td style="width:40%"><h4 class="text-center" style="font-weight: bold">Fermé</h4></td>
                                @else <td style="width:40%"><p class="text-center" >{{$jour->startTime}} - {{$jour->endTime}}</p></td>
                                @endif
                                <td style="width:30% " ><a class="btn btn-warning btn-xs pull-right" id="{{$jour->id}}" data-toggle="modal" data-target="#myModal" onclick="PassVal({{$jour}})">modifier</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

            {{-------------------------------
            ------------les Notes------------
            ---------------------------------}}
    <div class="col-lg-6"  id="noteContainer">
            {{--create--}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div style="display: inline-block">  <h3>Notes</h3></div>
                    <div class="pull-right" style="display: inline-block">

                    </div>
                </div>
                <div class="panel-body">

                    {!! Form::open(['route' => 'admin.note.store', 'class' => 'form-horizontal panel']) !!}

                    <div class="col-lg-12">
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Le titre']) !!}
                            {!! $errors->first('text', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            {!! Form::textarea('texte', null, ['class' => 'form-control', 'placeholder' => 'Le text','size' => '50x3']) !!}
                            {!! $errors->first('text', '<small class="help-block">:message</small>') !!}
                        </div>

                    </div>
                    <div class="col-lg-5">

                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            {{ Form::label('style', 'Quel Style de Note?',['class' => 'mylabel']) }}

                            {{ Form::select('style', ['Vert', 'Bleu', 'Jaune','Rouge'],null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <div class="col-lg-5 pull-right">

                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {{ Form::label('page', 'Sur quelle page?',['class' => 'mylabel']) }}

                        {{ Form::select('page', ['Toutes les pages','Home', 'gallerie','Livre d\'or','Contact'],'',['class' => 'form-control']) }}

                        </div>

                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                    </div>
                    <div class="col-lg-12">
                    @php($lesNotes= \App\Note::all())
                    @if(count($lesNotes)!= 0)
                        index
                        <table class="table table-bordered">
                        <tr>
                            <th>le Titre</th>
                            <th>le Texte</th>
                            <th>Le Style</th>
                            <th>La Page</th>
                        </tr>
                    @endif
                    @foreach($lesNotes as $laNote)
                    <tr>
                        <td>
                        <div><strong>{{$laNote->titre}}</strong></div>
                        </td>
                        <td>
                            <div>{{$laNote->texte}}</div>
                        </td>
                        <td>
                            <div>{{$laNote->style}}</div>
                        </td>
                        <td>
                            <div>{{$laNote->page}}</div>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.note.destroy', $laNote->id]]) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer cette note ?\')'])  !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-------------------------
    -----------Users----------------
    ---------------------------}}

        <div class="col-lg-5"  id="userContainer">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <div style="display: inline-block">  <h3>Users</h3></div>
                    <div class="pull-right" style="display: inline-block">
                        <h4>Client :  {{ \App\User::where(['admin' => 0])->get()->count() }}</h4>
                        <h4>Admin : {{ \App\User::where(['admin' => 1])->get()->count() }}</h4>
                    </div>
                </div>
                <div class="panel-body">
                    @php($listUser=\App\User::all())
                     <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listUser as $user)
                    <tr>
                        <td><strong>{{$user->name}}</strong></td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->admin)
                               <strong>Admin</strong>
                                @else
                                <strong>Client</strong>
                                @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
        </div>


      {{-------------------------
      -----------Emails----------------
      ---------------------------}}
        <div class="col-lg-7">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3>Emails</h3>
                </div>
                <div class="panel-body">
                </div>
            </div>
        </div>

        <div class="col-lg-12" >
            <div class="panel-default">
                <div class="panel-heading">
                    <h3>Google Analytics</h3>
                </div>
                <div class="panel-body">
                </div>
            </div>
        </div>
</div>

            <script>
            function PassVal(res)
            {
//            alert(res['startTime']);
            $('#modalForm').attr('action', 'http://www.qualitytraiteur.be/workhour/'+res['id']);
            $('#startTime').val(res['startTime']);
            $('#endTime').val(res['endTime']);
            $('#jourNom').append(res['day']);
        }

    </script>
    @include('horaire.edit')
@endsection
