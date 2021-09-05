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
					<a href="">Ayuda</a>
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
				<h2><b>Área de un Rectángulo</b></h2>
			  </section><br>
				<div class="contenedor">
				  <form action="AreaDeUnRectangulo.php" method="post" name="AreadR">

					<h5>Para calcular el Àrea de un rectángulo ingrese el valor de sus lados L1 y L2, para calcular el Àrea de un cuadrado ingrese solamente el valor de uno de sus lados:</h5>
				  	<br>

					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">L1</span>
						<input type="number" class="form-control" placeholder="L1" aria-label="L1" aria-describedby="basic-addon1" name="L1" value="0" inputmode="numeric" />

						<span style="margin-left: 15px;" class="input-group-text" id="basic-addon1">L2</span>
						<input type="number" class="form-control" placeholder="L2" aria-label="L2" aria-describedby="basic-addon1" name="L2" value="0" inputmode="numeric" />
						
						<button style="margin-left: 15px;" type="submit" class="btn btn-primary">Calcular</button>

					</div>

				  </form>
				  <br>
				  <?php 
						$L1 = $_POST['L1'];
						$L2 = $_POST['L2'];				  	

						if($L1 > 0 && $L2 > 0){

							$Area = $L1* $L2;
							echo " 
							
							<div class='alert alert-warning' role='alert'>
								El Área del rectángulo es: $Area
							</div>
							
							";
							echo "
							
							<div class='alert alert-warning' role='alert'>
								Donde el Lado 1 es = $L1 y el Lado 2 es = $L2
							</div>
							
							
							";
						}
						elseif($L1 > 0 && $L2 <=0){
							$Area = $L1* $L1;
							echo "
							
							<div class='alert alert-warning' role='alert'>
								El Área del Cuadrado es: $Area
							</div>";

							echo "
							
							<div class='alert alert-warning' role='alert'>
								Donde el Lado es: $L1
							</div>";
						}
						elseif($L2 > 0 && $L1 <=0){
							$Area = $L2* $L2;
							echo "
							
							<div class='alert alert-warning' role='alert'>
								El Área del Cuadrado es: $Area
							</div> ";

							echo "
							<div class='alert alert-warning' role='alert'>
								Donde el Lado es = $L2
							</div>";
						}
						else{
							echo "
							
							<div class='alert alert-danger' role='alert'>
							Ingrese un valor para el L1 y el L2 en el caso de un rectángulo o un valor para L1 o L2 en el caso de un cuadrado
							</div>";
						}
					?> 

					
					<br>
					<br>
						<h5><b>Formulas utilizadas: </b></h5>
						<p>Para un Rectángulo:</p>
						<img src="../img/adr.png" style="width: 200px;height: 50px;">
					<br>
						<hp>Para un Cuadrado: </p>
						<img src="../img/adc.png" style="width: 120px;height: 50px;">		
				</div>
			  </section><br><br><br>


			  <nav  aria-label="Page navigation example" style="display: flex;justify-content: center;">
						<ul class="pagination">
							<div class="tooltip">
								<li class="page-item"> <span class="tooltiptext">Página anterior</span>
									<a class="page-link" href="AreaDeUnCirculo.php" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
							</div>

							<div class="tooltip">
								<li style="width: 35px;text-align: center;" class="page-item"> <span class="tooltiptext">Área de un círculo</span> <a class="page-link" href="AreaDeUnCirculo.php" >1</a></li>
							</div>
							<div class="tooltip">
								<li  class="page-item"> <span class="tooltiptext">Área de un Rectángulo</span> <a class="page-link" href="#" style="background-color: #eef1f5;">2</a></li>
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
								<li  class="page-item"> <span class="tooltiptext">Volumen de una Piramide</span> <a class="page-link" href="VolumenDeUnaPiramide.php" >6</a></li>
							</div>
							
							

							<div class="tooltip">
								
								<li class="page-item"> <span class="tooltiptext">Página siguiente</span>
									<a class="page-link" href="AreaDeUnTriangulo.php" aria-label="Next">
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