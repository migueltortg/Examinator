document.getElementById('asignarExamen').addEventListener('click', function (ev) {
    ev.preventDefault();
    var idUser=this.parentNode.parentNode.childNodes[1].childNodes[3].value;
    var idExamen=this.parentNode.parentNode.childNodes[3].childNodes[3].value;
    
    fetch('api/asignarExamen.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"idUser":idUser,"idExamen":idExamen})
      })
      .then(response => response.text())
      .then(data => {
        location.reload();
    });
});