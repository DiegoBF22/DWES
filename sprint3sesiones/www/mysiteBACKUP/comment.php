<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
    <body>
        <?php
            $juego_id = $_POST['juego_id'];
            $comentario = $_POST['new_comment'];

	    session_start();
	    $user_id;
	    if (!empty($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	    }

            $query = "INSERT INTO tComentarios(comentario, juego_id, usuario_id, fechaComentario) values ('".$comentario."',".$juego_id.", ".$user_id.", now())";

            mysqli_query($db, $query) or die('Error');

            echo "<p>Nuevo comentario ";
            echo mysqli_insert_id($db);
            echo " añadido</p>";

            echo "<a href='/detail.php?id=".$juego_id."'>Volver</a>";
            mysqli_close($db);
        ?>
    </body>
</html>
