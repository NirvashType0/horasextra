<form method="POST" action="{{ route('Feriados.update', $feriado->id) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="descripcion">Descripción</label>
		<input type="text" class="form-control" name="descripcion" value="{{ $feriado->descripcion }}">
        {!! $errors->first('descripcion','<span class=error>:message</span>')!!}
	</div>
	<div class="form-group">
		<label for="fecha">Fecha</label>
        <div class="input-group date form-control" id="datetimepicker4" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="fecha" value="{{ $feriado->fecha }}"/>
            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        {!! $errors->first('fecha','<span class=error>:message</span>')!!}
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </div>
</form>