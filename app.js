   	
     
     	function irParaTopo(){
      	document.getElementById('irPara').innerHTML = '<h1>Ir para:</h1>';
      	window.location.href = "#topo";
      }


      function verProjeto($pagina){
      	$( "#projeto" ).load( "includes/"+$pagina+".html" );
      	document.getElementById('quero').innerHTML = '<center><a class="btn btn-large btn-primary" href="orcamento/index.html" style="margin: 20px;">Quero algo assim</a><a class="btn btn-large btn-warning" href="orcamento/index.html">Quero algo diferente disso</a></center>';
      	irParaTopo();
      }

    