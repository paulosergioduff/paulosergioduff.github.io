<?php

function create()

  {
      $arquivo = fopen("$nomedoarquivo",'w+');
if ($arquivo) {
	if (!fwrite($arquivo, "$dados")) die('Não foi possível atualizar o arquivo.');
	echo 'Arquivo atualizado com sucesso';
	fclose($arquivo);
  }

/*
  
  function read()
  {
   // http://mxmasters.com.br/comunidade/viewtopic.php?f=50&t=2034&sid=9d253ccadb420089d305708dc52a310e#p9811
   // http://www.davidchc.com.br/video-aula/php/busca-no-site-sem-banco-de-dados-com-php/
  }
  
 function update()
 
 {
     // abre o arquivo colocando o ponteiro de escrita no final
$arquivo = fopen("$nomedoarquivo",'r+');
if ($arquivo) {
	while(true) {
		$linha = fgets($arquivo);
		if ($linha==null) break;
		
		// busca na linha atual o conteudo que vai ser alterado
		if(preg_match("$dadoantigo", $linha)) {
			$string .= str_replace("$dadoantigo", "$dadonovo", $linha);
		} else {
			// vai colocando tudo numa nova string
			$string.= $linha;
		}
	}
	// move o ponteiro para o inicio pois o ftruncate() nao fara isso
	rewind($arquivo);
	// truca o arquivo apagando tudo dentro dele
	ftruncate($arquivo, 0);
	// reescreve o conteudo dentro do arquivo
	if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
	echo 'Arquivo atualizado com sucesso';
	fclose($arquivo);
 }
 
function deletar()
 
 {
     // abre o arquivo colocando o ponteiro de escrita no final
$arquivo = fopen("$nomedoarquivo",'r+');
if ($arquivo) {
	while(true) {
		$linha = fgets($arquivo);
		if ($linha==null) break;
		
		// busca na linha atual o conteudo que vai ser alterado
		if(preg_match("$dadoantigo", $linha)) {
			$string .= str_replace("$dadoantigo", "$dadonovo", $linha);
		} else {
			// vai colocando tudo numa nova string
			$string.= $linha;
		}
	}
	// move o ponteiro para o inicio pois o ftruncate() nao fara isso
	rewind($arquivo);
	// truca o arquivo apagando tudo dentro dele
	ftruncate($arquivo, 0);
	// reescreve o conteudo dentro do arquivo
	if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
	echo 'Arquivo atualizado com sucesso';
	fclose($arquivo);
 }

} */

?>