@extends('template.backEnd')

@section('title')
    les Images
@endsection


@section('content')
    @if(session()->has('message'))

        <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    @if(isset($roleNonAttribues))
        @foreach($roleNonAttribues as $role)
            <div style="color: red; font-size: large">
                Aucune Image n'est utilisé comme {{$role}} .
            </div>

        @endforeach
    @endif
    <div class="container">
    <h1>la liste des Images</h1>
    <br>
        <table>
            <tr>
                <td style="width: 33%">
                    {!! Form::open(['method' => 'GET', 'route' => 'admin.photo.create']) !!}
                    {!! Form::submit('Ajouter une photo', [ 'class' => 'btn btn-primary btn-lg ',]) !!}
                    {!! Form::close() !!}
                </td>
                <td style="width: 33%">
                    <h4 style="display: inline">slide:</h4>
                    <button type="button" class="btn btn-success" aria-label="Left Align" onclick="addSlide(1)">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>
                    @php($nbSlide=\App\RolePhotos::where('groupe','=', '3' )->count())
                    <input type="text" value="{{$nbSlide}}" maxlength="2" size="2">
                    <button type="button" class="btn btn-danger" aria-label="Left Align" onclick="addSlide(-1)">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </button>
                </td>
                <td style="width: 33%">
                    <h4 style="display: inline">gallerie:</h4>
                    <button type="button" class="btn btn-success" aria-label="Left Align" onclick="addGallery(1)">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>
                    @php($nbGallerie=\App\RolePhotos::where('groupe','=', '4' )->count())

                    <input type="text" value="{{$nbGallerie}}" maxlength="2" size="2">
                    <button type="button" class="btn btn-danger" aria-label="Left Align" onclick="addGallery(-1)">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </button>

                </td>




            </tr>
        </table>
    @foreach($photos as $photo)
        <div class="col-lg-4 col-md-6 col-xs-12">
            <h2>{!! $photo->titre !!}</h2>
                <img alt="{!! $photo->titre !!}" src="{{asset('image/'.$photo->nom)}}" style="height:180px; width:270px">

        <td rowspan="2">
                {!! Form::open(['method' => 'put', 'route' => ['admin.photo.update', $photo->id,]]) !!}
            {{ Form::select('role_id', $roles,$photo->role_id,['class'=>'form-control','onchange'=>'upDatePhoto(this,'.$photo->id.')']) }}
            {{--{!! Form::submit('Modifier', [ 'class' => 'btn btn-default', 'onclick' => '']) !!}--}}
            {!! Form::close() !!}
        </td>

        <td rowspan="2">
            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.photo.destroy', $photo->id]]) !!}
            {!! Form::submit('Supprimer', ['class' => 'btn btn-defaul', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer cette image ?\')']) !!}
            {!! Form::close() !!}
        </td>

    </div>

    @endforeach
    </div>
@endsection
