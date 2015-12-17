<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=960px, maximum-scale=1.0, user-scalable=yes"/>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="StyleSheet" href="../estilos.css" type="text/css">
    <script type="text/javascript" src="../dist/js/jquery.js"></script>
    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="contenedor">
		<div class="row">
			<div class="menu">
  				<div class="menuizq col-xs-12 col-lg-12 imagenmenu" >
  					<a class="menuizq" href="../index.html"><img src="../img/LogoHeader.png"></a>
  					<span class="separador" > </span>
  					<div class="materia">
  						Ciencias tercer grado: Química
  					</div>
  						<div  style="float:right">
	  					<a class="menuder" href="#"><img src="../img/icono4.png"></a>
	  					<a class="menuder" href="#"><img src="../img/icono3.png"></a>
	  					<a class="menuder" href="#"><img src="../img/icono2.png"></a>
	  					<span class="separador" > </span>
	  					<a class="menuder" href="http://apprende.mx/"><img src="../img/icono1.png"></a>
	  				</div>
				</div>
  			</div>
		</div>
		<div class="row">			
			<div class="ruta col-xs-12">Ciencias tercer grado: Química	/ Bloque IV	/ Proyectos: ahora tú explora, experimenta y actúa (preguntas opcionales) Integración y aplicación Contenido: ¿Cuál es el impacto de los combustibles y posibles alternativas de solución?	/ Sesión 2</div>				
	
		</div>
		<div class="row datauser">
			<div id="usuario">
            Alumno :        </div>
		</div>		
		<div class="row">
			<div class="logo col-xs-12">				
				<div class="text-center header-image">
					<a><img src="../img/iconQM.png"></a>
				</div>				
			
			</div>
		</div>
		<br>
		<div class="row">
		<?php 

		$i =0;
			if($_POST['q13910:1_answer']=='2')
				$i++;
			if($_POST['q13910:2_answer']=='2')
				$i++;
			if($_POST['q13910:3_answer']=='1')
				$i++;
			if($_POST['q13910:4_answer']=='1')
				$i++;
			if($_POST['q13910:5_answer']=='0')
				$i++;
			if($_POST['q13910:6_answer']=='0')
				$i++;
			if($_POST['q13910:7_answer']=='2')
				$i++;
			if($_POST['q13910:8_answer']=='1')
				$i++;
			if($_POST['q13910:9_answer']=='2')
				$i++;
			if($_POST['q13910:10_answer']=='2')
				$i++;
			
		 ?>
			<table class="generaltable generalbox quizreviewsummary">
				<tbody>
				<tr>
					<th class="cell" scope="row">Comenzado el</th>
					<td class="cell"><?php echo $_POST['inicio']?></td>
				</tr>
				<tr>
					<th class="cell" scope="row">Estado</th>
					<td class="cell">Finalizado</td>
				</tr>
				<tr>
					<th class="cell" scope="row">Finalizado en</th>
					<td class="cell"><?php 
						   $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
   'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
 
   $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
       'Miercoles', 'Jueves', 'Viernes', 'Sabado');
     
   		$fin =  $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y')." ".date('h:i:s');

    echo $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y')." ".date('h:i:s');



					 ?></td>
				</tr>
<!-- 				<tr>
					<th class="cell" scope="row">Tiempo empleado</th>
					<td class="cell">
				
					</td>
				</tr> -->
			
				<tr>
					<th class="cell" scope="row">Calificación</th>
					<td class="cell"><b><?php echo $i ?>,00</b> de un máximo de 10,00 (<b><?php echo $i*10 ?></b>%)</td>
				</tr>
				</tbody>
		</table>
		</div>
		<br>
	<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>1</span></h5>
					<?php 
					if( $_POST['q13910:1_answer'] == '2')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:1_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">
				<div class="formulario">
					<div class="qtext" id="yui_3_9_1_2_1423092106512_374"><p id="yui_3_9_1_2_1423092106512_373">País que cuenta con una gran reserva petrolífera, que está en la mira de los países desarrollados.</p></div>
