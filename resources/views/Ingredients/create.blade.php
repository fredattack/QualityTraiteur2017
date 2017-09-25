



    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajouter un ingrédient</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'ingredient.store', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Ingredient']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right','onclick'=>"javascript:window.location.reload()"/*,'data-dismiss'=>'modal'*/]) !!}
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>

