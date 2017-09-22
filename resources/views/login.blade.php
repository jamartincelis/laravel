<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
		
    <!-- Bootstrap core CSS -->		
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
		<style>
			.form-signin {
				max-width: 330px;
				padding: 15px;
				margin: 0 auto;
				padding-top: 120px;
			}

			.img-form-signin {
					margin: 0px 60px 0px 60px;
					padding: 5px 5px 10px 5px;
			}
			 body {
					background-color: #fff;
			}			
		</style>
  </head>

  <body>

    <div class="container">
      <form class="form-signin" action="/bitacora">
				<div class="img-form-signin">
					<img alt="Brand" src="{{ asset('img/logo_resize.jpg') }}">
				</div>
        <label for="inputUser" class="sr-only">Usuario</label>
        <input type="text" id="inputUser" class="form-control" placeholder="Usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Clave</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Clave" required=""><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
    </div> <!-- /container -->
</body></html>