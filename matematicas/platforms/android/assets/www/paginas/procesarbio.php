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
  						Matemáticas tercer grado
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
			<div class="ruta col-xs-12">Matemáticas tercer grado	/ Bloque 4	/ Eje. Sentido numérico y pensamiento algebraico	/ Tema 1. Patrones y ecuaciones	/ Contenidos: Obtención de una expresión general cuadrática para definir el enésimo término de una sucesión.	/ Sesión 1</div>	
			</div>
		<div class="row datauser">
			<div id="usuario">
            Alumno :       </div>
		</div>		
		<div class="row">
			<div class=" logo col-xs-12">				
				<div class="text-center header-image">
					<a><img src="../img/iconMAT3.png"></a>
				</div>					
			</div>
		</div>
		<br>
		<div class="row">
		<?php 
		$i =0;
			if($_POST['q14118:1_sub0']=='2')
				$i++;
			if($_POST['q14118:1_sub1']=='3')
				$i++;
			if($_POST['q14118:1_sub2']=='9')
				$i++;
			if($_POST['q14118:1_sub3']=='10')
				$i++;
			if($_POST['q14118:1_sub4']=='8')
				$i++;
			if($_POST['q14118:1_sub5']=='6')
				$i++;
			if($_POST['q14118:1_sub6']=='4')
				$i++;
			if($_POST['q14118:1_sub7']=='5')
				$i++;
			if($_POST['q14118:1_sub8']=='1')
				$i++;
			if($_POST['q14118:1_sub9']=='7')
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
					<td class="cell"><?php echo ($i)/10?>,0/1,00</td>
				</tr>
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
					if($i > '0' && $i<'10')
					{
						?>
					<div class="state" >Parcialmente Correcta</div>
						<?php	
					}
					elseif ($i == '0') {
						?>
					<div class="state" >Incorrecta</div>
						<?php
					}
					elseif ($i == '10') {
						?>
					<div class="state" >Correcta</div>
						<?php
					}
				
					 ?>
				</div>
		</div>
			<div class="col-xs-9 Pregunta">
				<div class="formulario">
			<div class="qtext"><p>Lee con atención y relaciona las columnas</p></div><div class="ablock">
			<table class="answer">
			<tbody>
			<tr class="r0">
			<td class="text"><p>En ella se busca redefinir el Protocolo de Kioto</p></td>
			<td <?php if($_POST['q14118:1_sub0']=='2'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub0']!='0'){echo ("class='control error'");} ?> >
			<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub0']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub0']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub0']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub0']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub0']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub0']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub0']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub0']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub0']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub0']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub0']=='2')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub0']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			 </td></tr><tr class="r1"><td class="text"><p>Países que se niegan a cumplir compromisos&nbsp; del Protocolo de Kioto.</p></td>
			 <td <?php if($_POST['q14118:1_sub1']=='3'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub1']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub1']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub1']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub1']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub1']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub1']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub1']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub1']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub1']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub1']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub1']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub1']=='3')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub1']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			 </td></tr><tr class="r0"><td class="text"><p>En ella se dio un nuevo ímpetu a la lucha contra la pobreza y la protección al medio ambiente</p></td><td <?php if($_POST['q14118:1_sub2']=='9'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub2']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub2']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub2']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub2']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub2']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub2']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub2']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub2']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub2']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub2']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub2']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub2']=='9')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub2']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			 </td></tr><tr class="r1"><td class="text"><p>Año de la Primera Conferencia de Ciudades Europeas Sostenibles</p></td><td <?php if($_POST['q14118:1_sub3']=='10'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub3']!='0'){echo ("class='control error'");} ?>>
				<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub3']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub3']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub3']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub3']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub3']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub3']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub3']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub3']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub3']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub3']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub3']=='10')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub3']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			 </td></tr><tr class="r0"><td class="text"><p>En este documento se concluye que la biodiversidad es un&nbsp; factor crítico para el adecuado funcionamiento del planeta.</p></td><td <?php if($_POST['q14118:1_sub4']=='8'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub4']!='0'){echo ("class='control error'");} ?>>
				<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub4']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub4']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub4']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub4']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub4']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub4']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub4']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub4']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub4']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub4']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub4']=='8')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub4']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			  </td></tr><tr class="r1"><td class="text"><p>Lanzamiento de la Carta de la Tierra</p></td><td <?php if($_POST['q14118:1_sub5']=='6'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub5']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub5']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub5']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub5']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub5']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub5']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub5']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub5']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub5']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub5']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub5']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub5']=='6')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub5']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			  </td></tr><tr class="r0"><td class="text"><p>Señala que el medioambiente a nivel mundial continúa siendo vulnerable y que la degradación de los ecosistemas parece no tener retroceso.</p></td><td <?php if($_POST['q14118:1_sub6']=='4'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub6']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub6']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub6']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub6']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub6']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub6']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub6']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub6']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub6']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub6']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub6']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub6']=='4')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub6']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			  </td></tr><tr class="r1"><td class="text"><p>Año en&nbsp; el que el Club de Roma convocó para analizar las grandes modificaciones&nbsp; que estaba sufriendo el ambiente</p></td><td <?php if($_POST['q14118:1_sub7']=='5'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub7']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub7']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub7']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub7']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub7']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub7']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub7']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub7']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub7']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub7']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub7']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub7']=='5')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub7']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			  </td></tr><tr class="r0"><td class="text"><p>En ella nace la Agenda 21</p></td><td <?php if($_POST['q14118:1_sub8']=='1'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub8']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub8']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub8']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub8']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub8']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub8']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub8']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub8']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub8']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub8']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub8']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub8']=='1')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub8']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			  </td></tr><tr class="r1"><td class="text"><p>Año en el que se aprueba el Protocolo de Kioto</p></td><td <?php if($_POST['q14118:1_sub9']=='7'){echo ("class='control correct'");}else if ($_POST['q14118:1_sub9']!='0'){echo ("class='control error'");} ?>>
			 	<select disabled="true" id="menuq14118:1_sub0" class="select menuq14118:1_sub0" name="q14118:1_sub0">
			<option <?php if($_POST['q14118:1_sub9']=='0'){echo "selected='selected'";}?> value="0">Elegir...</option>
			<option <?php if($_POST['q14118:1_sub9']=='1'){echo "selected='selected'";}?>value="1">Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible.</option>
			<option <?php if($_POST['q14118:1_sub9']=='2'){echo "selected='selected'";}?>value="2">Cumbre de Bali</option>
			<option <?php if($_POST['q14118:1_sub9']=='3'){echo "selected='selected'";}?>value="3">Estados Unidos y China</option>
			<option <?php if($_POST['q14118:1_sub9']=='4'){echo "selected='selected'";}?>value="4">Koffi Annan</option>
			<option <?php if($_POST['q14118:1_sub9']=='5'){echo "selected='selected'";}?>value="5">1968</option>
			<option <?php if($_POST['q14118:1_sub9']=='6'){echo "selected='selected'";}?>value="6">2000</option>
			<option <?php if($_POST['q14118:1_sub9']=='7'){echo "selected='selected'";}?>value="7">1997</option>
			<option <?php if($_POST['q14118:1_sub9']=='8'){echo "selected='selected'";}?>value="8">Informe Global 2000</option>
			<option <?php if($_POST['q14118:1_sub9']=='9'){echo "selected='selected'";}?>value="9">Conferencia Mundial sobre Desarrollo Sostenible Río + 10.</option><option value="10">1994</option>
			</select>
			<?php if($_POST['q14118:1_sub9']=='7')
			{
				echo ('<img src="../img/grade_correct.svg" alt="Correcta" class="questioncorrectnessicon">');
			}
			else if ($_POST['q14118:1_sub9']!='0')
				{
					echo ('<img src="../img/grade_incorrect.svg" alt="incorrecta" class="questioncorrectnessicon">');
				}
				?>
			 </td></tr></tbody></table></div>

			</div>
			<br>
			<div class="outcome" id="yui_3_9_1_2_1423156158910_47">
			<div class="feedback">
			<?php if($i>'0' && $i<'10'){ ?> 
			<div class="specificfeedback"><p>Respuesta parcialmente correcta</p></div>
			<?php } else if($i=='0'){ ?>
			<div class="specificfeedback"><p>Respuesta incorrecta</p></div>
			<?php } else {?>
			<div class="specificfeedback"><p>Respuesta correcta</p></div>
			<?php }?>
			<div class="rightanswer">La respuesta correcta es: En ella se busca redefinir el Protocolo de Kioto – Cumbre de Bali, Países que se niegan a cumplir compromisos  del Protocolo de Kioto. – Estados Unidos y China, En ella se dio un nuevo ímpetu a la lucha contra la pobreza y la protección al medio ambiente – Conferencia Mundial sobre Desarrollo Sostenible Río + 10., Año de la Primera Conferencia de Ciudades Europeas Sostenibles – 1994, En este documento se concluye que la biodiversidad es un  factor crítico para el adecuado funcionamiento del planeta. – Informe Global 2000, Lanzamiento de la Carta de la Tierra – 2000, Señala que el medioambiente a nivel mundial continúa siendo vulnerable y que la degradación de los ecosistemas parece no tener retroceso. – Koffi Annan, Año en  el que el Club de Roma convocó para analizar las grandes modificaciones  que estaba sufriendo el ambiente – 1968, En ella nace la Agenda 21 – Conferencia de la ONU sobre Medio Ambiente y Desarrollo Sostenible., Año en el que se aprueba el Protocolo de Kioto – 1997</div></div>
			</div>
		</div>
	</div>
<br>

<div class="submitbtns"><a class="fincheck" href="../index.html">Finalizar revisión</a></div>
<br>

		<br><br><br>
	</div>
		</body>
</html>
