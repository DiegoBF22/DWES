<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('fail');
?>
<html>
	<head>
		<style>
			thead{
				font-weight: bolder;
				font-size: 25px;
				line-height: 50px;
			}
			tbody{
				font-size: 18px;
				line-height: 50px;
			}
		</style>
	</head>
	<body align='center'>
	   <h1>Conexión establecida</h1>
	   <table border='5'>
		<thead>
			<tr>
			   <th>Nombre</th>
			   <th>Imagen</th>
			   <th>PEGI</th>
			   <th>Lanzamiento</th>
			</tr>
		</thead>
		<tbody align='center'>
		   <?php
			$query = 'SELECT * FROM tJuegos';
			$result = mysqli_query($db, $query) or die('Query error');
			while ($row = mysqli_fetch_array($result)) {
			    	echo '<tr>';
				echo '<td>';
				echo $row[1];
				echo '</td>';
				echo '<td>';
				echo '<img src= "';
				echo $row[2];
				echo '" width="150px">';
				echo '</td>';
				echo '<td>';
				echo $row[3];
				echo '</td>';
				echo '<td>';
				echo $row[4];
				echo '</td>';
			}
	   	    ?>
		</tbody>
	</body>
</html>
