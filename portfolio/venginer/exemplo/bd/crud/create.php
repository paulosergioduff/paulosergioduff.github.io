<?php

$nomedoarquivo = $_POST['nome'];
$dados =  $_POST['dados'];

    $arquivo = fopen("$nomedoarquivo" . ".txt",'w+');
if ($arquivo) {
	if (!fwrite($arquivo, "

 $dados

")) die('Não foi possível atualizar o arquivo.');
	echo 'Arquivo atualizado com sucesso';
	fclose($arquivo);
        }

?>