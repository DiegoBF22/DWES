<html>
	<body>
		<h1>Jubilación</h1>
		<?php
		  function edad_en_17_años($edad) {
			return $edad + 17;
		  }
		  if (edad_en_17_años($_GET["edad"]) > 65) {
			echo "En 10 años tendrás edad de jubilación";
		  } else {
			echo "!Disfruta de tu tiempo!";
		  }
		?>
	</body>
</html>
