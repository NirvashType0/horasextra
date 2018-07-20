@extends('layouts.layout')
@section('content')

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--2-col" >
	</div>
    <div class="mdl-cell mdl-cell--4-col" >
    	<div class="demo-card-square mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title mdl-card--expand">
		    <h2 class="mdl-card__title-text">Feriados</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      <a href="{{ route('Feriados.index')}}">ADMINISTRAR</a>
		    </a>
		  </div>
		</div>
    </div>
    <div class="mdl-cell mdl-cell--4-col" >
    	<div class="demo-card-square mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title mdl-card--expand">
		    <h2 class="mdl-card__title-text">Turnos</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      ADMINISTRAR
		    </a>
		  </div>
		</div>
    </div>
    <div class="mdl-cell mdl-cell--2-col" >
	</div>
</div>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--2-col" >
	</div>
    <div class="mdl-cell mdl-cell--4-col" >
    	<div class="demo-card-square mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title mdl-card--expand">
		    <h2 class="mdl-card__title-text">Empleados</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      ADMINISTRAR
		    </a>
		  </div>
		</div>
    </div>
</div>

@stop