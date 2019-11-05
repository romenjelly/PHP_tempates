<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title> </title>
	</head>
	
	<body>
		<?php
			define("DB_NAME", "test");
			define("DB_ADDR", "localhost");
			define("DB_PORT", "port_MySQL");
			define("DB_LGIN", "root");
			define("DB_PSWD", "root");
			try {
				$database = new PDO('mysql:host='.DB_ADDR.':'.DB_PORT.'; dbname='.DB_NAME.'; charset=utf8;', DB_LGIN, DB_PSWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} catch(Exception $e) {
				die('SQL/PDO error: '.$e->getMessage());
			}
			
			/*
			// Prepared request (more robust)
			$request = $database->prepare("SELECT * FROM table WHERE element=?");
			$request->execute(array($var));
			*/
			
			// Direct request (less secure)
			$request = $database->query("SELECT * FROM table");
			
			
			
			$data = $request->fetchAll(PDO::FETCH_ASSOC);          // Fetches all, but can timeout or overload RAM

			/*
			// Or
			while ($data = $request->fetch(PDO::FETCH_ASSOC)) {};  // Only fetches an associative array, one item at a time
			$request->closeCursor();                               // In case not all data is fetched
	
			// Or
			foreach ($request as $val) {
				//do stuff
			}
			*/
		?>
	</body>
</html>