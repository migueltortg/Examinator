document.getElementById('generarExamenTeacher').addEventListener('click', function (ev) {
    ev.preventDefault();
    var dificultad=this.parentNode.parentNode.childNodes[1].childNodes[3].value;
    var categoria=this.parentNode.parentNode.childNodes[3].childNodes[3].value;
    
    fetch('api/generarExamenTeacher.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({"dificultad":dificultad,"categoria":categoria})
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
        //location.reload();
    });
});