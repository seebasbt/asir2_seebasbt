<form>
	ángulo 1    
	<input name="angulo1"/>
	</br>

	ángulo 2    
	<input name="angulo2"/>
	</br>

	ángulo 3  
	<input name="angulo3"/>
	</br>
	</br>
	<button>Comprobar</button>
	<button href="http://localhost/asir2_seebasbt/triangulos_c.php">Poner todos los valores a 0</button>
	</br>
	</form>

<?php

function triangulo($e,$i,$es,$R,$O,$A){

$e=$R;

$i=$O;

$es=$A;

echo lados($e,$i,$es);
echo angulos($R,$O,$A);	
}

function lados($e,$i,$es){

	if(is_numeric($e) && is_numeric($i) && is_numeric($es) && ($e)>0 && ($i)>0 && ($es)>0){

	if($e==$i && $e==$es){

		$r='Triángulo equilátero ';

	}elseif($e==$i || $e==$es || $i==$es){

		$r='Triángulo isósceles ';

	}else

		$r='Triángulo escaleno ';

	return $r;			
	}

}

function angulos($R,$O,$A){

	

		if(is_numeric($R) && is_numeric($O) && is_numeric($A) && ($R)>0 && ($O)>0 && ($A)){

		if((($R)+($O)+($A))==180){

		if($R==90 || $O==90 || $A==90){

			$r='y rectángulo.';

		}elseif($R>90 || $O>90 || $A>90){

			$r='y obtusángulo.';

		}else

			$r='y acutángulo.';

		return $r;

			

		}else

		echo 'Los ángulos deben de sumar 180º, revisa los datos introducidos.';

		}else

		echo 'Introduce algun valor.';

}

if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){

	

echo triangulo(1,1,1,($_GET['angulo1']),($_GET['angulo2']),($_GET['angulo3']));

	

}else

	

	echo 'Introduce la medida de los angulos del triángulo.';

	echo '<br><br>Vectores de test:<br><br>';

	echo triangulo(1,sqrt(2),1,45,90,45).' ¿isosceles-rectangulo?<br/>';

	echo triangulo(1,sqrt(2),1,45,45,90).' ¿isosceles-rectangulo?<br/>';

	echo triangulo(1,sqrt(2),1,90,45,45).' ¿isosceles-rectangulo?<br/>';

	echo triangulo(1,1,1,60,60,60).' ¿equilátero-acutángulo?<br/>';

	echo triangulo(1,1,1,100,40,40).' ¿isósceles-obtusángulo?<br/>';

?>