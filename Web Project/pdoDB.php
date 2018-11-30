<?php
	
	class database
	{
		public $pdo;

		public function __construct($db)
		{
			$this->pdo = new PDO("mysql:hostname=localhost;dbname=$db",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
		}
		
		public function getRows($query,$arr)
		{
			$stamt = $this->pdo->prepare($query);
			$stamt->execute($arr);
			return $stamt->fetchAll();
		}

		public function getCount($query,$arr)
		{
			$stamt = $this->pdo->prepare($query);
			$stamt->execute($arr);
			return $stamt->rowCount();
		}
	}

	$db = new database("railway");
?>
