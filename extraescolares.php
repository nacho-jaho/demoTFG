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
					<a href="juegos.php"> Juegos </a>-
					<a href="cumple.php"> Cumples </a>-
					<a href="taller.php"> Talleres </a>-
					<a href="extraescolares.php" class="use"> Extraescolares </a>-
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
						<img style="border: solid 10px #E84831;" src="fotos/extra.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/extra1.jpg" width="800" height="200"/> 
						<img style="border: solid 10px #E84831;" src="fotos/extra2.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/extra3.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/extra4.jpg" width="800" height="200"/>
					</div>
				</center>
			</div>
			<div id ="contenido">
				<table class ="info">	
				<tr>
					<td width=60%><h1>Actividades Extraescolares</h1></br>
							El próximo mes de Septiembre empiezan nuestras actividades extraescolares para después del cole.</br></br>
							<font color= #3BA9DC> MANUALIDADES a partir de 3 años </font></br>
							Lunes de 17:30 a 18:45 horas</br> 
							Precio 35 euros al mes con material incluído</br></br>
							<font color= #3BA9DC> DANZA ESPAÑOLA a partir de 4 años</font></br>
							Lunes de 17:30 a 18:30 horas </br>
							Precio 30 euros al mes</br></br>
							<font color= #3BA9DC> PSICOMOTRICIDAD, 2 a 4 años</font></br>
							Sábados de 11 a 11.45 horas</br> 
							Precio: 15 euros la sesión</br></br>
							<font color= #3BA9DC> YOGA PARA NIÑOS a partir de 4 años</font></br>
							Lunes de 18:30 a 19:30 horas</br> 
							Precio: 30 euros al mes</br></br>
							<font color= #3BA9DC> TEATRO PARA NIÑOS a partir de 4 años</font></br>
							Sábados de 10:00 a 11:30 horas</br> 
							Matrícula: 30 euros</br>
							Precio: 30 euros al mes</br>
					</td>
					<td>
						<center><img src="extra2.png" width= 90%/><center>
					</td>
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