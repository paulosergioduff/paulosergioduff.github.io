<?php

include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';

?>

</head>

</body>
<?php include 'navbar.php'; ?>
<hr>
<center>
<form action="captaghome" method="POST">

Link do video:<input type="text" name="videolink" maxlength="43"><br>
<input type="submit" value="Verificar">

</form>

</center>


<?php include 'footer.php'; ?>



