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
				<h2> <b>Volumen de una Piramide</b> </h2>
			  </section><br>
				<div class="contenedor">
				  <form action="VolumenDeUnaPiramide.php" method="post" name="AreadC">
				  	<h5> Para calcular el Volumen de una piramide se necesita saber el area de su base y su altura:</h5>
					<p>Ingrese el valor del lado mayor(l1) y del lado menor(l2) y la altura(h) de la piramide, si la base es un cuadrado solo ingrese el valor de uno de sus lados en (l1) o (l2):</p>

				  	<br>

					  <div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">L1</span>
						<input type="text" class="form-control" placeholder="L1" aria-label="L1" aria-describedby="basic-addon1" name="l1" value="0" inputmode="numeric" />

						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">L2</span>
						<input type="text" class="form-control" placeholder="L2" aria-label="L2" aria-describedby="basic-addon1" name="l2" value="0" inputmode="numeric" />
						
						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">H</span>
						<input type="text" class="form-control" placeholder="H" aria-label="H" aria-describedby="basic-addon1" name="h" value="0" inputmode="numeric" />

						<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>
					</div>
				  </form>
				  <br>
				  <?php 
						$l1 = $_POST['l1'];
						$l2 = $_POST['l2'];
						$h = $_POST['h'];

						if($l1 > 0 && $l2 > 0 && $h > 0){
							$a= ($l1*$l2);
							$v=($a*$h)/3;
							echo "
							
								<div class='alert alert-warning' role='alert'>
									El Volumen de la piramide es: $v
								</div>
							";
							echo "

								<div class='alert alert-warning' role='alert'>
									Donde el l1 es = $l1, l2 es = $l2, la altura de la piramide es = $h y el area de la base es = $a
								</div>							

							";
						}
						elseif($l1 > 0 && $l2 <=0 && $h > 0){
							$a=($l1*$l1);
							$v=($a*$h)/3;
							echo "
							
								<div class='alert alert-warning' role='alert'>
									El Volumen de la piramide es: $v
								</div>
							";
							echo "
							
								<div class='alert alert-warning' role='alert'>
									Donde el lado del cuadrado base es = $l1, la altura de la piramide es = $h y el area de la base es = $a
								</div>
							
							";
						}
						elseif($l2 > 0 && $l1 <=0 && $h > 0){
							$a=($l2*$l2);
							$v=($a*$h)/3;
							echo "
							
								<div class='alert alert-warning' role='alert'>
									El Volumen de la piramide es: $v
								</div>
							";
							echo "
							
								<div class='alert alert-warning' role='alert'>
								Donde el lado del cuadrado base es = $l2, la altura de la piramide es = $h y el area de la base es = $a
								</div>
							";
						}
					?>
				<br>
				<br>
				<form action="VolumenDeUnaPiramide.php" method="post" name="AreadC">
				  	<p><b>Para calcular el Volumen de un Cono :</b></p>
				  	
				  	<p>un cono es una piramide con una circunferencia de base, por lo tanto se requiere el radio(r) de la circunferencia base y la altura(h) del cono</p>
				  	<br>
					  <div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">R</span>
						<input type="text" class="form-control" placeholder="R" aria-label="R" aria-describedby="basic-addon1" name="r" value="0" inputmode="numeric" />

						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">H</span>
						<input type="text" class="form-control" placeholder="H" aria-label="H" aria-describedby="basic-addon1" name="h" value="0" inputmode="numeric" />

						<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>
					</div>
				  </form>
				  <br>
				  <?php 
						$r = $_POST['r'];
						$h = $_POST['h'];

						if($r > 0 && $h > 0){
							$a= ($r*$r)*3.14159265359;
							$v=($a*$h)/3;
							echo "
							
								<div class='alert alert-warning' role='alert'>
									El Volumen del cono es: $v
								</div>

							";
							echo "
							

								<div class='alert alert-warning' role='alert'>
									Donde el radio de la circunferencia base es = $r, la altura del cono es = $h y el area de la base es = $a
								</div>

							";
						}
					?> 
					<br>
					<br>
					<form action="VolumenDeUnaPiramide.php" method="post" name="AreadC">
						<p><b>Para calcular el Volumen de una Piramide triangular:</b></p>
						
						<p>ingrese el valor de la base del triangulo(b) y la altura de dicho triangulo (ht) y la altura de la piramide (h): </p>

						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">B</span>
							<input type="text" class="form-control" placeholder="B" aria-label="B" aria-describedby="basic-addon1" name="b" value="0" inputmode="numeric" />

							<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">HT</span>
							<input type="text" class="form-control" placeholder="HT" aria-label="HT" aria-describedby="basic-addon1" name="ht" value="0" inputmode="numeric" />
							
							<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">H</span>
							<input type="text" class="form-control" placeholder="H" aria-label="H" aria-describedby="basic-addon1" name="h" value="0" inputmode="numeric" />

							<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>
						</div>
						<p>Si no conoce el valor de la base y la altura usar la herramienta para calcular el <a href="AreaDeUnTriangulo.php">área de un tríangulo</a> y mediante el teorema de Euclides podras saber el valor de la base (c) y la altura (hc).</p>
					</form>
				  <br>
				  <?php 
						$b = $_POST['b'];
						$ht = $_POST['ht'];
						$h = $_POST['h'];

						if($b > 0 && $h > 0 && $ht > 0){
							$a= ($b*$ht)/2;
							$v=($a*$h)/3;
							echo "
							
							
								<div class='alert alert-warning' role='alert'>
									El Volumen de la piramide triangular es: $v
								</div>
							";
							echo "
								<div class='alert alert-warning' role='alert'>
								Donde el valor de la base del triangulo es = $b, la altura del triangulo base es = $ht, la altura de la piramide es = $h y el area de la base es = $a
								</div>
							";
						}
					?> 		
				</div>
			  </section><br>

			  <nav  aria-label="Page navigation example" style="display: flex;justify-content: center;">
						<ul class="pagination">
							<div class="tooltip">
								<li class="page-item"> <span class="tooltiptext">Página anterior</span>
									<a class="page-link" href="VolumenDeUnCilindro.php" aria-label="Previous">
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
								<li  class="page-item"> <span class="tooltiptext">Área de un Triángulo</span> <a class="page-link" href="AreaDeUnTriangulo.php" >3</a></li>
							</div>

							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Volumen de un Paralelepipedo</span> <a class="page-link" href="VolumenDeUnParalelepipedo.php" >4</a></li>
							</div>
							
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Volumen de un Cilindro</span> <a class="page-link" href="VolumenDeUnCilindro.php" >5</a></li>
							</div>
							
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Volumen de una Piramide</span> <a class="page-link" href="#" style="background-color: #eef1f5;">6</a></li>
							</div>
							
							

							<div class="tooltip">
								
								<li class="page-item"> <span class="tooltiptext">Página siguiente</span>
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</div>
							
						</ul>
				</nav>


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