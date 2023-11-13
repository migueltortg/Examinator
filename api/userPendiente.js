function aceptar(boton){
  var idUser=boton.parentNode.parentNode.id;
  fetch('api/userPendiente.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
  },
  body: JSON.stringify({"idUser":idUser})//Aqui se pasa la id.
  })
  .then(response => response.text())
  .then(data => {
    console.log("OK");//Mensaje de todo correcto,sin mas importancia.
  });
}