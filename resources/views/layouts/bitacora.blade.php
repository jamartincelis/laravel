<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bitacora</title>	
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/Chart.min.js') }}"></script>		
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-menu"></i> Menu
			</button>
			<a class="navbar-brand" href="#"><i>Totaltexto</i></a>
		</div>
		 
		<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
			<ul class="nav navbar-nav">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Bootstrap Related Resources">Inicio <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="/monitor/index"><i class="icon-list"></i>Bitacora Monitoreo</a>
						</li>
					</ul>
				</li>		
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Bootstrap Related Resources">Administracion <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="/admin/cliente"><i class="icon-list"></i>Clientes</a>
						</li>
						<li>
							<a href="/admin/servidor"><i class="icon-list"></i>Servidores</a>
						</li>				
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Bootstrap Related Resources">Estadisticas <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="/estadistica/totalsms"><i class="icon-list"></i>Total SMS</a>
						</li>
					</ul>
				</li>			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Bootstrap Related Resources">Seguridad <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="/seguridad/usuario"><i class="icon-list"></i>Usuarios</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="nav navbar-nav navbar-right logout">
				<p class= "user"><b>Christian Borges (Administrador)</b></p>&nbsp;<a href="/" title="Contacta el equipo TotalTexto">(Salir)</a>
			</div>
		</div>
	 
	</div>
	 
	</nav>
	<div class="container-fluid container-custom">
		@yield('content')
		<footer class="footer">
			<p class="text-center"><small>&copy; Copyright 2016 <a href="#">Christian Borges</a>. Caracas - Venezuela. Telf.: (0414) 312.8781.Todos los derechos reservados<br/>
			 La informaci&oacute;n contenida en este portal es de USO INTERNO, exclusiva para el departamento de Operaciones y terceros autorizados por su propietario, no podr&aacute; ser revelada,<br/>
			 duplicada, usada o publicada total o parcialmente sin autorizaci&oacute;n previa y expresa de Christian Borges.</small></p>
		</footer>	
	</div>
</body>
</html>
