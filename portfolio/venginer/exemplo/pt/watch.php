<?php
include 'pegaxml.class.php';

$idvideo = $_GET['v'];
$idvideou = $_GET['u'];
$origem = $_GET['o'];

include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';


?>

</head>

</body>

<?php include 'navbar.php'; ?>
<hr>
<?
$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];
?>
<center>
<?php include 'app/youtube.php';?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Retangulo teste -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8136135240991918"
     data-ad-slot="7087200190"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>

</center>
<?php include 'comentario.php'; ?>
<center>
<i><?php echo "<h1>$titletag<br></h1>"; ?></i><br>
<?php echo "$descriptiontag<br>"; ?>

<?php echo "<img title='$titletag' alt='$titletag' src=http://i1.ytimg.com/vi/$idevideo/0.jpg?ori=afro-ninja><br>"; ?>
<br>
</center>
      <hr>
<?php include 'relacionados.php'; ?>
      <hr>
<?php include 'footer.php'; ?>