<?php


require_once "db.php";

class Iteration
{
	private $db;
	
	public function  __construct()
	{
		//$this->db = new Databank();		
	}
	
	public function GetData()
	{
		//$sql = "SELECT * FROM Member";
		//$this->db->query($sql);		
		
		$json = array();
		$teller = 0;
		//while ($line = $this->db->fetchArray() )
		//{
			$json[$teller] = array(	"Id" => 1,
									"Name" => "Sprint 1",
									
									);
			$teller++;
			$json[$teller] = array(	"Id" => 2,
									"Name" => "Sprint 2",
									
									);
		
			
		//}
		
		
		
	
	return $json;
	}
	
	public function InsertUserInDB($name)
	{
		//INSERT INTO `gocha`.`User` (`Name`, `ID`) VALUES (\'tom\', NULL);
		//$sql = "insert into User('Name','ID') VALUES ('{$name}',NULL);	
		//$this->db->query($sql);	
	}
	
	
	

}
?>