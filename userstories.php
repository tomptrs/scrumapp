<?php


require_once "db.php";

class UserStory
{
	private $db;
	
	public function  __construct()
	{
		$this->db = new Databank();		
	}
	
	public function GetData()
	{
		$sql = "SELECT * FROM UserStory";
		$this->db->query($sql);		
		
		$json = array();
		while ($line = $this->db->fetchArray() )
		{
			$json[] = $line;
			
		}
			//print $json[0];
			return json_encode($json);	

	}
	
	public function InsertUserInDB($name)
	{
		//INSERT INTO `gocha`.`User` (`Name`, `ID`) VALUES (\'tom\', NULL);
		$sql = "insert into User('Name','ID') VALUES ('{$name}',NULL);	
		$this->db->query($sql);	
	}
	
	
	

}
?>