<?php
	/* Database constants */
	define("DB_NAME", "test");
	define("DB_ADDR", "localhost");
	define("DB_PORT", "port_MySQL");
	define("DB_LGIN", "root");
	define("DB_PSWD", "root");
	
	/* View manipulation constants */
	define("VIEW_FOLDER", "views");
	
	
	/* Database-related functions */
	function getDatabase() {
		try {
			$database = new PDO('mysql:host='.DB_ADDR.':'.DB_PORT.'; dbname='.DB_NAME.'; charset=utf8;', DB_LGIN, DB_PSWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} catch(Exception $exception) {
			die('SQL/PDO error: '.$exception->getMessage());
		}
		return $database;
	}
	
	function query($database, $query) {
		$request = $database->query($query);
		return $request->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function queryPrepared($database, $query, $values) {
		$request = $database->prepare($query);
		$request->execute($values);
		return $request->fetchAll(PDO::FETCH_ASSOC);
	}
	
	/* View-related fucntions */
	function getView($viewName) {
		require(VIEW_FOLDER.'/'.$viewName.'.php');
	}
?>