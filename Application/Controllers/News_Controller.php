<?php

	require_once('../Database/Database_Connect.php');
	
	class News
	{
		private $_Database 	= 	null;
		
		public function __construct($key = null)
		{
			try 
			{
				if(!isset($this->_Database)) 
				{
						$_Database = Database::getInstance();
						$this->_Database = $_Database->getConnection();
				}
			}
			catch(Exception $ex) 
			{
				throw new Exception($ex->getMessage());
			}	
		}
		
		public function getNewsList()
		{
			
		}
		
		public function getNews()
		{
			
		}
		
		public function addNews()
		{
			
		}
		
		public function editNews()
		{
			
		}
		
		public function deleteNews()
		{
			
		}
		
		public function getNewsCategoriesList()
		{
			
		}
		
		public function getNewsCategory()
		{
			
		}
		
		public function addNewsCategory()
		{
			
		}
		
		public function editNewsCategory()
		{
			
		}
		
		public function deleteNewsCategory()
		{
			
		}
	}
	
?>