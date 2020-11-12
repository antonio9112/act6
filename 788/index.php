<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	
	<section class="contenido">
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				
				<p>
				¿Qué es lo que hace la instrucion echo()? 
				 Muestra informacion de salida 
				</p>
				<h4>Conclusiones </h4>
				<p>
				en conclusion “echo” es una de las formas que tiene PHP de devolver al navegador los datos que procesa. Pero no solo devuelve los datos procesados, también puede devolver código HTML Centrándonos en los puntos importantes, diremos que echo imprimirá valores numéricos y variables sin necesidad de ninguna comilla, pero si hay más de un valor numérico o algo más aparte de la variable, tendremos una cadena, por lo que necesitaremos comillas.

				</p>
				<figure>
					<img src="imagenes/echo.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>¿Qué hace la sentencia IF…ELSE?
				 voy a investigar??
				 La estructura de control if ... else ... permite que un programa ejecute unas instrucciones cuando se cumple una condición y otras instrucciones cuando no se cumple esa condición
				</p>
				<h4>Conclusiones </h4>
				<p>
				La sentencia if Se usa una sentencia if para especificar qué bloque de código se ejecuta. Un bloque el código puede contener cero o más sentencias. Qué bloque de código se ejecuta depende de resultado de la evaluación de una condición de prueba, denominada expresión booleana
				</p>
				<figure>
					<img src="imagenes/ifelse.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				¿Como funciona el while? 
				Un bucle while permite repetir la ejecución de un grupo de instrucciones mientras se cumpla una condición (es decir, mientras la condición tenga el valor True)
				 Explica el ciclo while?
				 El bucle while o bucle mientras es un ciclo repetitivo basado en los resultados de una expresión lógica; se encuentra en la mayoría de los lenguajes de programación estructurados. El propósito es repetir un bloque de código mientras una condición se mantenga verdadera
				</p>
				<h4>Conclusiones </h4>
				<p>
				Las estructuras de repetición son utilizadas para repetir un proceso (llamado ciclo) las veces que sea necesario en un determinado programa. El ciclo while es una estructura simple y practica ya que su sintaxis es eficaz para multiples situaciones en las que cualquier otra no es util
				</p>
				<figure>
					<img src="imagenes/papa.jpg" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>