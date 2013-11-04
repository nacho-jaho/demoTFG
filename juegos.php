<!DOCTYPE html>
<html>
    <head>
        <LINK REL="Stylesheet" HREF="style.css" TYPE="text/css">
		<link href='icono.png' rel='icon' type='image/x-icon'/>
        <title>Mi pequeño Monito</title>
    </head>
    <body>
        <div id="cuerpo">
			<div id="logo">
				<img src="logo.png" width= 70%/> 
			</div>
			<!--
			<div id="separador">
				<img src="separador1.png" width= 75%/> 
			</div>
			-->
			<div id="boton">
				</br>
				<table>	
				<tr>
					<td><a href="index.php">Inicio </a>-
					<a href="juegos.php" class="use"> Juegos </a>-
					<a href="cumple.php"> Cumples </a>-
					<a href="taller.php"> Talleres </a>-
					<a href="extraescolares.php"> Extraescolares </a>-
					<a href="precio.php"> Precios </a>-
					<a href="galeria.php"> Fotos </a>-
					<a href="contacto.php"> Contacto </a>-
					<a href="http://www.ezebee.com/es/moda-para-monitos-y-mams" target="_blank"> Tienda </a>-
					<a href="cartel2.jpg" target="_blank"> Pequeteca </a></td>
				</tr>
				</br>
				</table>
				</br>
			</div>
			<!--
			<div id="separador">
				<img src="separador.png" width= 75%/> 
			</div>
			-->
			<div id="imagen">
			<!-- colocar las fotos y moverlas de manera circular -->
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
				<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
				<script type="text/javascript">$(document).ready(function(){$('.slideshow').cycle({fx:'fade'});});</script>
				<center>
					<div class="slideshow">
						<img style="border: solid 10px #E84831;" src="fotos/juegos.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/juegos1.jpg" width="800" height="200"/> 
						<img style="border: solid 10px #E84831;" src="fotos/juegos2.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/juegos3.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/juegos4.jpg" width="800" height="200"/>
					</div>
				</center>
			</div>
			<div id ="contenido">
				<table class ="info">	
				<tr>
					<td width=70% rowspan="2"><h1>Espacio de Juegos</h1></br>
							En Mi pequeño Monito tenemos un espacio de juego abierto donde podrás jugar a lo que más apetezca, 
							puedes entrar en el parque de bolas, subir, tirarte por el tobogán, bajar, salir, 
							jugar con los juguetes, disfrazarte, pintar..</br></br>

							Tenemos varias zonas en las que poder disfrutar de tu estancia:</br></br>

							<font color= #3BA9DC> PARQUE DE BOLAS:</font> con dos niveles, tobogán, piscina de bolas, rodillos, telas de araña, 
							serpientes…con una capacidad para 24 niños.</br>
							Ideal a partir de 18-24 meses</br></br>
							<font color= #3BA9DC>ZONA DE JUEGOS:</font> estanterías y espacios donde puedes encontrar juguetes, puzles, marionetas, 
							construcciones, lápices de colores, pintura de dedos, legos, encajables, libros en castellano 
							y en inglés, una cocinita, un banco de trabajo, juegos de ingenio, plastilina y juegos de grupo.</br></br>
							<font color= #3BA9DC>BAÚL DE DISFRAZES:</font> un baúl mágico donde uno se puede disfrazar y convertirse por un rato en un príncipe, 
							en una princesa, bruja, ángel, animalito.</br></br>
							<font color= #3BA9DC>PIZARRA MÁGICA:</font> deja volar tu imaginación y pinta en nuestra pizarra hecha en la pared.</br></br>

					</td>
				</tr>	
				<tr>
						<td><center><img src="castillo.png" width= 80%/><center> </td>
				</tr>
				</table>
			</div>
			<div id="separador">
				<img src="pie.png" width= 75%/> 
			</div>
			<div id="legal">
				<table class ="tablalegal">
				<tr>
					<td class ="izquierda">
						<a href="https://www.facebook.com/LudotecaMiPequenoMonito" target="_blank" rel="">
							<img src="facebook.png"  onmouseover="this.src='facebook2.png';" onmouseout="this.src='facebook.png';" width= 80%/>
						</a>
					</td> 
					<td class ="izquierda">
						<a href="https://twitter.com/MiPequenoMonito" target="_blank" rel="">
							<img src="twitter.png"  onmouseover="this.src='twitter2.png';" onmouseout="this.src='twitter.png';" width= 80%/>
						</a>
					</td>
					<td class ="izquierda">
						<a href="contacto.php" rel="">
							<img src="sobre.png"  onmouseover="this.src='sobre2.png';" onmouseout="this.src='sobre.png';" width= 80%/>
						</a>
					</td>
					<td class ="izquierdatext">hola@mipequeñomonito.es</td>
		
					<td class ="derechatext">Avd. Camtábrico 89 Posterior, Arroyomolinos (Madrid) | Tel. 91 601 29 89 / 661.111.977</td>
					<td class ="derechalogo"><img src="logo2.png" width= 90%/></td>
				</tr>
				</table>
				</br>
			</div>
	    </div>
    </body>
</html>