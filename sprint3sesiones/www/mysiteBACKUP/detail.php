<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<body>
		<div align="center">
		<?php
			if (!isset($_GET['id'])) {
				die('No se ha especificado un juego');
			}
			$juego_id = $_GET['id'];
			$query = 'SELECT * FROM tJuegos WHERE id='.$juego_id;
			$result = mysqli_query($db, $query) or die('Query error');
			$only_row = mysqli_fetch_array($result);
			echo '<h1>'.$only_row[1].'</h1>';
			echo '<img src= "';
			echo $only_row[2];
			echo '"width= "500"px align="center">';
		?>
		</div>
		<h3>Comentarios:</h3>
		<ul>
			<?php
				$query2 = 'SELECT * FROM tComentarios WHERE juego_id='.$juego_id;
				$result2 = mysqli_query($db, $query2) or die('Query error');
				while ($row = mysqli_fetch_array($result2)) {
					echo '<li>'.$row[1]. ' | '  .$row[4].'</li>';
				}
				mysqli_close($db);
			?>
		</ul>
		<p> Deja un nuevo comentario: </p>
		<form action="/comment.php" method="post">
			<textarea rows="4" cols="50" name="new_comment"></textarea><br>
			<input type="hidden" name="juego_id" value="<?php echo $juego_id; ?>">
			<input type="submit" value="Comentar">
		</form>
		<br>
		<a href="/register.html">Registrate en la página</a>
		<a href="/login.html">Inicia sesión en la página</a>
		<a href="/logout.php">Cierra sesión en la página</a>
		<a href="/changePasswd.html">Cambia la contraseña</a>
	</body>
</html>
