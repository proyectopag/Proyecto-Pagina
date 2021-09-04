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
				<h2>Volumen de una Piramide</h2>
			  </section><br>
				<div class="contenedor">
				  <form action="VolumenDeUnaPiramide.php" method="post" name="AreadC">
				  	<p><b>Para calcular el Volumen de una piramide se necesita saber el area de su base y su altura:</b></p>
				  	<br>
				  	<p><b>Para una piramide con base Rectangular: </b></p>
				  	<br>
				  	<p>Ingrese el valor del lado mayor(l1) y del lado menor(l2) y la altura(h) de la piramide, si la base es un cuadrado solo ingrese el valor de uno de sus lados en (l1) o (l2):</p>
				  	<p>l1= <input type="text" name="l1" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>l2= <input type="text" name="l2" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>h= <input type="text" name="h" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
						$l1 = $_POST['l1'];
						$l2 = $_POST['l2'];
						$h = $_POST['h'];

						if($l1 > 0 && $l2 > 0 && $h > 0){
							$a= ($l1*$l2);
							$v=($a*$h)/3;
							echo "El Volumen de la piramide es: ".$v;
							echo "<br>"."Donde el l1 es = ".$l1.", l2 es = ".$l2.", la altura de la piramide es = ".$h." y el area de la base es = ".$a;
						}
						elseif($l1 > 0 && $l2 <=0 && $h > 0){
							$a=($l1*$l1);
							$v=($a*$h)/3;
							echo "El Volumen de la piramide es: ".$v;
							echo "<br>"."Donde el lado del cuadrado base es = ".$l1.", la altura de la piramide es = ".$h." y el area de la base es = ".$a;
						}
						elseif($l2 > 0 && $l1 <=0 && $h > 0){
							$a=($l2*$l2);
							$v=($a*$h)/3;
							echo "El Volumen de la piramide es: ".$v;
							echo "<br>"."Donde el lado del cuadrado base es = ".$l2.", la altura de la piramide es = ".$h." y el area de la base es = ".$a;
						}
					?>
				<br>
				<br>
				<form action="VolumenDeUnaPiramide.php" method="post" name="AreadC">
				  	<p><b>Para calcular el Volumen de un Cono :</b></p>
				  	<br>
				  	<p>un cono es una piramide con una circunferencia de base, por lo tanto se requiere el radio(r) de la circunferencia base y la altura(h) del cono</p>
				  	<br>
				  	<p>r= <input type="text" name="r" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>h= <input type="text" name="h" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
						$r = $_POST['r'];
						$h = $_POST['h'];

						if($r > 0 && $h > 0){
							$a= ($r*$r)*3.14159265359;
							$v=($a*$h)/3;
							echo "El Volumen del cono es: ".$v;
							echo "<br>"."Donde el radio de la circunferencia base es = ".$r.", la altura del cono es = ".$h." y el area de la base es = ".$a;
						}
					?> 
					<br>
					<br>
					<form action="VolumenDeUnaPiramide.php" method="post" name="AreadC">
				  	<p><b>Para calcular el Volumen de una Piramide triangular:</b></p>
				  	<br>
				  	<p>ingrese el valor de la base del triangulo(b) y la altura de dicho triangulo (ht) y la altura de la piramide (h): </p>
				  	<br>
				  	<p>b= <input type="text" name="b" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>ht= <input type="text" name="ht" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>h= <input type="text" name="h" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
					<p>Si no conoce el valor de la base y la altura usar la herramienta para calcular el <a href="AreaDeUnTriangulo.php">área de un tríangulo</a> y mediante el teorema de Euclides podras saber el valor de la base (c) y la altura (hc).</p>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
						$b = $_POST['b'];
						$ht = $_POST['ht'];
						$h = $_POST['h'];

						if($b > 0 && $h > 0 && $ht > 0){
							$a= ($b*$ht)/2;
							$v=($a*$h)/3;
							echo "El Volumen de la piramide triangular es: ".$v;
							echo "<br>"."Donde el valor de la base del triangulo es = ".$b.", la altura del triangulo base es = ".$ht.", la altura de la piramide es = ".$h." y el area de la base es = ".$a;
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