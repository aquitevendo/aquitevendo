@extends('templates.layout')
	@section('contenido')
		<div class="content center-align">
            <br>
            <h5>Agregar Activo</h5>    

            <div class="container">
	           	<div class="row">
				    <form class="col s12" action="/activo/agregar" method="post">				    	
				    	<div class="row">
				    		<div class="input-field col s12">
							    <select name="tipo_activo" class="browser-default">
							      	<option value="" disabled selected>Elija el tipo de Activo</option>
							      	<option value="1" >Producto</option>
							      	<option value="2" >Servicio</option>
							    </select>
						  	</div>
						</div>

				      	<div class="row">
					        <div class="input-field col s12">
					          	<input id="nombre" type="text" class="validate" name="nombre">
					          	<label for="nombre">Nombre del Activo</label>
					        </div>
				      	</div>

				      	<div class="row">
				        	<div class="input-field col s12">
				          		<textarea id="descripcion" name="descripcion" class="materialize-textarea"></textarea>
				          		<label for="textarea1">Descripción del Activo</label>
				        	</div>
				     	</div>

				      	<div class="row">
					        <div class="input-field col s12">
					          	<input id="precio" type="text" class="validate" name="precio">
					          	<label for="precio">Precio</label>
					        </div>
				      	</div>	

				      	<button class="waves-effect waves-light btn">Guardar</button>
				      	<a href="/inicio" class="waves-effect waves-light btn">Cancelar</a>
				      	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">			      	
				    </form>
				</div>
	        </div>         
	                    
        </div>       

	@stop