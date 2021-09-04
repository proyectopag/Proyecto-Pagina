<!DOCTYPE html>
<html lang="es">
<head>
	<title>Herramientas</title>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	
	<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/banner.css">
	<link rel="stylesheet" href="../css/texto2.css">
	<link rel="stylesheet" href="../css/info.css">

	<link rel="shortcut icon" href="../img/calculating.png">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
	<body>
		<header>
			<div class="contenedor">

				<h1 style="font-family:cursive;">Matemáticas</h1>
				<input type="checkbox" id="menu1">
				<label for="menu1" class="icon-home"></label>
				<nav class="menu">
					<a href="../Inicio.html">Inicio</a>
					<a href="../templates/Herramientas.html">Herramientas</a>
					<a href="../templates/Temas.html">Temas</a>
					<a href="../templates/Contacto.html">Contacto</a>
					<a href="">Ayuda</a>
				</nav>
			</div>

		</header>
		<main>
			<section id="banner">
				<img src="../img/2.jpg">
				<div class="contenedor">
				  <font face="georgia"><h2>MATEWEB</h2></font>
				  <p>Herramientas</p>
				  
				</div>
			  </section><br><br>
			  <section id="texto">
				<h2>Volumen de un Paralelepipedo</h2>
			  </section><br>
				<div class="contenedor">
				  <form action="VolumenDeUnParalelepipedo.php" method="post" name="AreadC">
				  	<p>Para calcular el Volumen de un paralelepipedo necesitamos conocer sus 3 dimensiones, el ancho (w), el largo (l) y el alto (h)</p>
				  	<br>
				  	<p>w= <input type="text" name="w" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>		  	
				  	<p>l= <input type="text" name="l" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>h= <input type="text" name="h" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
						$w = $_POST['w'];
						$l = $_POST['l'];
						$h = $_POST['h'];				  	

						if($w > 0 && $l > 0 && $h > 0){
							$v=$w*$l*$h;
							echo "El Volumen del paralelepipedo es: ".$v;
							echo "<br>"."Donde el ancho es= ".$w." el largo es = ".$l." y el alto es = ".$h;
						}
					?> 	
				</div>
			  </section><br><br><br>

			
			<section id="info">
				<h3>Siguenos en Nuestras redes Sociales</h3>

				<div class="contenedor">
					<div >
						<img style="width: 5%;" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="">
						<img style="width: 8%;" src="https://cdn.pixabay.com/photo/2020/11/15/06/18/instagram-logo-5744708_960_720.png" alt="">

					</div>
					<div class="contenedor">
						<p class="copy">Proyecto Pagina Web - Universidad De Los Llanos<br>Grupo XD<br> &copy;2021</p>
						
					</div>
					
				</div>
			</section>

		</main>

	</body>
</html>