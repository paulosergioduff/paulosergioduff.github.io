         function consultar(){
         	var orcamento = document.getElementById('resultado').innerHTML;    	
         	var hora = 5.29;
         	var tipoPrazo = document.getElementById('tipoPrazo').innerHTML;
         	var prazo = document.getElementById('prazo').innerHTML;
         	var prazoTotal = prazo * tipoPrazo;

         	var valorDaHora = orcamento / prazoTotal;

         	console.log(prazoTotal);
         	console.log(valorDaHora);
         	console.log(hora);
         
         	if (valorDaHora < hora) {
         		alert('Sua proposta foi reprovada pelo sistema! Valor:'+valorDaHora);
         	}
         		else{
         			alert('Sua proposta foi pré-provada pelo sistema! Valor:'+valorDaHora);
         		}
         }
         