<?php

$arquivo = fopen("autor.xml",'w+');

$aspassimples = "'";
if ($arquivo) {
	if (!fwrite($arquivo, '

<?xml version="1.0"?>
<core>
  <video>
    <idi>ide&idi=0001</idi>
    <ide>ide</ide>
    <author>autor</author>
    <embed>anderson@duodraco.com</email>
    <title>title</title>
    <description>description</description>
    <keywords>keywords</keywords>
    <data>anderson at duodraco dot com</data>

    
    <futere></future>
  </video>
  <opcoes>
    <type>youtube</type>
    <host>localhost</host>
    <user>quser</user>
    <password>quser</password>
    <database>mukeka</database>
  </opcoes>
</core>



	
	')) die('Não foi possível atualizar o arquivo.');
	echo 'Vídeo listado com sucesso...<br>';
	fclose($arquivo);
};

