@extends('layouts.layout')
@section('hrds')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
@stop
<meta name="_token" content="{{ csrf_token() }}"/>
@section('content')
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col" >
			<H3>ADMINISTRACION</H3>
			<h3>DIAS FERIADOS</h3>
		</div>
		<div class="mdl-cell mdl-cell--2-col" >
			<a class="show_modal_form" href="{{ route('Feriados.create') }}">
				<button class="mdl-button mdl-js-button mdl-button--fab">
				  <i class="material-icons">add</i>
				</button>
			</a>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
		        <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
		          	<i class="material-icons">search</i>
		        </label>
		        <div class="mdl-textfield__expandable-holder">
		          	<input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
		        </div>
		    </div>
		</div>
	</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col" >
		</div>
	    <div class="mdl-cell mdl-cell--6-col" >
	      <table class="table table-striped table-dark">
	        <thead>
	          <tr>
	            <th scope="col">DESCRIPCION</th>
	            <th scope="col">FECHA</th>
	            <th scope="col" colspan="3">ACCIONES</th>
	          </tr>
	        </thead>
	        <tbody>
	          @foreach ($feriados as $feriado)
	            <tr>
	              	<td>{{ $feriado->descripcion }}</td>
	              	<td>{{ $feriado->fecha }}</td>
	              	<td>
						<a href="{{ route('Feriados.show', $feriado->id)}}" class="amodal">
							<button type="submit" class="mdl-button mdl-js-button mdl-button--icon">
							  <i class="material-icons">pageview</i>
							</button>
						</a>
					</td>
					<td>
						<a href="{{ route('Feriados.edit', $feriado->id)}}" class="amodal" data-toggle="modal" data-target="#mainm">
							<button type="submit" class="mdl-button mdl-js-button mdl-button--icon">
							  <i class="material-icons">edit</i>
							</button>
						</a>
					</td>
					<td>
						<form method="POST" action="{{ route('Feriados.destroy',$feriado->id )}}">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}
							<button type="submit" class="mdl-button mdl-js-button mdl-button--icon">
							  <i class="material-icons">delete_forever</i>
							</button>
						</form>
					</td>
	            </tr>
	          @endforeach
	        </tbody>
	      </table>
	    </div>
	    <div class="mdl-cell mdl-cell--3-col" >
		</div>
	</div>
	<script>
		leantony.modal({});
	</script>
@stop
@include('modal::container')