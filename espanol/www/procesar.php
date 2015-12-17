<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=960px, maximum-scale=1.0, user-scalable=yes"/>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="StyleSheet" href="estilos.css" type="text/css">
    <script type="text/javascript" src="dist/js/jquery.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="contenedor">
		<div class="row">
			<div class="menu">
  				<div class="menuizq col-xs-12 col-lg-12 imagenmenu" >
  					<a class="menuizq" href="index.html"><img src="img/LogoHeader.png"></a>
  					<span class="separador" > </span>
  					<div class="materia">
  						Español tercer grado
  					</div>
  						<div  style="float:right">
	  					<a class="menuder" href="#"><img src="img/icono4.png"></a>
	  					<a class="menuder" href="#"><img src="img/icono3.png"></a>
	  					<a class="menuder" href="#"><img src="img/icono2.png"></a>
	  					<span class="separador" > </span>
	  					<a class="menuder" href="http://apprende.mx/"><img src="img/icono1.png"></a>
	  				</div>
				</div>
  			</div>
		</div>
		<div class="row">			
			<div class="ruta col-xs-12">Español tercer grado	/ Bloque V	/ Proyecto 3. Práctica social del lenguaje: Escribir artículos de opinión para su difusión.	/ Tema de Reflexión: Comprensión e interpretación	/ Contenido: Postura del autor y formas de validar los argumentos (ejemplos, citas, datos de investigación y de la propia experiencia).	/ Sesión 3</div>				
		</div>
					<div class="row datauser">
			<div id="usuario">
            Alumno :         </div>
		</div>		
		<div class="row">
			<div class="logo col-xs-12">				
				<div class="text-center header-image">
					<a><img src="img/iconESP3.png"></a>
				</div>					
			</div>
		</div>
		<br>
		<div class="row">
		<?php 
		$i =0;
			if($_POST['q13910:1_answer']=='1')
				$i++;
			if($_POST['q13910:2_answer']=='0')
				$i++;
			if($_POST['q13910:3_answer']=='2')
				$i++;
			if($_POST['q13910:4_answer']=='2')
				$i++;
			if($_POST['q13910:5_answer']=='2')
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
					<th class="cell" scope="row">Puntos</th>
					<td class="cell"><?php echo $i ?>,00/5,00</td>
				</tr>
				<tr>
					<th class="cell" scope="row">Calificación</th>
					<td class="cell"><b><?php echo $i*2 ?>,00</b> de un máximo de 10,00 (<b><?php echo $i*2*10 ?></b>%)</td>
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
					if( $_POST['q13910:1_answer'] == '1')
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
					<div class="qtext" id="yui_3_9_1_2_1423092106512_374"><p id="yui_3_9_1_2_1423092106512_373">Pueden ser observaciones interesantes, guías morales y éticas o comentarios pesimistas sobre la vida en general:</p></div>
