<?php
$a = 0;
include 'contador.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
   }else{
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>
<html>
   <head>Contador de Visitas</head>
<body>

<?php
echo "<br>$a $counte views";
?>  



<?php $a=0; ?>

