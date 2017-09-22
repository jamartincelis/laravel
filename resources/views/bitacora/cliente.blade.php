@extends('layouts.bitacora')

@section('content')
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Administraci&oacute;n</a></li>
			<li class="breadcrumb-item active">Clientes</li>
		</ol>		
		<div class="row">
			<div class="col-md-3">
					<h1 class="h1-margin">Clientes</h1>
			</div>

			<div class="col-md-4 pull-right">
				<form class="form-inline" action="\create_user.html">
					<div class="form-group">
						<div class="pull-right">
							<label for="exampleInputEmail2">Status: </label>
							<select class="form-control">
								<option>Activo</option>
								<option>Inactivo</option>
							</select>
							<button type="submit" class="btn btn-primary">Crear cliente</button>
						</div>
					</div>		
				</form>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-condensed">
				 <tr>
						<th>#</td>
						<th>Cliente</th>
						<th>Descripci&oacute;n</th>
						<th>N&uacute;umero de Contacto</th>
						<th>Status</th>
						<th>Modificaciones</th>
					</tr>			
					<tr>
						<td>1</td>
						<td>BBVA</td>
						<td>Banco Provincial</td>
						<td>(0212) 123456</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>BDV</td>
						<td>Banco de Venezuela</td>
						<td>(0212) 123456</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>BANESCO</td>
						<td>Banesco C.A</td>
						<td>(0212) 123456</td>
						<td>Inactivo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>						
					<tr>
						<td>4</td>
						<td>CARONI</td>
						<td>Banco Caroni</td>
						<td>(0212) 123456</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>				
					<tr>
						<td>5</td>
						<td>INDUSTRIAL</td>
						<td>Banco Industrial de Venezuela</td>
						<td>(0212) 123456</td>
						<td>Activo</td>
						<td class="mod-link"><a href="#">Editar</a>&nbsp;<a href="#">Borrar</a></td>
					</tr>	
				</table>
		</div>
@stop