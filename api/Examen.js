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
                main.id="mainPregunta";
                document.body.appendChild(main);

                for(var i=0;i<y.length;i++){
                    var plantilla=modeloPregunta.cloneNode(true);
                    generarPregunta(plantilla,y[i]);
                    main.appendChild(plantilla);
                }
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
    plantilla.id=pregunta.id;

    plantilla.childNodes[1].childNodes[1].innerHTML=pregunta.enunciado;
    
    plantilla.childNodes[3].childNodes[1].childNodes[3].innerHTML=pregunta.respuestas[0].ValorRespuesta+". "+pregunta.respuestas[0].Enunciado;
    plantilla.childNodes[3].childNodes[3].childNodes[3].innerHTML=pregunta.respuestas[1].ValorRespuesta+". "+pregunta.respuestas[1].Enunciado;
    plantilla.childNodes[3].childNodes[5].childNodes[3].innerHTML=pregunta.respuestas[2].ValorRespuesta+". "+pregunta.respuestas[2].Enunciado;
}