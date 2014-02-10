<?php


require_once "db.php";

class Member
{
	private $db;
	
	public function  __construct()
	{
		$this->db = new Databank();		
	}
	
	public function GetData()
	{
		$sql = "SELECT * FROM Member";
		$this->db->query($sql);		
		
		$json = array();
		
		while ($line = $this->db->fetchArray() )
		{
		print $line[0];
//		print ' <a href="#" class="list-group-item">'.$line[1] . ' ' . $line[2].'</a>';
			//$json[] = $line;
			
		}
		print "end";
			//print $json[0];
		//	return json_encode($json);	

	}
	
	public function InsertUserInDB($name)
	{
		//INSERT INTO `gocha`.`User` (`Name`, `ID`) VALUES (\'tom\', NULL);
		//$sql = "insert into User('Name','ID') VALUES ('{$name}',NULL);	
		//$this->db->query($sql);	
	}
	
	
	

}
?>