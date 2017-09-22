@extends('layouts.bitacora')

@section('content')
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Inicio</a></li>
			<li class="breadcrumb-item active">Bitacora Monitoreo</li>
		</ol>
		<form class="row form-inline">
			<div class="col-md-9">
				<div class="search">
					<div class="form-group">
						<label for="exampleInputName2">Clientes:</label>
						<select class="form-control">
							<option>Seleccione</option>
							<option>BBVA</option>
							<option>BDV</option>
							<option>BANESCO</option>
							<option>CARONI</option>
							<option>PROVINCIAL</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Servicio: </label>
						<select class="form-control">
							<option>Seleccione</option>
							<option>ATM</option>
							<option>ATM-POS</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Servidor: </label>
						<select class="form-control">
							<option>Seleccione</option>
							<option>SMPP03</option>
							<option>SMPP06</option>
						</select>
					</div>			
					<div class="form-group">
						<label for="exampleInputEmail2">Tipo de vista: </label>
						<select class="form-control">
							<option>Seleccione</option>
							<option>Detallada</option>
							<option>Gr&aacute;fica</option>
						</select>
					</div>					
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Buscar</button>
					</div>
				</div>	
			</div>
		</form>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-condensed">
				 <tr>
						<th>#</th>
						<th>Servidor</th>
						<th>Puerto</th> 
						<th>Cliente</th>
						<th>Servicio</th>
						<th>SMS (Ult. 10 min.)</th>
						<th>Horario</th> 
						<th>Tipo tr&aacute;fico</th>
						<th>Tr&aacute;fico actual</th>					
					</tr>			
					<tr>
						<td>1</td>
						<td>SMPP06</td>
						<td>8000</td>
						<td>BVC</td>
						<td>POS,ATM</td>
						<td>430</td>
						<td>Lun-Vie 8:30a.m a 5:00p.m.</td>
						<td>Alto</td>
						<td>Con Tr&aacute;fico</td>
					</tr>
					<tr class="danger">
						<td>2</td>
						<td>SMPP06</td>
						<td>10001</td>
						<td>100x100</td>
						<td>ATM, POS Dannaconect</td>
						<td>0</td>
						<td>N/A</td>
						<td>N/A</td>
						<td>Sin Tr&aacute;fico</td>
					</tr>
					<tr>
						<td>3</td>
						<td>SMPP06</td>
						<td>11000</td>
						<td>Bco. Mercantil</td>
						<td>Alertas</td>
						<td>408</td>
						<td>24 Horas</td>
						<td>Alto</td>
						<td>Con Tr&aacute;fico</td>
					</tr>
					<tr>
						<td>4</td>
						<td>SMPP06</td>
						<td>12001</td>
						<td>Bco. Exterior</td>
						<td>ATM</td>
						<td>281</td>
						<td>24 Horas</td>
						<td>Alto</td>
						<td>Con Tr&aacute;fico</td>
					</tr>			
					<tr class="danger">
						<td>5</td>
						<td>SMPP06</td>
						<td>12004</td>
						<td>Bco. Exterior</td>
						<td>Ambiente de calidad</td>
						<td>0</td>
						<td>N/A</td>
						<td>N/A</td>
						<td>Sin Tr&aacute;fico</td>
					</tr>			
			</table>
		</div>
@stop