<div class="ablock" id="yui_3_9_1_2_1423092106512_351"><div class="prompt">Seleccione una:</div><div class="answer" id="yui_3_9_1_2_1423092106512_359">
<div  <?php if($_POST['q13910:1_answer']=='0'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092106512_358"><input type="radio" name="q13910:1_answer" value="0" id="q13910:1_answer0" disabled="true" <?php if($_POST['q13910:1_answer']=='0'){echo "checked";} ?>><label for="q13910:1_answer0" id="yui_3_9_1_2_1423092106512_357">a. Estados Unidos</label><?php if($_POST['q13910:1_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
<div  <?php if($_POST['q13910:1_answer']=='1'){echo "class='error'";} ?>><input type="radio" name="q13910:1_answer" value="1" id="q13910:1_answer1" disabled="true" <?php if($_POST['q13910:1_answer']=='1'){echo "checked";} ?>  ><label for="q13910:1_answer1">b. Japón</label><?php if($_POST['q13910:1_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div  <?php if($_POST['q13910:1_answer']=='2'){echo "class='correct'";} ?>><input type="radio" name="q13910:1_answer" value="2" id="q13910:1_answer1" disabled="true" <?php if($_POST['q13910:1_answer']=='2'){echo "checked";} ?>  ><label for="q13910:1_answer2">c. Arabia Saudita</label><?php if($_POST['q13910:1_answer']=='2'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>
</div></div>
			</div>
			<br>

			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<div class="rightanswer">La respuesta correcta es: Arabia Saudita</div></div>
			</div>



			</div>
		</div>
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>2</span></h5>
							<?php 
					if( $_POST['q13910:2_answer'] == '2')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:2_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				
				</div>
		</div>
			<div class="col-xs-9 Pregunta">			
			<div class="formulario" id="yui_3_9_1_2_1423092106512_379">
			<div class="qtext" id="yui_3_9_1_2_1423092106512_383">
			<p id="yui_3_9_1_2_1423092106512_382">Es una suposición que otorga un cierto grado de posibilidad para extraer u efecto o una consecuencia.</p></div>
			<div class="ablock">
			<div class="prompt">Seleccione una:</div>
			<div class="answer">
			<div <?php if($_POST['q13910:2_answer']=='0'){echo "class='error'";} ?>><input type="radio" name="q13910:2_answer" value="0" id="q13910:2_answer0" disabled="true" <?php if($_POST['q13910:2_answer']=='0'){echo 'checked';} ?>><label for="q13910:2_answer0">a. Cronograma</label><?php if($_POST['q13910:2_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
			<div <?php if($_POST['q13910:2_answer']=='1'){echo "class='error'";} ?>><input type="radio" name="q13910:2_answer" value="1" id="q13910:2_answer1" disabled="true" <?php if($_POST['q13910:2_answer']=='1'){echo 'checked';} ?>><label for="q13910:2_answer1">b. Planeación</label><?php if($_POST['q13910:2_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
			<div <?php if($_POST['q13910:2_answer']=='2'){echo "class='correct'";} ?>><input type="radio" name="q13910:2_answer" value="2" id="q13910:2_answer2" disabled="true" <?php if($_POST['q13910:2_answer']=='2'){echo 'checked';} ?>><label for="q13910:2_answer2">c. Hipótesis</label><?php if($_POST['q13910:2_answer']=='2'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>

</div></div></div>

<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<div class="rightanswer">La respuesta correcta es: Hipótesis</div></div>
			</div>

			</div>
		</div>
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>3</span></h5>
							<?php 
					if( $_POST['q13910:3_answer'] == '1')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:3_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
				
					<?php 
				}
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">			

<div class="formulario" id="yui_3_9_1_2_1423092293728_354"><div class="qtext"><p>¿Qué país es el mayor consumidor de petróleo?</p></div><div class="ablock" id="yui_3_9_1_2_1423092293728_353"><div class="prompt">Seleccione una:</div><div class="answer" id="yui_3_9_1_2_1423092293728_352">
<div <?php if($_POST['q13910:3_answer']=='0'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092293728_351"><input type="radio" name="q13910:3_answer" value="0" id="q13910:3_answer0" disabled="true" <?php if($_POST['q13910:3_answer']=='0'){echo 'checked';} ?>><label for="q13910:3_answer0">a. Arabia Saudita</label><?php if($_POST['q13910:3_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
<div <?php if($_POST['q13910:3_answer']=='1'){echo "class='correct'";} ?>><input type="radio" name="q13910:3_answer" value="1" id="q13910:3_answer1" disabled="true" <?php if($_POST['q13910:3_answer']=='1'){echo 'checked';} ?>><label for="q13910:3_answer1">b. Estados Unidos</label><?php if($_POST['q13910:3_answer']=='1'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?></div>
<div <?php if($_POST['q13910:3_answer']=='2'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092293728_351"><input type="radio" name="q13910:3_answer2" value="2" id="q13910:3_answer2" disabled="true" <?php if($_POST['q13910:3_answer']=='2'){echo 'checked';} ?>><label for="q13910:3_answer2">c. México</label><?php if($_POST['q13910:3_answer']=='2'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
</div></div></div>
<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			
			<div class="rightanswer">La respuesta correcta es: Estados Unidos</div></div>
			</div>


			</div>
		</div>

<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>4</span></h5>
							<?php 
					if( $_POST['q13910:4_answer'] == '1')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:4_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				</div>
		</div>
				<div class="col-xs-9 Pregunta">			

<div class="formulario"><div class="qtext"><p>Petróleo con alto peso específico, color oscuro y alto contenido de azufre. En general rinde en asfalto de buena calidad y poca gasolina de alto octanaje.</p></div><div class="ablock"><div class="prompt">Seleccione una:</div><div class="answer">
<div <?php if($_POST['q13910:4_answer']=='0'){echo "class='error'";}?>><input type="radio" name="q13910:4_answer" value="0" id="q13910:4_answer0" disabled="true" <?php if($_POST['q13910:4_answer']=='0'){echo 'checked';} ?>><label for="q13910:4_answer0">a. Aromático</label><?php if($_POST['q13910:4_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div <?php if($_POST['q13910:4_answer']=='1'){echo "class='correct'";}?>><input type="radio" name="q13910:4_answer" value="1" id="q13910:4_answer1" disabled="true" <?php if($_POST['q13910:4_answer']=='1'){echo 'checked';} ?>><label for="q13910:4_answer1">b. Nafténico</label><?php if($_POST['q13910:4_answer']=='1'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>
<div <?php if($_POST['q13910:4_answer']=='2'){echo "class='error'";}?>><input type="radio" name="q13910:4_answer" value="2" id="q13910:4_answer2" disabled="true" <?php if($_POST['q13910:4_answer']=='2'){echo 'checked';} ?>><label for="q13910:4_answer2">c. Parafínico</label><?php if($_POST['q13910:4_answer']=='2'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>

</div></div></div>
<br>
<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
	
			<div class="rightanswer">La respuesta correcta es: Nafténico</div></div>
			</div>

			</div>
</div>	
		
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>5</span></h5>
							<?php 
					if( $_POST['q13910:5_answer'] == '0')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:5_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">			
			
	<div class="formulario"><div class="qtext"><p>El grupo de sustancias derivadas del benceno se clasifica como crudo</p></div><div class="ablock"><div class="prompt">Seleccione una:</div><div class="answer">
<div <?php if($_POST['q13910:5_answer']=='0'){echo "class='correct'";}?>><input type="radio" name="q13910:5_answer" value="0" id="q13910:5_answer0" disabled="true" <?php if($_POST['q13910:5_answer']=='0'){echo 'checked';} ?>><label for="q13910:5_answer0">a. Aromático</label><?php if($_POST['q13910:5_answer']=='0'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?>  </div>
<div <?php if($_POST['q13910:5_answer']=='1'){echo "class='error'";}?>><input type="radio" name="q13910:5_answer" value="1" id="q13910:5_answer1" disabled="true" <?php if($_POST['q13910:5_answer']=='1'){echo 'checked';} ?>><label for="q13910:5_answer1">b. Nafténico</label><?php if($_POST['q13910:5_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?>  </div>
<div <?php if($_POST['q13910:5_answer']=='2'){echo "class='error'";}?>><input type="radio" name="q13910:5_answer" value="2" id="q13910:5_answer2" disabled="true" <?php if($_POST['q13910:5_answer']=='2'){echo 'checked';} ?>><label for="q13910:5_answer2">c. Asfáltico</label><?php if($_POST['q13910:5_answer']=='2'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?>  </div>
</div></div></div>
<br>
<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
		
			<div class="rightanswer">La respuesta correcta es: Aromático</div></div>
			</div>
	</div>
		</div>
<br>
	<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>6</span></h5>
					<?php 
					if( $_POST['q13910:6_answer'] == '0')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:6_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">
				<div class="formulario">
					<div class="qtext" id="yui_3_9_1_2_1423092106512_374"><p id="yui_3_9_1_2_1423092106512_373">La pintura, la gasolina y los disolventes son ejemplos de petróleo.</p></div>
<div class="ablock" id="yui_3_9_1_2_1423092106512_351"><div class="prompt">Seleccione una:</div><div class="answer" id="yui_3_9_1_2_1423092106512_359">
<div  <?php if($_POST['q13910:6_answer']=='0'){echo "class='correct'";} ?> id="yui_3_9_1_2_1423092106512_358"><input type="radio" name="q13910:6_answer" value="0" id="q13910:6_answer0" disabled="true" <?php if($_POST['q13910:6_answer']=='0'){echo "checked";} ?>><label for="q13910:6_answer0" id="yui_3_9_1_2_1423092106512_357">a. Parafínico</label><?php if($_POST['q13910:6_answer']=='0'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?></div>
<div  <?php if($_POST['q13910:6_answer']=='1'){echo "class='error'";} ?>><input type="radio" name="q13910:6_answer" value="1" id="q13910:6_answer1" disabled="true" <?php if($_POST['q13910:6_answer']=='1'){echo "checked";} ?>  ><label for="q13910:6_answer1">b. Aromático</label><?php if($_POST['q13910:6_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div  <?php if($_POST['q13910:6_answer']=='2'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092106512_358"><input type="radio" name="q13910:6_answer" value="2" id="q13910:6_answer2" disabled="true" <?php if($_POST['q13910:6_answer']=='2'){echo "checked";} ?>><label for="q13910:6_answer2" id="yui_3_9_1_2_1423092106512_357">c. Asfáltico</label><?php if($_POST['q13910:6_answer']=='2'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
</div></div>
			</div>
			<br>

			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<div class="rightanswer">La respuesta correcta es: Parafínico</div></div>
			</div>



			</div>
		</div>
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>7</span></h5>
							<?php 
					if( $_POST['q13910:7_answer'] == '2')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:7_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				
				</div>
		</div>
			<div class="col-xs-9 Pregunta">			
			<div class="formulario" id="yui_3_9_1_2_1423092106512_379">
			<div class="qtext" id="yui_3_9_1_2_1423092106512_383">
			<p id="yui_3_9_1_2_1423092106512_382">¿Cuáles son las actividades fundamentales de las compañías petroleras?</p></div>
			<div class="ablock">
			<div class="prompt">Seleccione una:</div>
			<div class="answer">
			<div <?php if($_POST['q13910:7_answer']=='0'){echo "class='erorr'";} ?>><input type="radio" name="q13910:7_answer" value="0" id="q13910:7_answer0" disabled="true" <?php if($_POST['q13910:7_answer']=='0'){echo 'checked';} ?>><label for="q13910:7_answer0">a. Explotación de yacimientos, extracción, filtración </label><?php if($_POST['q13910:7_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
			<div <?php if($_POST['q13910:7_answer']=='1'){echo "class='error'";} ?>><input type="radio" name="q13910:7_answer" value="1" id="q13910:7_answer1" disabled="true" <?php if($_POST['q13910:7_answer']=='1'){echo 'checked';} ?>><label for="q13910:7_answer1">b. Extracción, exploración, análisis químicos</label><?php if($_POST['q13910:7_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
			<div <?php if($_POST['q13910:7_answer']=='2'){echo "class='correct'";} ?>><input type="radio" name="q13910:7_answer" value="2" id="q13910:7_answer2" disabled="true" <?php if($_POST['q13910:7_answer']=='2'){echo 'checked';} ?>><label for="q13910:7_answer2">c. Exploración, extracción y refinación </label><?php if($_POST['q13910:7_answer']=='2'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>
			
</div></div></div>

<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<div class="rightanswer">La respuesta correcta es:  Exploración, extracción y refinación</div></div>
			</div>

			</div>
		</div>
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>8</span></h5>
							<?php 
					if( $_POST['q13910:8_answer'] == '1')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:8_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
				
					<?php 
				}
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">			

<div class="formulario" id="yui_3_9_1_2_1423092293728_354"><div class="qtext"><p>Consiste en determinar la ubicación de los yacimientos petroleros.</p></div><div class="ablock" id="yui_3_9_1_2_1423092293728_353"><div class="prompt">Seleccione una:</div><div class="answer" id="yui_3_9_1_2_1423092293728_352">
<div <?php if($_POST['q13910:8_answer']=='0'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092293728_351"><input type="radio" name="q13910:8_answer" value="0" id="q13910:8_answer0" disabled="true" <?php if($_POST['q13910:8_answer']=='0'){echo 'checked';} ?>><label for="q13910:8_answer0">a. Filtración</label><?php if($_POST['q13910:8_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
<div <?php if($_POST['q13910:8_answer']=='1'){echo "class='correct'";} ?>><input type="radio" name="q13910:8_answer" value="1" id="q13910:8_answer1" disabled="true" <?php if($_POST['q13910:8_answer']=='1'){echo 'checked';} ?>><label for="q13910:8_answer1">b. Exploración</label><?php if($_POST['q13910:8_answer']=='1'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?></div>
<div <?php if($_POST['q13910:8_answer']=='2'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092293728_351"><input type="radio" name="q13910:8_answer2" value="2" id="q13910:8_answer2" disabled="true" <?php if($_POST['q13910:8_answer']=='2'){echo 'checked';} ?>><label for="q13910:8_answer2">c. Extracción</label><?php if($_POST['q13910:8_answer']=='2'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
</div></div></div>
<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			
			<div class="rightanswer">La respuesta correcta es: Exploración</div></div>
			</div>


			</div>
		</div>

<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>9</span></h5>
							<?php 
					if( $_POST['q13910:9_answer'] == '2')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:9_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				</div>
		</div>
				<div class="col-xs-9 Pregunta">			

<div class="formulario"><div class="qtext"><p>El porcentaje de energía primaria producida por el petróleo que se consume en México es de... </p></div><div class="ablock"><div class="prompt">Seleccione una:</div><div class="answer">
<div <?php if($_POST['q13910:9_answer']=='0'){echo "class='error'";}?>><input type="radio" name="q13910:9_answer" value="0" id="q13910:9_answer0" disabled="true" <?php if($_POST['q13910:9_answer']=='0'){echo 'checked';} ?>><label for="q13910:9_answer0">a. 50 %</label><?php if($_POST['q13910:9_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div <?php if($_POST['q13910:9_answer']=='1'){echo "class='error'";}?>><input type="radio" name="q13910:9_answer" value="1" id="q13910:9_answer1" disabled="true" <?php if($_POST['q13910:9_answer']=='1'){echo 'checked';} ?>><label for="q13910:9_answer1">b. 70 %</label><?php if($_POST['q13910:9_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div <?php if($_POST['q13910:9_answer']=='2'){echo "class='correct'";}?>><input type="radio" name="q13910:9_answer" value="2" id="q13910:9_answer2" disabled="true" <?php if($_POST['q13910:9_answer']=='2'){echo 'checked';} ?>><label for="q13910:9_answer2">c. 88 %</label><?php if($_POST['q13910:9_answer']=='2'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>

</div></div></div>
<br>
<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
	
			<div class="rightanswer">La respuesta correcta es: 88 %</div></div>
			</div>

			</div>
</div>	
		
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>10</span></h5>
							<?php 
					if( $_POST['q13910:10_answer'] == '2')
					{
						?>
					<div class="state" >Correcta</div>
						<?php	
					}
					elseif ($_POST['q13910:10_answer'] != null) {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					else{
					?>
					<div class="state" >Sin contestar</div>
					<?php 
				}
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">			
			
	<div class="formulario"><div class="qtext"><p>Se consideran derivados del petróleo.
</p></div><div class="ablock"><div class="prompt">Seleccione una:</div><div class="answer">
<div <?php if($_POST['q13910:10_answer']=='0'){echo "class='error'";}?>><input type="radio" name="q13910:10_answer" value="0" id="q13910:10_answer0" disabled="true" <?php if($_POST['q13910:10_answer']=='0'){echo 'checked';} ?>><label for="q13910:10_answer0">a. Petroquímicos y oxidaciones</label><?php if($_POST['q13910:10_answer']=='0'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?>  </div>
<div <?php if($_POST['q13910:10_answer']=='1'){echo "class='error'";}?>><input type="radio" name="q13910:10_answer" value="1" id="q13910:10_answer1" disabled="true" <?php if($_POST['q13910:10_answer']=='1'){echo 'checked';} ?>><label for="q13910:10_answer1">b. Energía y madera</label><?php if($_POST['q13910:10_answer']=='1'){echo '<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?>  </div>
<div <?php if($_POST['q13910:10_answer']=='2'){echo "class='correct'";}?>><input type="radio" name="q13910:10_answer" value="2" id="q13910:10_answer2" disabled="true" <?php if($_POST['q13910:10_answer']=='2'){echo 'checked';} ?>><label for="q13910:10_answer2">c. Combustibles y petroquímicos</label><?php if($_POST['q13910:10_answer']=='2'){echo '<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?>  </div>

</div></div></div>
<br>
<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
		
			<div class="rightanswer">La respuesta correcta es: Combustibles y petroquímicos</div></div>
			</div>
	</div>
		</div>
<div class="submitbtns"><a class="fincheck" href="../index.html">Finalizar revisión</a></div>
<br>

		<br><br><br>
	</div>
		</body>
</html>
