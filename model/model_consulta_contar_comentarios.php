
    <?php
    $sql = " SELECT * FROM comentarios WHERE pelicula_id = '".$_GET['pelicula']."' ";
    $query = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($query);

    $sql = " SELECT * FROM comentariosnotuser WHERE NotUser_id = '".$_GET['pelicula']."' ";
    $query = mysqli_query($mysqli, $sql);
    $count2 = mysqli_num_rows($query);

    $countT = $count + $count2;
    ?>
