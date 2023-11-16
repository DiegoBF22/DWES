<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    if (empty($nombre) || empty($apellidos) || empty($email) || empty($contrasena) || empty($contrasena2)) {die('Has dejado uno o más campos vacios');}

    if ($contrasena != $contrasena2 ) { die('Las contraseñas no son iguales'); }
    $contrasena = password_hash($contrasena,PASSWORD_DEFAULT);

    $query2 = 'SELECT email FROM tUsuarios';
    $result2 = mysqli_query($db, $query2) or die('Query error'); 
    while ($row = mysqli_fetch_array($result2)) { 
        if ($email == $row[0]) { die('El correo indicado ya está en uso'); }
    }
    
    $query = $db -> prepare("INSERT INTO tUsuarios(nombre,apellidos,email,contraseña) VALUES (?,?,?,?)");
    $query -> bind_param("ssss",$nombre,$apellidos,$email,$contrasena);
    $query -> execute()
    ;
    echo "<h1>USUARIO REGISTRADO</h1>";
    echo "<a href=/main.php>Volver al principio</a>";
    $query -> close();
    mysqli_close($db);
?>
