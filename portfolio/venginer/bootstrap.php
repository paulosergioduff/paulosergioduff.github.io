<?php
$idvideo = $_GET['v'];

$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <title><?php echo $titletag ; ?></title>

<meta name="description" content="<?php echo $descriptiontag ; ?>">
<meta name="keywords" content="<?php echo $keywordstag ; ?>">
       <meta charset="UTF-8">


 <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

<!-- FORÇAR ROLAGEM -->


.relacionados {margin-right: -400px;}
    </style>
    <link href="Bootstrap,%20from%20Twitter_files/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">

<!-- FACEBOOK META-TAGS -->

<meta property="og:title" content="<?php echo $titletag ; ?>"/>
<meta property="og:image" content="http://i1.ytimg.com/vi/<?php echo $idevideo; ?>/0.jpg"/>
<meta property="og:site_name" content="<?php echo 'http://' . $server . $endereco; ?>"/>
<meta property="og:description" content="<?php echo $descriptiontag ; ?>">

<!-- faceapp  -->

<!-- O jQuery NÃO é necessário para utilização do SDK Javascript do Facebook. Incluí por utilizar em outra parte deste exemplo -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>