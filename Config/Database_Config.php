<?php

	class Database_Config
	{
		public static $dbhostname = null;
		public static $dbusername = null;
		public static $dbpassword = null;
		public static $dbdatabase = null;
		private static $initialized = false;
		
		private static function initialize()
		{
			if(self::$initialized) return;
			self::$dbhostname = 'localhost';
			self::$dbusername = 'hellgami_website';
			self::$dbpassword = 'o3I4VGOlc6rOcEPKcT';
			self::$dbdatabase = 'hellgami_website';
			self::$initialized = true;
		}
		
		public static function transmit()
		{
			self::initialize();
		}
	}