   	
     
     	function irParaTopo(){
      	document.getElementById('irPara').innerHTML = '<h1>Ir para:</h1>';
      	window.location.href = "#topo";
      }


      function verProjeto($pagina){
      	$( "#projeto" ).load( "includes/"+$pagina+".html" );
      	irParaTopo();
      }

    