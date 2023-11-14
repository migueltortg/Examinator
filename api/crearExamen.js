function generarExamen(boton,ev) {
    //var idUser=2;//ARRAY CON ID DE PREGUNTAS QUE SI METEMOS
    ev.preventDefault();
    var arrayCheckBox=document.getElementsByTagName('input');
    var idPreguntas=new Array();git
    for(var i=0;i<arrayCheckBox.length;i++){
        if(arrayCheckBox[i].checked){
            idPreguntas.push(arrayCheckBox[i].id);
        }
    }
    
    fetch('api/crearExamen.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"idPreguntas":idPreguntas})
      })
      .then(response => response.text())
      .then(data => {
        location.reload();
    });
}