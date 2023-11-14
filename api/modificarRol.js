var elements = document.getElementsByClassName('modificarRol');

for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', modificarRol);
}

function modificarRol(ev) {
    ev.preventDefault();
    var idUser=this.parentNode.parentNode.id;//PILLAMOS ID USUARIO
    var rol=this.parentNode.parentNode.childNodes[3].childNodes[1].value;//NUEVO ROL
    
    fetch('api/modificarRol.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"idUser":idUser,"rol":rol})
      })
      .then(response => response.text())
      .then(data => {
        location.reload();
    });
}