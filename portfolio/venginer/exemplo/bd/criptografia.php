<html>
<head>
<title>Online PHP Script Execution</title>


<meta charset="utf-8"> 
</head>
<body>

<?php

$string = 'O rato reu a ropa do rei de Roma';
$codificada = md5($string);
echo "Resultado da codificação usando md5: " . $codificada . '<br>';
// 54cf74d1acdb4037ab956c269b63c8ac

$string = 'O rato reu a ropa do rei de Roma';
$codificada = sha1($string);
echo "Resultado da codificação usando sha1: " . $codificada . '<br>';
// b186b709f7cf5a1d98d413379a66e511df8d59a4

$string = 'O rato reu a ropa do rei de Roma';

$codificada = base64_encode($string);

echo "Resultado da codificação usando base64: " . $codificada;
// TyByYXRvIHJldSBhIHJvcGEgZG8gcmVpIGRlIFJvbWE=

echo "

";

$original = base64_decode($codificada);

echo "<br>Resultado da decodificação usando base64: " . $original;
// O rato reu a ropa do rei de Roma

// Note que $original vai ser idêntica a $string

?>