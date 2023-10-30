window.addEventListener("load", function(){
    var btnComenzar=document.getElementById("comenzar");
    var divExamen=document.getElementById("examen");
    btnComenzar.addEventListener("click", comenzar);

    function comenzar(){
        fetch("../interfaz/pregunta.html")
        .then(x=>x.text())
        .then(y=>{
            var contenedor=document.createElement("div");
            contenedor.innerHTML=y;
            var pregunta = contenedor;
            fetch("../servidor/preguntas.json")
            .then(x=>x.json())
            .then(y=>{
                for(let i=0;i<y.length;i++){
                    var pregAux=pregunta.cloneNode(true);
                    pregAux.getElementsByClassName("numero")[0].innerHTML=y[i].numero;
                    pregAux.getElementsByClassName("respuesta1")[0].innerHTML=y[i].respuesta1;
                    pregAux.getElementsByClassName("respuesta2")[0].innerHTML=y[i].respuesta2;
                    pregAux.getElementsByClassName("respuesta3")[0].innerHTML=y[i].respuesta3;

                    pregAux.getElementsByClassName("descripcion")[0].innerHTML=y[i].descripcion;
                  divExamen.appendChild(pregAux);
                }
            })


        })
    }
})