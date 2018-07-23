<form method="POST" action="{{ route('Feriados.update', $feriado->id) }}" id="modal_form">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
    <div class="modal-header">
        <h5 class="modal-title">{{ ucwords($action . ' '. class_basename($model)) }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="hidden" id="modal-notification"></div>
    	<div class="form-group">
    		<label for="descripcion">Descripción</label>
    		<input type="text" class="form-control" name="descripcion" value="{{ $feriado->descripcion }}">
            {!! $errors->first('descripcion','<span class=error>:message</span>')!!}
    	</div>
    	<div class="form-group">
            <label for="dia">Dia</label>
            <input type="text" class="form-control" name="dia" value="{{ $feriado->dia }}">
            {!! $errors->first('dia','<span class=error>:message</span>')!!}
        </div>
        <div class="form-group">
            <label for="mes">Mes</label>
            <input type="text" class="form-control" name="mes" value="{{ $feriado->mes }}">
            {!! $errors->first('mes','<span class=error>:message</span>')!!}
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Actualizar">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
</form>