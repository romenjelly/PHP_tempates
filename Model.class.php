<?php
	abstract class Model {
		protected $_database;
		
		public function __construct($database = null) {
			if ($database instanceof PDO) {
				$this->_database = $database;
			} else if (is_array($database)) {
				$db_addr = null;
				$db_port = null;
				$db_name = null;
				$db_lgin = null;
				$db_pswd = null;
				if (array_keys($database) !== range(0, count($database) - 1)) {
					// Is associative array
					$db_addr = $database["address"];
					$db_port = $database["port"];
					$db_name = $database["name"];
					$db_lgin = $database["login"];
					$db_pswd = $database["password"];
				} else {
					// Is sequential array
					$db_addr = $database[0];
					$db_port = $database[1];
					$db_name = $database[2];
					$db_lgin = $database[3];
					$db_pswd = $database[4];
				
				}
				try {
					$this->_database = new PDO('mysql:host='.$db_addr.':'.$db_port.'; dbname='.$db_name.'; charset=utf8;', $db_lgin, $db_pswd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				} catch(Exception $e) {
					die('SQL/PDO error: '.$e->getMessage());
				}
			} else {
				die("Unable to establish valid database.");
			}
		}
		
		protected function SQLrequest(string $request, array $arguments = null) {
			if ($arguments != null) {
				$request = $this->_database->prepare($request);
				$request->execute($arguments);
			} else {
				$request = $this->_database->query($request);
			}
			return $request->$data = $request->fetchAll(PDO::FETCH_ASSOC);
		}
	}