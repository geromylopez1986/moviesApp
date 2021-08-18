<!DOCTYPE>

<head>
<title>cuenta de <?php echo $_SESSION['user'];?></title>

  <meta charset="utf-8">


   <link rel="shortcut icon" href="img/usuario.png">



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

 <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>

<style>

    body{
        background-image: url(img/inicio/cargando.gif);
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment:fixed;
</style>

<?php if (isset($_GET['admin'])): ?>
  <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=administrador/peliculas_session">
<?php endif; ?>

<?php if (isset($_GET['user'])): ?>
  <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=usuario/peliculas_session">
<?php endif; ?>

</body>

</div>

<br>
</body>
</html>
