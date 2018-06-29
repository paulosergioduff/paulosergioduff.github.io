<?php
$idvideoget = $_GET['v'];
$idvideouser = $_GET['u'];
$origem = $_GET['o'];
$localvideo = $idvideoget . $idvideouser . $origem;

//-79uIRQiAFM00000000001

$obj = simplexml_load_file("vdata/classicos/$localvideo.xml");

$idiv = $obj->sys->idiv;
$idevideo = $obj->sys->idevideo;
$author = $obj->sys->author;
$titletag = $obj->sys->title;
$descriptiontag = $obj->sys->description;
$keywordstag = $obj->sys->keywords;

/*
echo "ID interno: $idiv<br>";
echo "ID externo: $idevideo<br>";
echo "Autor: $author<br>";
echo "Título: $titletag<br>";
echo "Descrição: $descriptiontag<br>";
echo "Palavras chave: $keywordstag<br>"; */

?>
