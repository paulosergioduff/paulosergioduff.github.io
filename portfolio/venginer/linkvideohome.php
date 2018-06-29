<?php


include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';
?>
</head>
<body>

<?php
include 'navbar.php';

$mes = date("m");
$ano = date("Y");
$dia = date("d");

$hora = date("H");
$minuto = date("i");
$segundo = date("s");

$caminho = 'vdata/classicos/';
$autor = 'Comunidade-BR';

$ide = addslashes (filter_var($_POST['id'] , FILTER_SANITIZE_STRING));
$title = addslashes (filter_var($_POST['title'] , FILTER_SANITIZE_STRING));
$description = addslashes (filter_var($_POST['description'] , FILTER_SANITIZE_STRING));
$keywords = addslashes (filter_var($_POST['keywords'] , FILTER_SANITIZE_STRING));
$linkoriginal = addslashes (filter_var($_POST['videolink'] , FILTER_SANITIZE_STRING));
$idi = '00000000001';

echo "
<textarea rows='16' cols='350'>

<div class='row'>

<div class='span4'>
          <a href=watch?v=$ide&u=$idi&o=h><h4>$title</h4>
          <p><img src='http://img.youtube.com/vi/$ide/default.jpg'></a></p>
          <p><a class='btn' href='#'>Assistir</a></p>
       </div>

</div>
</textarea>
";

@mkdir("vdata/br/classicos/$idei/", 0777); //prepara dir.

#####  GRAVAR XML DO VIDEO ######

$arquivo = fopen("vdata/classicos/$ide" . "00000000001h" . ".xml",'w+');
$aspas = '"';
$um = '1';
$aspassimples = "'";
if ($arquivo) {
	if (!fwrite($arquivo, "<?xml version=$aspas$um.0$aspas?>
<core>
  <sys>
    <idiv>$idi</idiv>
    <idevideo>$ide</idevideo>
    <title>$title</title>
    <author>$autor</author>
    <description>$description</description>
    <keywords>$keywords</keywords>
  </sys>
  <db>
    <type>mysql</type>
    <host>localhost</host>
    <user>quser</user>
    <password>quser</password>
    <database>mukeka</database>
  </db>
</core>")) die('Não foi possível atualizar o arquivo.');
	echo 'Vídeo listado com sucesso...<br>';
	fclose($arquivo);
};

#####  GRAVAR XML DO VIDEO ######


include 'footer.php';
?>









