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
				<h2>Área de un Rectángulo</h2>
			  </section><br>
				<div class="contenedor">
				  <form action="AreaDeUnRectangulo.php" method="post" name="AreadR">
				  	<p>Para calcular el Àrea de un rectángulo ingrese el valor de sus lados L1 y L2, para calcular el Àrea de un cuadrado ingrese solamente el valor de uno de sus lados:</p>
				  	<br>
				  	<p>L1= <input type="text" name="L1" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	
				  	<p>L2= <input type="text" name="L2" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
						$L1 = $_POST['L1'];
						$L2 = $_POST['L2'];				  	

						if($L1 > 0 && $L2 > 0){
							$Area = $L1* $L2;
							echo "El Área del rectángulo es: ".$Area;
							echo "<br>"."Donde el Lado 1 es = ".$L1." y el Lado 2 es =".$L2;
						}
						elseif($L1 > 0 && $L2 <=0){
							$Area = $L1* $L1;
							echo "El Área del Cuadrado es: ".$Area;
							echo "<br>"."Donde el Lado es = ".$L1;
						}
						elseif($L2 > 0 && $L1 <=0){
							$Area = $L2* $L2;
							echo "El Área del Cuadrado es: ".$Area;
							echo "<br>"."Donde el Lado es = ".$L2;
						}
						else{
							echo "Ingrese un valor para el L1 y el L2 en el caso de un rectángulo o un valor para L1 o L2 en el caso de un cuadrado";
						}
					?> 
					<br><br><p><b>Formulas utilizadas: </b></p>
					<p>Para un Rectángulo: </p>
					<img src="../img/adr.png" style="width: 200px;height: 50px;">
					<br><p>Para un Cuadrado: </p>
					<img src="../img/adc.png" style="width: 120px;height: 50px;">		
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