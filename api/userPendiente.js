function aceptar(boton){
  var idUser=boton.parentNode.parentNode.id;
  var rol=boton.parentNode.parentNode.childNodes[3].childNodes[1].value;
  console.log(rol);
  fetch('api/userPendienteAceptar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
  },
  body: JSON.stringify({"idUser":idUser,"rol":rol})//Aqui se pasa la id.
  })
  .then(response => response.text())
  .then(data => {
    location.reload();
  });
}

function rechazar(boton){
  var idUser=boton.parentNode.parentNode.id;
  var rol=boton.parentNode.parentNode.childNodes[3].childNodes[1].value;
  console.log(rol);
  fetch('api/userPendienteRechazar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
  },
  body: JSON.stringify({"idUser":idUser,"rol":rol})//Aqui se pasa la id.
  })
  .then(response => response.text())
  .then(data => {
    location.reload();
  });
}