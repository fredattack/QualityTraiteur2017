<div id="myModal" class="modal fade" role="dialog">
    <input id="idField" name="name" type="hidden" value="">
    <div class="modal-dialog">
{{--    @php($jour=\App\WorkHour::findOrFail(1))--}}

    <!-- Modal content-->

        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modifier les Horaires</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['workhour.update',18],
                                'method'=> 'put',
                                'class' => 'form-horizontal panel',
                                'id'=>'modalForm']) !!}

                    <div class="ligne">
                        <h3 id="jourNom"></h3>
                        <div class="row form-group">
                            <div class="col-sm-10">
                                <label  class="col-sm-6 control-label">Heure d'ouverture :</label>
                                <div class="col-sm-4 input-group date">
                                    {{ Form::text('startTime',0,['class'=>'form-control','id'=>'startTime']) }}
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-10">
                                <label  class="col-sm-6 control-label">Heure de fermeture :</label>
                                <div class="col-sm-4 input-group date">
                                    {{ Form::text('endTime',0,['class'=>'form-control','id'=>'endTime']) }}
                                    {{--<input class="form-control" name="name" type="text" value="{{$jour->endTime}}">--}}
                                    <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                </div>
                            </div>
                        </div>
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right','onclick'=>""/*,'data-dismiss'=>'modal'*/]) !!}
                {!! Form::close() !!}
            </div>

        </div>

    </div>
</div>