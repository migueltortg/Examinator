function crearPregunta(boton,ev) {
    ev.preventDefault();
    
    var enunciado=boton.parentNode.parentNode.childNodes[1].childNodes[3].value;
    var categoria=boton.parentNode.parentNode.childNodes[5].childNodes[3].value;
    var dificultad=boton.parentNode.parentNode.childNodes[7].childNodes[3].value;
    var respuestaCorrecta=boton.parentNode.parentNode.childNodes[9].childNodes[3].value;

    var respuesta1=boton.parentNode.parentNode.childNodes[3].childNodes[1].childNodes[3].value;
    var respuesta2=boton.parentNode.parentNode.childNodes[3].childNodes[3].childNodes[3].value;
    var respuesta3=boton.parentNode.parentNode.childNodes[3].childNodes[5].childNodes[3].value;

    var arrayRespuestas=new Array();
    arrayRespuestas.push(respuesta1);
    arrayRespuestas.push(respuesta2);
    arrayRespuestas.push(respuesta3);

    fetch('api/crearPregunta.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"enunciado":enunciado,"respuesta":arrayRespuestas,"categoria":categoria,"dificultad":dificultad,"respuestaCorrecta":respuestaCorrecta})
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
    });
}