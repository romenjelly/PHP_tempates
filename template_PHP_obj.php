<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title> </title>
	</head>
	
	<body>
		<?php
			function loadClass($class) {
				require_once $class.".class.php";
			}
			spl_autoload_register("loadClass");
			
			$template = new Template;
		?>
	</body>
</html>