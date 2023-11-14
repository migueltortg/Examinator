var elements = document.getElementsByClassName('borrarUser');

for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', borrarUser);
}

function borrarUser(ev) {
    ev.preventDefault();
    var idUser=this.parentNode.parentNode.id;//PILLAMOS ID USUARIO
    
    fetch('api/borrarUser.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"idUser":idUser})
      })
      .then(response => response.text())
      .then(data => {
        location.reload();
    });
}