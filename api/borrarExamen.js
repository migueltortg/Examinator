var elements = document.getElementsByClassName('borrarExamen');

for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', borrarExamen);
}

function borrarExamen(ev) {
    ev.preventDefault();
    var idExamen=this.parentNode.parentNode.id;
    
    fetch('api/borrarExamen.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"idExamen":idExamen})
      })
      .then(response => response.text())
      .then(data => {
        location.reload();
    });
}