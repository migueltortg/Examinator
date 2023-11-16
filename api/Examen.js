var elements = document.getElementsByClassName('hacerExamen');

for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', hacerExamen);
}

function hacerExamen(ev) {
    ev.preventDefault();
    var idExamen=this.id;//ID del examen a hacer
    
    fetch('vistas/main/examen/pregunta.html')
        .then(x=>x.text())
        .then(texto => {
            var almacen=document.createElement("div");
            almacen.innerHTML=texto;
            var modeloPregunta=almacen.querySelector(".pregunta-container");
            fetch('api/Examen.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({"idExamen":idExamen})
                })
            .then(x => x.json())
            .then(y=>{
                var header = document.getElementsByTagName("header");
                document.body.removeChild(header[0]);
                header=document.createElement("header");
                header.id="headerPregunta";
                document.body.appendChild(header);

                for(var i=0;i<y.length;i++){
                    var btnHeader =generarHeader(y[i],i+1);
                    header.appendChild(btnHeader);
                }

                var main = document.getElementsByTagName("main");
                document.body.removeChild(main[0]);
                main=document.createElement("main");
                main.setAttribute("class", "mainPregunta");
                main.id=idExamen;
                document.body.appendChild(main);

                for(var i=0;i<y.length;i++){
                    var plantilla=modeloPregunta.cloneNode(true);
                    generarPregunta(plantilla,y[i]);
                    plantilla.childNodes[7].childNodes[3].setAttribute("onclick", "pasarPregunta(this.parentNode.parentNode.id)");
                    if(y.length-1==i){
                        plantilla.childNodes[7].childNodes[3].setAttribute("onclick", "enviarExamen(this)");
                        plantilla.childNodes[7].childNodes[3].innerHTML="Enviar";
                    }
                    main.appendChild(plantilla);
                }
                
                var scriptEnviar = document.createElement("script");
                scriptEnviar.src="api/enviarExamen.js";
                main.appendChild(scriptEnviar);
                
                empezarExamen(document.getElementsByClassName("pregunta-container"));
            });
        })
}

function generarHeader(pregunta,i){
    var btn = document.createElement("button");
    btn.innerHTML=i;
    btn.id="btn"+pregunta.id;
    return btn;
}

function generarPregunta(plantilla,pregunta){
    plantilla.setAttribute("id", pregunta.id);

    plantilla.childNodes[1].childNodes[1].innerHTML=pregunta.enunciado;
    
    plantilla.childNodes[3].childNodes[1].childNodes[3].innerHTML=pregunta.respuestas[0].ValorRespuesta+". "+pregunta.respuestas[0].Enunciado;
    plantilla.childNodes[3].childNodes[3].childNodes[3].innerHTML=pregunta.respuestas[1].ValorRespuesta+". "+pregunta.respuestas[1].Enunciado;
    plantilla.childNodes[3].childNodes[5].childNodes[3].innerHTML=pregunta.respuestas[2].ValorRespuesta+". "+pregunta.respuestas[2].Enunciado;
    plantilla.childNodes[3].childNodes[1].childNodes[1].name=pregunta.id;
    plantilla.childNodes[3].childNodes[3].childNodes[1].name=pregunta.id;
    plantilla.childNodes[3].childNodes[5].childNodes[1].name=pregunta.id;
}

function empezarExamen(preguntas){
    var recuadrosPreguntas=document.getElementById('headerPregunta').childNodes;

    for(var i=1;i<preguntas.length;i++){
        preguntas[i].style.display="none";
        recuadrosPreguntas[i].style.backgroundColor="#58AFB8";
    }
}

function sinResponder(pregunta){
    var prueba=pregunta.childNodes[3];
    var respuestas=prueba.getElementsByClassName("respuesta");
    var clickeado=false;
    for(var i=0;i<3;i++){
        if(respuestas[i].childNodes[1].checked){
            clickeado=true;
        }
    }
    if(clickeado==true){
        return true;
    }else{
        return false;
    }
}



function pasarPregunta(id){
    var preguntas=document.getElementsByClassName("pregunta-container");
    var recuadrosPreguntas=document.getElementById('headerPregunta').childNodes;

    for(var i=0;i<preguntas.length;i++){
        if(id==preguntas[i].id){
            preguntas[i+1].style.display="block";
            preguntas[i].style.display="none";
            if(sinResponder(preguntas[i])){//SI HAY ALGO CHECKEADO SE QUEDA EN NARANJA
                recuadrosPreguntas[i].style.backgroundColor="orange";
            }else{
                if(dudosa(preguntas[i])){
                    recuadrosPreguntas[i].style.backgroundColor="yellow";//COLOR NORMAL
                }else{
                    recuadrosPreguntas[i].style.backgroundColor="#58AFB8";//COLOR NORMAL
                }
            }

            if(!sinResponder(preguntas[i+1])){
                if(dudosa(preguntas[i+1])){
                    recuadrosPreguntas[i+1].style.backgroundColor="yellow";//COLOR POSICION
                }else{
                    recuadrosPreguntas[i+1].style.backgroundColor="#4edcec";//COLOR POSICION
                }
            }else{
                recuadrosPreguntas[i+1].style.backgroundColor="orange";
            }
        }
    }
}

function dudosa(pregunta){
    return pregunta.childNodes[5].childNodes[1].checked;
}

function retrocederPregunta(id){
    var preguntas=document.getElementsByClassName("pregunta-container");
    var recuadrosPreguntas=document.getElementById('headerPregunta').childNodes;

    for(var i=0;i<preguntas.length;i++){
        if(id==preguntas[i].id){
            preguntas[i-1].style.display="block";
            preguntas[i].style.display="none";
            if(sinResponder(preguntas[i])){//SI HAY ALGO CHECKEADO SE QUEDA EN NARANJA
                recuadrosPreguntas[i].style.backgroundColor="orange";
            }else{
                if(dudosa(preguntas[i])){
                    recuadrosPreguntas[i].style.backgroundColor="yellow";//COLOR NORMAL
                }else{
                    recuadrosPreguntas[i].style.backgroundColor="#58AFB8";//COLOR NORMAL
                }
            }
            if(!sinResponder(preguntas[i-1])){
                if(dudosa(preguntas[i-1])){
                    recuadrosPreguntas[i-1].style.backgroundColor="yellow";//COLOR POSICION
                }else{
                    recuadrosPreguntas[i-1].style.backgroundColor="#4edcec";//COLOR POSICION
                }
            }else{
                recuadrosPreguntas[i-1].style.backgroundColor="orange";
            }
        }
    }
}