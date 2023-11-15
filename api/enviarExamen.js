function enviarExamen(){
    var pregunta=document.getElementsByClassName('pregunta-container');
    var errorId=null;
    for(var i=0;i<pregunta.length;i++){
        if(!sinResponder(pregunta[i]) || dudosa(pregunta[i])){
            if(errorId==null){
                errorId=i;
            }
        }else{
            console.log("DUDOSA O SIN RESPONDER");
        }
    }
    if(errorId==null){
        console.log("ENVIADO");
    }else{
        moverAPregunta(errorId);
    }
}

function moverAPregunta(id){
    var pregunta=document.getElementsByClassName('pregunta-container');
    
    for(var i=0;i<pregunta.length;i++){
        if(id==i){
            pregunta[i].style.display="block";
        }else{
            pregunta[i].style.display="none";
        }
    }
}