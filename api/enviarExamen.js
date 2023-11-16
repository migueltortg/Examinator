function enviarExamen(boton){
    var pregunta=document.getElementsByClassName('pregunta-container');
    var errorId=null;
    for(var i=0;i<pregunta.length;i++){
        if(!sinResponder(pregunta[i]) || dudosa(pregunta[i])){
            if(errorId==null){
                errorId=i;
            }
        }
    }
    if(errorId==null){
        //API ENVIAR EXAMEN
        var idExamen=boton.parentNode.parentNode.parentNode.id;
        var divRespuestas=boton.parentNode.parentNode.parentNode.childNodes;
        var respuestas=new Array();
        for(var i=0;i<divRespuestas.length-1;i++){
            var respuesta=new Array();
            for(var j=1;j<6;j=j+2){
                if(divRespuestas[i].childNodes[3].childNodes[j].childNodes[1].checked){
                    const respuesta = {
                        idRespuesta: divRespuestas[i].id,
                        respuesta: divRespuestas[i].childNodes[3].childNodes[j].childNodes[1].value
                      };
                    respuestas.push(respuesta);
                }
            }
        }

        respuestas=JSON.stringify(respuestas);

        fetch('api/enviarExamen.php', {
             method: 'POST',
             headers: {
             'Content-Type': 'application/json'
        },
        body: JSON.stringify({"idExamen":idExamen,"respuestas":respuestas})//PASAMOS EL JSON
        })
        .then(response => response.text())
        .then(data => {
            location.reload();
        }); 
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