<?php

	chdir(__DIR__);
	require_once('../../Config/Database_Config.php');

	class Database
	{
		private $_connection;
		private static $_instance;
 
		/*
		Get an instance of the Database
		@return Instance
		*/
		public static function getInstance() {
			if(!self::$_instance) { // If no instance then make one
				self::$_instance = new self();
			}
			return self::$_instance;
		}
	 
		// Constructor
		private function __construct() 
		{
			Database_Config::transmit();
			try 
			{
				$this->_connection = new PDO("mysql:host=".Database_Config::$dbhostname.";dbname=".Database_Config::$dbdatabase, Database_Config::$dbusername, Database_Config::$dbpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				
				$this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} 
			catch (Exception $e) 
			{
				die($e->getMessage());
			} 
			catch (Exception $e) 
			{
				throw new Exception('Nu s-a putut realiza conexiunea la baza de date!');
			}			
		}
	 
		// Magic method clone is empty to prevent duplication of connection
		private function __clone() { }
	 
		// Get mysqli connection
		public function getConnection() 
		{
			return $this->_connection;
		}
	}

?>