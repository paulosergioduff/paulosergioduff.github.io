<?php error_reporting(0);

$conecta = mysql_connect("localhost", "u373162197_duffm", "sagazol17") or print (mysql_error()); 
mysql_select_db("u373162197_vengi", $conecta) or print(mysql_error()); 
print "Conexão e Seleção OK!" or die('falha'); 
mysql_close($conecta); 




?>