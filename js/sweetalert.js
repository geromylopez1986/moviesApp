$(document).ready(function () {
  $("#torrent").on("click", torrent);
  $("#mega").on("click", mega);

  function torrent() {
    Swal.fire({
      title: "Tutorial para descargar la pelicula",
      html:
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/3nZO9yfUB0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
      width: "50%",
      confirmButtonText: "Cerrar",
      footer:
        '<img src="http://localhost/administrador/img/logo/cs.png" alt="" class="tutorialLogo">',
      background: "#000000",
    });
  }

  function mega() {
    Swal.fire({
      title: "Tutorial para descargar la pelicula",
      html:
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/3nZO9yfUB0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
      width: "50%",
      confirmButtonText: "Cerrar",
      footer: '<img src="img/logo/cs.png" alt="" class="tutorialLogo">',
      background: "#000000",
    });
  }
});
