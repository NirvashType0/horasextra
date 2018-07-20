<form method="POST" action="{{ route('Feriados.store') }}" id="modal_form">
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
            <input type="text" class="form-control" name="descripcion">
            {!! $errors->first('descripcion','<span class=error>:message</span>')!!}
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <div class="input-group date form-control" id="datetimepicker4" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="fecha"/>
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            {!! $errors->first('fecha','<span class=error>:message</span>')!!}
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Guardar">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
</form>