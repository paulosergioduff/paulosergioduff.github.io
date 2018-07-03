var avancar = 0;
var alvo   = "objeto"+avancar;
var objeto = document.getElementById(alvo);

window.onload = function(){
          
        	document.getElementById("fadeIn").onclick = function(){
                 	fadeIn(objeto,1);
        	}




        	document.getElementById("fadeOut").onclick = function(){
                 	fadeOut(objeto,1);
        	}
}

function reload(){
if (avancar > 3) {
  avancar = 3;       // Essa condicional elimita um bug que ainda vou resolver
}

if (avancar < 0) {
  avancar = 0;
}
        var alvo   = "objeto"+avancar;
        var objeto = document.getElementById(alvo);
          
          document.getElementById("fadeIn").onclick = function(){
                  fadeIn(objeto,1);
          }




          document.getElementById("fadeOut").onclick = function(){
                  fadeOut(objeto,1);
          }
}




function fadeIn(element,time){
        	processa(element,time,0,100);
          avancar++;
          reload();
}



function fadeOut(element,time){
        	processa(element,time,100,0);
          avancar--;
          reload();
}



function processa(element,time,initial,end){
        	if(initial == 0){
                 	increment = 2;
                 	element.style.display = "block";
        	}else {
                 	increment = -2;
        	}



        	opc = initial;



        	intervalo = setInterval(function(){
                 	if((opc == end)){
                              if(end == 0){
                                             	element.style.display = "none";
                                              
                              }
                              clearInterval(intervalo);
                 	}else {
                              opc += increment;
                              element.style.opacity = opc/100;
                              element.style.filter = "alpha(opacity="+opc+")";
                             
                 	}
        	},time * 10);
          
            	}
