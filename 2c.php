<style>

	div{

		margin:20px;

	}

</style>

<?php

function calcula($a,$b){

	$r=null;

	$r=$r.'<div>';

		$r=$r.'SUMA: '.$a.' + '.$b.' = ';

		$r=$r.($a+$b);

	$r=$r.'</div>';



	$r=$r.'<div>';

		$r=$r.'PRODUCTO: '.$a.' * '.$b.' = ';

		$r=$r.$a*$b;

	$r=$r.'</div>';

	$r=$r.'<div>';

		$r=$r.'COCIENTE: '.$a.' / '.$b.' = ';

		$r=$r.($a/$b);

	$r=$r.'</div>';

	$r=$r.'<div>';

		$r=$r.'RESTA: '.$a.' - '.$b.' = ';

		$r=$r.($a-$b);

	$r=$r.'</div>';

	$r=$r.'<div>...</div>';

	return $r;

}

$s=calcula(25,0);

echo $s;

$s=calcula(60,55);

echo $s;

?>