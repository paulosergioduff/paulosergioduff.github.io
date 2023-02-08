/*   	
     
     	function irParaTopo(){
      	document.getElementById('irPara').innerHTML = '<h1>Ir para:</h1>';
      	window.location.href = "#topo";
      }*/


      function verProjeto($pagina){
      	$( "#projeto" ).load( "includes/"+$pagina+".html" );
      	document.getElementById('quero').innerHTML = '<center><a class="btn btn-large btn-primary" href="orcamento/index.html" style="margin: 20px;">Quero algo assim</a><a class="btn btn-large btn-warning" href="orcamento/index.html">Quero algo diferente disso</a></center>';
      	//irParaTopo();
      }

      function carregaNavbar(){
         $( "#recebeNavbar" ).load( "includes/navbar.html" );
         //irParaTopo();
      }

      function carregaFooter(){
         $( "#recebeFooter" ).load( "includes/footer.html" );
        // //irParaTopo();
        //alert('ola function');
      }

      function carregaPagina($pagina){
         $( "#conteudo" ).load( $pagina );
         //document.getElementById('quero').innerHTML = '<center><a class="btn btn-large btn-primary" href="orcamento/index.html" style="margin: 20px;">Quero algo assim</a><a class="btn btn-large btn-warning" href="orcamento/index.html">Quero algo diferente disso</a></center>';
      }

      function carregaModulo($pagina, $alvo){
         $( "#"+$alvo ).load( $pagina );
         document.getElementById("projeto").style.display = 'none';
         document.getElementById("recebeFooter").style.position = 'block';
         //document.getElementById('quero').innerHTML = '<center><a class="btn btn-large btn-primary" href="orcamento/index.html" style="margin: 20px;">Quero algo assim</a><a class="btn btn-large btn-warning" href="orcamento/index.html">Quero algo diferente disso</a></center>';
      }

carregaNavbar();
carregaFooter();

    