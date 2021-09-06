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

	<link rel="shortcut icon" href="../img/Herramientas.png">



	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
	<body>
		<header>
			<div class="contenedor">

			<a href="../Inicio.html"><h1 style="font-family:curva;color: white;">MATEWEB</h1></a>

			<input type="checkbox" id="menu1">

			<label for="menu1" > <img src="https://image.flaticon.com/icons/png/512/56/56763.png" alt="" style="width: 20px;padding-bottom: 10px;"></label>

				<nav class="menu">
					<a href="../Inicio.html">Inicio</a>
					<a href="../templates/Herramientas.html">Herramientas</a>
					<a href="../templates/Temas.html">Temas</a>
					<a href="../templates/Contacto.html">Contacto</a>
					<a href="../templates/Ayuda.html">Ayuda</a>

				</nav>
			</div>

		</header>
		<main>
			<section id="banner">
				<img src="../img/2.jpg">
				<div class="contenedor">
				  <font face="georgia"><h2 style="font-family:cur;">Matemáticas</h2></font>
				</div>
			  </section><br><br>
			  <section id="texto">
				<h2><b>Área de un Triángulo</b></h2>
			  </section><br>
				<div class="contenedor">
				  <form action="AreaDeUnTriangulo.php" method="post" name="Areadt1">
				  	<h5> Para calcular el Àrea de un triángulo Rectángulo ingrese: </h5>
				  	<p><b>Si se conoce la Base(B) y la altura (H): </b></p>
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">B</span>
						<input type="number" class="form-control" placeholder="L1" aria-label="L1" aria-describedby="basic-addon1" name="b" value="0" inputmode="numeric" />

						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">H</span>
						<input type="number" class="form-control" placeholder="L2" aria-label="L2" aria-describedby="basic-addon1" name="h" value="0" inputmode="numeric" />
						
						<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>
					</div>
				  </form>
				  <br>
				  <?php 
				  		$b = $_POST['b'];
						$h = $_POST['h'];

						if($b>0 && $h>0){
							$Area = ($b*$h)/2;
							echo "
							
							<div class='alert alert-warning' role='alert'>
								El Área del rectángulo es: $Area
							</div>";

							echo "
							
							<div class='alert alert-warning' role='alert'>
								Donde la base es: $b y la altura es : $h
							</div>";
						}
				  	?>
				  <br>
				  <form action="AreaDeUnTriangulo.php" method="post" name="Areadt2">
				  <p><b>Si se conoce 2 de sus lados (L1) (L2) y el angulo (a) entre ellos:</b></p>

				    <div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">L1</span>
						<input type="number" class="form-control" placeholder="L1" aria-label="L1" aria-describedby="basic-addon1" name="l1" value="0" inputmode="numeric" />

						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">L2</span>
						<input type="number" class="form-control" placeholder="L2" aria-label="L2" aria-describedby="basic-addon1" name="l2" value="0" inputmode="numeric" />
						
						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">A</span>
						<input type="number" class="form-control" placeholder="L2" aria-label="L2" aria-describedby="basic-addon1" name="a" value="0" inputmode="numeric" />
						
						<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>
					</div>
				  </form>
				  <br>
				  <?php 
				  		$l1 = $_POST['l1']; 
						$l2 = $_POST['l2'];
						$a = $_POST['a'];
						if($l1 > 0 && $l2 > 0 && $a > 0){
							$ar = ($a*3.14159265359)/180;
							$Area = ($l1*$l2*sin($ar))/2;
							echo "
							
							<div class='alert alert-warning' role='alert'>
								El Área del triángulo es: $Area
							</div>						
							";
							echo "
							
							<div class='alert alert-warning' role='alert'>
								Donde L1 es $l1, L2 es $l2 y el ángulo entre ellos es $a
							</div>
							";
						}
				  	?>
				  <br>
				  <form action="AreaDeUnTriangulo.php" method="post" name="Areadt3">
				  	<p><b>Segun el Teorema de Euclides : </b></p>
				  	<br><img src="../img/tde.jpg">
				  	<br>
				  	<h5>Ingrese al menos dos valores de los que se solicitan, las unicas dos parejas de valores que no arrojaran resultado es si ingresa (a) y (m) o (b) y (n)</h5>
				  	<br>

					  <div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">a</span>
						<input type="number" class="form-control" placeholder="a" aria-label="a" aria-describedby="basic-addon1" name="ca" value="0" inputmode="numeric" />

						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">b</span>
						<input type="number" class="form-control" placeholder="b" aria-label="b" aria-describedby="basic-addon1" name="cb" value="0" inputmode="numeric" />
						
						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">c</span>
						<input type="number" class="form-control" placeholder="c" aria-label="c" aria-describedby="basic-addon1" name="hp" value="0" inputmode="numeric" />
						
						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">m</span>
						<input type="number" class="form-control" placeholder="m" aria-label="m" aria-describedby="basic-addon1" name="m" value="0" inputmode="numeric" />
						
						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">n</span>
						<input type="number" class="form-control" placeholder="n" aria-label="n" aria-describedby="basic-addon1" name="n" value="0" inputmode="numeric" />
						
						
						<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>
					</div>

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
							echo "
							
							<div class='alert alert-warning' role='alert'>
								El Área del triángulo es: $Area
							</div>
							";
							echo "
							
							<div class='alert alert-warning' role='alert'>
								Donde a = $ca y b = $cb, por lo tanto c = $hp y hc = $h
							</div>
							";
						}
						elseif($ca > 0 && $hp > 0){
							$cb = sqrt(($hp*$hp)-($ca*$ca));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "
								<div class='alert alert-warning' role='alert'>
									El Área del triángulo es: $Area
								</div>";
							echo "

							<div class='alert alert-warning' role='alert'>
							Donde a = $ca y c = $hpb, por lo tanto b = $cb y hc = $h
							</div>
							";
						}
						elseif($cb > 0 && $hp > 0){
							$ca = sqrt(($hp*$hp)-($cb*$cb));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "
								<div class='alert alert-warning' role='alert'>
									El Área del triángulo es: $Area
								</div>";
							echo "
								<div class='alert alert-warning' role='alert'>
									Donde b = $cb y c = $hp por lo tanto a = $ca y hc = $h
								</div>
							";
						}
						elseif($ca > 0 && $n > 0){
							$hp=($ca*$ca)/$n;
							$cb = sqrt(($hp*$hp)-($ca*$ca));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "
								<div class='alert alert-warning' role='alert'>
									El Área del triángulo es: $Area
								</div>
									";
							echo "
							
							<div class='alert alert-warning' role='alert'>
								Donde a = $ca  y n =  $n  por lo tanto c = $hp, b = $cb y hc = $h
							</div>
							
							";
						}
						elseif($cb > 0 && $m > 0){
							$hp=($cb*$cb)/$m;
							$ca = sqrt(($hp*$hp)-($cb*$cb));
							$h = ($ca*$cb)/$hp;
							$Area = ($hp*$h)/2;
							echo "
								<div class='alert alert-warning' role='alert'>
									El Área del triángulo es: $Area
								</div>";
							echo "
							
								<div class='alert alert-warning' role='alert'>
									Donde b = $cb y m = $m por lo tanto c = $hp, a = $ca y hc = $h
								</div>
							";
						}
						elseif($m > 0 && $n > 0){
							$h=sqrt($m+$n);
							$hp=$m+$n;
							$Area=(($m+$n)*$h)/2;
							echo "
							
								<div class='alert alert-warning' role='alert'>
									El Área del triángulo es: $Area
								</div>
							";
							echo "
								
								<div class='alert alert-warning' role='alert'>
									Donde m = $m  y n = $n por lo tanto c= $hp y hc= $h
								</div>	
							
							 ";
							
						}
					?> 	
				</div>
						<br>
				<nav  aria-label="Page navigation example" style="display: flex;justify-content: center;">
						<ul class="pagination">
							<div class="tooltip">
								<li class="page-item"> <span class="tooltiptext">Página anterior</span>
									<a class="page-link" href="AreaDeUnRectangulo.php" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
							</div>

							<div class="tooltip">
								<li style="width: 35px;text-align: center;" class="page-item"> <span class="tooltiptext">Área de un círculo</span> <a class="page-link" href="AreaDeUnCirculo.php" >1</a></li>
							</div>
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Área de un Rectángulo</span> <a class="page-link" href="AreaDeUnRectangulo.php" >2</a></li>
							</div>
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Área de un Triángulo</span> <a class="page-link" href="#" style="background-color: #eef1f5;">3</a></li>
							</div>

							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Volumen de un Paralelepipedo</span> <a class="page-link" href="VolumenDeUnParalelepipedo.php" >4</a></li>
							</div>
							
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Volumen de un Cilindro</span> <a class="page-link" href="VolumenDeUnCilindro.php" >5</a></li>
							</div>
							
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Volumen de una Piramide</span> <a class="page-link" href="VolumenDeUnaPiramide.php" >6</a></li>
							</div>
							
							

							<div class="tooltip">
								
								<li class="page-item"> <span class="tooltiptext">Página siguiente</span>
									<a class="page-link" href="VolumenDeUnParalelepipedo.php" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</div>
							
						</ul>
				</nav>
			  </section><br>

			
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