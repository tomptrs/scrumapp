<?php


require_once "db.php";

class Member
{
	private $db;
	
	public function  __construct()
	{
		$this->db = new Databank();		
	}
	
	public function GetTeams()
	{
		$sql = "SELECT * FROM Team";
		$this->db->query($sql);		
		
		$json = array();
		$teller = 0;
		while ($line = $this->db->fetchArray() )
		{
			$json[$teller] = array(	"Id" => $line[0],
									"Name" => $line[1]
									);
			$teller++;
		}
		return $json;
	
	}
	
	public function GetMembers()
	{
		$sql = "SELECT * FROM Member";
		$this->db->query($sql);		
		
		$json = array();
		$teller = 0;
		while ($line = $this->db->fetchArray() )
		{
			$json[$teller] = array(	"Id" => 1,
									"Name" => "Peeters",
									"FirstName" => "Tom",
									"Email" => "tom.peeters@ap.be"
									);
			$teller++;
		}		
			
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