<div class="ablock" id="yui_3_9_1_2_1423092106512_351"><div class="prompt">Seleccione una:</div><div class="answer" id="yui_3_9_1_2_1423092106512_359">
<div  <?php if($_POST['q13910:1_answer']=='0'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092106512_358"><input type="radio" name="q13910:1_answer" value="0" id="q13910:1_answer0" disabled="true" <?php if($_POST['q13910:1_answer']=='0'){echo "checked";} ?>><label for="q13910:1_answer0" id="yui_3_9_1_2_1423092106512_357">a. Aforismos</label><?php if($_POST['q13910:1_answer']=='0'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
<div  <?php if($_POST['q13910:1_answer']=='1'){echo "class='correct'";} ?>><input type="radio" name="q13910:1_answer" value="1" id="q13910:1_answer1" disabled="true" <?php if($_POST['q13910:1_answer']=='1'){echo "checked";} ?>  ><label for="q13910:1_answer1">b. Adagios</label><?php if($_POST['q13910:1_answer']=='1'){echo '<img src="img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>
<div  <?php if($_POST['q13910:1_answer']=='2'){echo "class='error'";} ?>><input type="radio" name="q13910:1_answer" value="2" id="q13910:1_answer2" disabled="true" <?php if($_POST['q13910:1_answer']=='2'){echo "checked ";} ?>><label for="q13910:1_answer2">c. Refranes</label><?php if($_POST['q13910:1_answer']=='2'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
</div></div>
			</div>
			<br>

			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<?php if($_POST['q13910:1_answer']=='1'){ ?> 
			<div class="specificfeedback"><p>Respuesta correcta</p></div>
			<?php } else { ?>
			<div class="specificfeedback"><p>Respuesta incorrecta</p></div>
			<?php }?>
			<div class="rightanswer">La respuesta correcta es: Adagios</div></div>
			</div>



			</div>
		</div>
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>2</span></h5>
							<?php 
					if( $_POST['q13910:2_answer'] == '0')
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
			<p id="yui_3_9_1_2_1423092106512_382">Este consiste en expresar un pensamiento de forma concisa y en pocas palabras; suele tener carácter moral o doctrinal tanto a nivel culto como popular:</p></div>
			<div class="ablock">
			<div class="prompt">Seleccione una:</div>
			<div class="answer">
			<div <?php if($_POST['q13910:2_answer']=='0'){echo "class='correct'";} ?>><input type="radio" name="q13910:2_answer" value="0" id="q13910:2_answer0" disabled="true" <?php if($_POST['q13910:2_answer']=='0'){echo 'checked';} ?>><label for="q13910:2_answer0">a. Aforismos</label><?php if($_POST['q13910:2_answer']=='0'){echo '<img src="img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>
			<div <?php if($_POST['q13910:2_answer']=='1'){echo "class='error'";} ?>><input type="radio" name="q13910:2_answer" value="1" id="q13910:2_answer1" disabled="true" <?php if($_POST['q13910:2_answer']=='1'){echo 'checked';} ?>><label for="q13910:2_answer1">b. Refranes</label><?php if($_POST['q13910:2_answer']=='1'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
			<div <?php if($_POST['q13910:2_answer']=='2'){echo "class='error'";} ?>><input type="radio" name="q13910:2_answer" value="2" id="q13910:2_answer2" disabled="true" <?php if($_POST['q13910:2_answer']=='2'){echo 'checked';} ?>><label for="q13910:2_answer2">c. Adagios</label><?php if($_POST['q13910:2_answer']=='2'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
</div></div></div>

<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<?php if($_POST['q13910:2_answer']=='0'){ ?> 
			<div class="specificfeedback"><p>Respuesta correcta</p></div>
			<?php } else { ?>
			<div class="specificfeedback"><p>Respuesta incorrecta</p></div>
			<?php }?>
			<div class="rightanswer">La respuesta correcta es: Aforismos</div></div>
			</div>

			</div>
		</div>
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>3</span></h5>
							<?php 
					if( $_POST['q13910:3_answer'] == '2')
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

<div class="formulario" id="yui_3_9_1_2_1423092293728_354"><div class="qtext"><p>Son de corte formal, a diferencia de los refranes apelan al humor:</p></div><div class="ablock" id="yui_3_9_1_2_1423092293728_353"><div class="prompt">Seleccione una:</div><div class="answer" id="yui_3_9_1_2_1423092293728_352">
<div <?php if($_POST['q13910:3_answer']=='0'){echo "class='error'";} ?> id="yui_3_9_1_2_1423092293728_351"><input type="radio" name="q13910:3_answer" value="0" id="q13910:3_answer0" disabled="true" <?php if($_POST['q13910:3_answer']=='0'){echo 'checked';} ?>><label for="q13910:3_answer0">a. <em>Wellerismos</em></label><?php if($_POST['q13910:3_answer']=='0'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
<div <?php if($_POST['q13910:3_answer']=='1'){echo "class='error'";} ?>><input type="radio" name="q13910:3_answer" value="1" id="q13910:3_answer1" disabled="true" <?php if($_POST['q13910:3_answer']=='1'){echo 'checked';} ?>><label for="q13910:3_answer1">b. Refranes</label><?php if($_POST['q13910:3_answer']=='1'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?></div>
<div <?php if($_POST['q13910:3_answer']=='2'){echo "class='correct'";} ?>><input type="radio" name="q13910:3_answer" value="2" id="q13910:3_answer2" disabled="true" <?php if($_POST['q13910:3_answer']=='2'){echo 'checked';} ?>><label for="q13910:3_answer2">c. Proverbios</label><?php if($_POST['q13910:3_answer']=='2'){echo '<img src="img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?></div>
</div></div></div>
<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<?php if($_POST['q13910:3_answer']=='2'){ ?> 
			<div class="specificfeedback"><p>Respuesta correcta</p></div>
			<?php } else { ?>
			<div class="specificfeedback"><p>Respuesta incorrecta</p></div>
			<?php }?>
			<div class="rightanswer">La respuesta correcta es: Proverbios</div></div>
			</div>


			</div>
		</div>

<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>4</span></h5>
							<?php 
					if( $_POST['q13910:4_answer'] == '2')
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

<div class="formulario"><div class="qtext"><p>Es cualquier frase proverbial, sentenciosa, de tono solemne o desenfadada, atribuida a personajes imaginarios:</p></div><div class="ablock"><div class="prompt">Seleccione una:</div><div class="answer">
<div <?php if($_POST['q13910:4_answer']=='0'){echo "class='error'";}?>><input type="radio" name="q13910:4_answer" value="0" id="q13910:4_answer0" disabled="true" <?php if($_POST['q13910:4_answer']=='0'){echo 'checked';} ?>><label for="q13910:4_answer0">a. Proverbios</label><?php if($_POST['q13910:4_answer']=='0'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div <?php if($_POST['q13910:4_answer']=='1'){echo "class='error'";}?>><input type="radio" name="q13910:4_answer" value="1" id="q13910:4_answer1" disabled="true" <?php if($_POST['q13910:4_answer']=='1'){echo 'checked';} ?>><label for="q13910:4_answer1">b. Refranes</label><?php if($_POST['q13910:4_answer']=='1'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?> </div>
<div <?php if($_POST['q13910:4_answer']=='2'){echo "class='correct'";}?>><input type="radio" name="q13910:4_answer" value="2" id="q13910:4_answer2" disabled="true" <?php if($_POST['q13910:4_answer']=='2'){echo 'checked';} ?>><label for="q13910:4_answer2">c. <em>Wellerismos</em></label><?php if($_POST['q13910:4_answer']=='2'){echo '<img src="img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?> </div>
</div></div></div>
<br>
<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<?php if($_POST['q13910:4_answer']=='2'){ ?> 
			<div class="specificfeedback"><p>Respuesta correcta</p></div>
			<?php } else { ?>
			<div class="specificfeedback"><p>Respuesta incorrecta</p></div>
			<?php }?>
			<div class="rightanswer">La respuesta correcta es: Wellerismos</div></div>
			</div>

			</div>
</div>	
		
<br>
<div class="row">
			<div class="col-xs-3 infoPregunta">
				<div class="info">
					<h5 class="no">Pregunta <span>5</span></h5>
							<?php 
					if( $_POST['q13910:5_answer'] == '2')
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
			
	<div class="formulario"><div class="qtext"><p>Es un recurso retórico que consiste en reproducir un fragmento de una expresión dicha por una persona, respetando su forma original para insertarlo en un discurso o escrito propio:</p></div><div class="ablock"><div class="prompt">Seleccione una:</div><div class="answer">
<div <?php if($_POST['q13910:5_answer']=='0'){echo "class='error'";}?>><input type="radio" name="q13910:5_answer" value="0" id="q13910:5_answer0" disabled="true" <?php if($_POST['q13910:5_answer']=='0'){echo 'checked';} ?>><label for="q13910:5_answer0">a. <em>Wellerismo</em></label><?php if($_POST['q13910:5_answer']=='0'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?>  </div>
<div <?php if($_POST['q13910:5_answer']=='1'){echo "class='error'";}?>><input type="radio" name="q13910:5_answer" value="1" id="q13910:5_answer1" disabled="true" <?php if($_POST['q13910:5_answer']=='1'){echo 'checked';} ?>><label for="q13910:5_answer1">b. Proverbio</label><?php if($_POST['q13910:5_answer']=='1'){echo '<img src="img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">';} ?>  </div>
<div <?php if($_POST['q13910:5_answer']=='2'){echo "class='correct'";}?>><input type="radio" name="q13910:5_answer" value="2" id="q13910:5_answer2" disabled="true" <?php if($_POST['q13910:5_answer']=='2'){echo 'checked';} ?>><label for="q13910:5_answer2">c. Cita</label><?php if($_POST['q13910:5_answer']=='2'){echo '<img src="img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">';} ?>  </div>
</div></div></div>
<br>
<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<?php if($_POST['q13910:5_answer']=='2'){ ?> 
			<div class="specificfeedback"><p>Respuesta correcta</p></div>
			<?php } else { ?>
			<div class="specificfeedback"><p>Respuesta incorrecta</p></div>
			<?php }?>
			<div class="rightanswer">La respuesta correcta es: Cita</div></div>
			</div>
			</div>
		</div>
<br>

<div class="submitbtns"><a class="fincheck" href="index.html">Finalizar revisión</a></div>
<br>

		<br><br><br>
	</div>
		</body>
</html>
