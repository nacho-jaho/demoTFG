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
					<a href="extraescolares.php"> Extraescolares </a>-
					<a href="precio.php" class="use"> Precios </a>-
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
						<img style="border: solid 10px #E84831;" src="fotos/precio.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/precio1.jpg" width="800" height="200"/> 
						<img style="border: solid 10px #E84831;" src="fotos/precio2.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/precio3.jpg" width="800" height="200"/>
					</div>
				</center>
			</div>
			<div id ="contenido">
				<table class = "info">	
				<tr>
					<td><h1>Precios</h1>
							<h3>Tarifas:</h3>
							Primera media hora de juegos……………………………… 3 € </br>
							Fracción  de ½ hora  de juegos………………………………... 2 € </br></br>
							
							Bono 10 horas de juego ………………………………………....37 € </br>
							(se puede compartir entre hermanos) </br></br>
							
							Merienda niño (sandwich y zumo)…………………………2,50 € </br></br>
							
							Tarde  Mi pequeño Monito ………………………………………9 € </br>
							(de lunes a jueves no festivos , dos horas y media de juegos </br> 
							y bolsa de chuches) </br></br>
							
							Tarde Mi pequeño Monito con merienda ………………..10,50 € </br>
							(de lunes a jueves no festivos , dos horas y media de juegos, </br> 
							merienda sándwich  de jamón y queso, refresco o zumo y </br>
							bolsa de chuches) </br></br>
					</td>
					<td>
							<h3>Cumpleaños:</h3>
							Cumpleaños  con merienda fría  …………………………….10 €/niño </br>
							(dos  horas y media de cumpleaños, sándwich variados, </br> 
							snacks, refrescos, zumos, tarta, invitaciones, regalos para </br>
							el cumpleañero y bolsa de chuches para cada invitado) </br></br>
							
							Cumpleaños  con merienda caliente……………………...10,50 €/niño </br>
							(dos  horas y media de cumpleaños, a elegir entre sándwich </br> 
							mixto, perrito caliente, nuggets, snacks ,refrescos, zumos, </br> 
							tarta, invitaciones, regalos para el cumpleañero y bolsa de </br> 
							chuches para cada invitado) </br></br>
							
							MAGO: consultar precio </br>
							PIÑATA: consultar precio </br>
							ANIMACIONES A DOMICILIO: consultar precio </br>
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