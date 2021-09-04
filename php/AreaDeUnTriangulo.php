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
				<h2>Área de un Triángulo</h2>
			  </section><br>
				<div class="contenedor">
				  <form action="AreaDeUnTriangulo.php" method="post" name="Areadt1">
				  	<p><b>Para calcular el Àrea de un triángulo Rectángulo ingrese:</b></p>
				  	<br>
				  	<p><b>Si se conoce la Base(B) y la altura (H): </b></p>
				  	<br>
				  	<p>B= <input type="text" name="b" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>			  	
				  	<p>H= <input type="text" name="h" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
				  		$b = $_POST['b'];
						$h = $_POST['h'];

						if($b>0 && $h>0){
							$Area = ($b*$h)/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde la base es = ".$b." y la altura es = ".$h."<br>";
						}
				  	?>
				  <br>
				  <form action="AreaDeUnTriangulo.php" method="post" name="Areadt2">
				  	<br>
				  	<p><b>Si se conoce 2 de sus lados (l1) (l2) y el angulo (a) entre ellos:</b></p>
				  	<p>l1= <input type="text" name="l1" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>			  	
				  	<p>l2= <input type="text" name="l2" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>a= <input type="text" name="a" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>
				  	<input type="submit" value="Calcular"/>
				  </form>
				  <br>
				  <?php 
				  		$l1 = $_POST['l1']; 
						$l2 = $_POST['l2'];
						$a = $_POST['a'];
						if($l1 > 0 && $l2 > 0 && $a > 0){
							$ar = ($a*3.14159265359)/180;
							$Area = ($l1*$l2*sin($ar))/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde l1 = ".$l1.", l2 = ".$l2." y el angulo entre ellos es = ".$a;
						}
				  	?>
				  <br>
				  <form action="AreaDeUnTriangulo.php" method="post" name="Areadt3">
				  	<br>
				  	<p><b>Segun el Teorema de Euclides : </b></p>
				  	<br><img src="../img/tde.jpg">
				  	<br>
				  	<p>Ingrese al menos dos valores de los que se solicitan, las unicas dos parejas de valores que no arrojaran resultado es si ingresa (a) y (m) o (b) y (n)</p>
				  	<br>
				  	<p>a= <input type="text" name="ca" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>			  	
				  	<p>b= <input type="text" name="cb" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<p>c= <input type="text" name="hp" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>			  	
				  	<p>m= <input type="text" name="m" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>			  	
				  	<p>n= <input type="text" name="n" value="0" style="width: 50px;height: 20px;" inputmode="numeric" /> </p>
				  	<br>				  	
				  	<input type="submit" value="Calcular"/>
				  	<br>
				  </form>
				  <br>
				  <?php 			
						$ca = $_POST['ca'];
						$cb = $_POST['cb'];
						$hp = $_POST['hp'];
						$m = $_POST['m'];
						$n = $_POST['n'];

						if($ca > 0 && $cb > 0){
							$hp = sqrt(($ca*$ca)+($cb*$cb));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde a =".$ca." y b = ".$cb." por lo tanto c = ".$hp." y hc = ".$h;
						}
						elseif($ca > 0 && $hp > 0){
							$cb = sqrt(($hp*$hp)-($ca*$ca));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde a =".$ca." y c = ".$hp." por lo tanto b = ".$cb." y hc = ".$h;
						}
						elseif($cb > 0 && $hp > 0){
							$ca = sqrt(($hp*$hp)-($cb*$cb));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde b =".$cb." y c = ".$hp." por lo tanto a = ".$ca." y hc = ".$h;
						}
						elseif($ca > 0 && $n > 0){
							$hp=($ca*$ca)/$n;
							$cb = sqrt(($hp*$hp)-($ca*$ca));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde a =".$ca." y n = ".$n." por lo tanto c = ".$hp.", b = ".$cb." y hc = ".$h;
						}
						elseif($cb > 0 && $m > 0){
							$hp=($cb*$cb)/$m;
							$ca = sqrt(($hp*$hp)-($cb*$cb));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "El Área del triángulo es: ".$Area;
							echo "<br>"."Donde b =".$cb." y m = ".$m." por lo tanto c = ".$hp.", a = ".$ca." y hc = ".$h;
						}
						elseif($m > 0 && $n > 0){
							$h=sqrt($m+$n);
							$hp=$m+$n;
							$Area=(($m+$n)*$h)/2;
							echo "<br>"."El Área del triángulo es: ".$Area;
							echo "<br>"."Donde m =".$m." y n = ".$n." por lo tanto c= ".$hp." y hc= ".$h;
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