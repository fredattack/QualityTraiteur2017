

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Votre Commentaire</h4>
			</div>
			<div class="modal-body">


				{!! Form::open(array('route' => 'advise.store', 'method' => 'POST')) !!}
				<div class="form-group {!! $errors->has('note') ? 'has-error' : '' !!}">
				<input id="input-id" name="note"  class="rating" min=0 max=5 step=0.5 data-size="xs" style="float:right">
					{!! $errors->first('note', '<small class="help-block">:message</small>') !!}

				</div>
				<br>

				<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
					{!! Form::text('userName', null, ['class' => 'form-control', 'placeholder' => 'Votre Nom']) !!}
					{!! $errors->first('userName', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
					{!! Form::text('userEmail', null, ['class' => 'form-control', 'placeholder' => 'Votre Email']) !!}
					{!! $errors->first('userEmail', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
					{!! Form::text('localite', null, ['class' => 'form-control', 'placeholder' => 'Votre localité']) !!}
					{!! $errors->first('localite', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group {!! $errors->has('leMessage') ? 'has-error' : '' !!}">
					{!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
					{!! $errors->first('message', '<small class="help-block">:message</small>') !!}
				</div>


				{!! Form::submit('Envoyer', ['class' => 'btn btn-default','id'=>'modalBtn']) !!}

				{!! Form::close() !!}

			</div>

		</div>

	</div>
</div>
<script>
    $('#input-id').rating('refresh', { showClear: true, showCaption: true});
</script>