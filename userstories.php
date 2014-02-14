<?php


require_once "db.php";

class UserStory
{
	private $db;
	
	public function  __construct()
	{
		$this->db = new Databank();		
	}
	
	public function GetStories()
	{
		$sql = "SELECT * FROM UserStory";
		$this->db->query($sql);		
		
		$json = array();
		$teller = 0;
		/*	
Id
Title
Description
StatusId
*/
		while ($line = $this->db->fetchArray() )
		{
			$json[$teller] = array(	"Id" => $line[0],
									"Title" => $line[1],
									"Description" => $line[2],
									"Status" => $line[3]
									);
			$teller++;
		}
		return $json;

	}
	
	public function UpdateUserStory($id,$newStatus)
	{
		/*
			UPDATE  `scrum`.`UserStory` SET  `StatusId` =  '2' WHERE  `UserStory`.`Id` =1;
		*/
		$sql = "update UserStory set StatusId = '" . $newStatus . "' where Id = '" . $id ."'";
		print $sql;
		$this->db->query($sql);
	
	}
	
	public function InsertUserInDB($name)
	{
		//INSERT INTO `gocha`.`User` (`Name`, `ID`) VALUES (\'tom\', NULL);
		//$sql = "insert into User('Name','ID') VALUES ('{$name}',NULL);	
		//$this->db->query($sql);	
	}
	
	
	

}
?>