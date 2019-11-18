sebastian barrenechea torres
<a href="192.168.0.89/asir2_matias/asir2.php"
<?php
$dns=[

'192.168.0.64'=>'  Xanders',

'192.168.0.89'=>'  Carlos Matias',

'192.168.0.67'=>'  Jose luis',

	];

$f=fopen('visitastimestamp.txt','a');
fwrite($f, date('Y-m-d H:i:s').($dns[$_SERVER['REMOTE_ADDR']]."\r\n"));
fclose($f);

?>