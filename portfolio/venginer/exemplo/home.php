<?php

function idiomaUsuario(){
	$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
	return $idioma;	
}
 
function redirecionaPaginaIdioma($idioma){
	switch($idioma){
		case 'pt': //Caso seja português
			header('Location: http://localhost/pt/home.php');
			break;
		case 'es': //Caso seja espanhol
			header('Location: http://localhost/pt/home.php');
			break;
                case 'en': //Caso seja espanhol
			header('Location: http://localhost/pt/home.php');
			break;
		default:
			header('Location: http://localhost/pt/home.php');
			break;
	}
}
idiomaUsuario();
redirecionaPaginaIdioma($idioma);


?>