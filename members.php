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
		$teller = 0;
		while ($line = $this->db->fetchArray() )
		{
			$json[$teller] = array(	"Id" => $line[0],
									"Name" => $line[1],
									"FirstName" => $line[2],
									"Email" => $line[3]
									);
			$teller++;
		
			
		}
		
			//print $json[0];
		//	return json_encode($json);	
	//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
	$arr = array(
    array(
        "region" => "valore",
        "price" => "valore2"
    ),
    array(
        "region" => "valore",
        "price" => "valore2"
    ),
    array(
        "region" => "valore",
        "price" => "valore2"
    )
);
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