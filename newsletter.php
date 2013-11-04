<!DOCTYPE html>
<html>
    <head>
        <LINK REL="Stylesheet" HREF="style.css" TYPE="text/css">
		<link href='icono.png' rel='icon' type='image/x-icon'/>
        <title>Mi pequeño Monito</title>
		<script src=”jquery.js”></script>
    </head>
    <body>
        <div id="cuerpo">
			<div id="logo">
				<img src="logo.png" width= 70%/> 
			</div>
			<div id="boton">
				</br>
				<table>	
				<tr>
					<td><a href="index.php">Inicio </a>-
					<a href="juegos.php"> Juegos </a>-
					<a href="cumple.php"> Cumples </a>-
					<a href="taller.php"> Talleres </a>-
					<a href="extraescolares.php"> Extraescolares </a>-
					<a href="precio.php"> Precios </a>-
					<a href="galeria.php"> Fotos </a>-
					<a href="contacto.php" class="use"> Contacto </a>-
					<a href="http://www.ezebee.com/es/moda-para-monitos-y-mams" target="_blank"> Tienda </a>-
					<a href="cartel2.jpg" target="_blank"> Pequeteca </a></td>
				</tr>
				</br>
				</table>
				</br>
			</div>
			<div id="imagen">
			<!-- colocar las fotos y moverlas de manera circular -->
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
				<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
				<script type="text/javascript">$(document).ready(function(){$('.slideshow').cycle({fx:'fade'});});</script>
				<center>
					<div class="slideshow">
						<img style="border: solid 10px #E84831;" src="fotos/foto1.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/foto2.jpg" width="800" height="200"/> 
						<img style="border: solid 10px #E84831;" src="fotos/foto3.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/foto4.jpg" width="800" height="200"/>
						<img style="border: solid 10px #E84831;" src="fotos/foto5.jpg" width="800" height="200"/>
					</div>
				</center>
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
				setTimeout(function() {
				$(".content").fadeOut(1500);
				},3000);
				});
			</script>
			<div id ="contenido">
				<table class = "info">	
				<tr>
					<td><h1>Contacto</h1>
						<font color= #3BA9DC> Ludoteca Mi pequeño Monito </font></br>
						<font color= #3BA9DC> Direccion:</font> Avd. Cantábrico Nº89 posterior </br>
						(Entrada por la Avd. de la Unión Europea </br>
						<font color= #3BA9DC> C.P.:</font> 28939 | Arroyomolinos </br>
						<font color= #3BA9DC> Telefono:</font> 91 601 29 89 / 661 111 977 </br>
						<font color= #3BA9DC> Email:</font> hola@mipequeñomonito.es </br>
						<font color= #3BA9DC> Facebook:</font> www.facebook.com/LudotecaMiPequenoMonito </br>
						<font color= #3BA9DC> Twitter:</font> @MiPequenoMonito </br></br>
					</td>					
					<td rowspan="2" width ="50%">
						<a href="https://www.facebook.com/LudotecaMiPequenoMonito" target="_blank" rel="">
							<img src="sigue1.png" onmouseover="this.src='sigue3.png';" onmouseout="this.src='sigue1.png';" width= 30%  VSPACE="10"/>
						</a>
						<a href="https://twitter.com/MiPequenoMonito" target="_blank" rel="">
							<img src="sigue2.png" onmouseover="this.src='sigue4.png';" onmouseout="this.src='sigue2.png';" width= 40% HSPACE="50" VSPACE="10"/>
						</a>	 
						</br>
						</br>
						<!--
						<div class="content">Su mensaje ha sido enviado correctamente</div></br></br>
						-->
						Nombre</br>
						<input type="text" name="nombre" class="texto"><font color= #E84831>*</font></br></br>	
						E-mail</br>
						<input type="text" name="mail" class="texto"><font color= #E84831>*</font></br></br>		
						Asunto</br>
						<input type="text" name="asunto" class="texto" value="Unirse a nuestro newsletter" disabled=”disabled”><font color= #E84831>*</font></br></br>		
						Mensaje</br>
						<textarea name="mensaje" disabled=”disabled” class="mensaje">Quiero unirme al newsletter de Mi Pequeño Monito</textarea>
							<font color= #E84831>*</font></br></br>		
						<input type="submit" class="enviar" value="Enviar" style="cursor:pointer"/> 
						
					</td>
				</tr>	
				<tr>
					<td>
						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
							src="https://maps.google.es/maps/ms?msa=0&amp;msid=217255554661386752720.0004e1900698129f7e890&amp;
							hl=es&amp;ie=UTF8&amp;t=m&amp;ll=40.293754,-3.914461&amp;spn=0,0&amp;output=embed">
						</iframe><br/>
						<small>
							Ver <a href="https://maps.google.es/maps/ms?msa=0&amp;msid=217255554661386752720.0004e1900698129f7e890&amp;
							hl=es&amp;ie=UTF8&amp;t=m&amp;ll=40.293754,-3.914461&amp;spn=0,0&amp;source=embed" style="color:#0000FF;
							text-align:left">Mi pequeño monito</a> en un mapa más grande
						</small>
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