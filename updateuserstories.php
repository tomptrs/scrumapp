<?php


require_once "userstories.php";


$v= 666;
$status = 444;

if( isset($_GET["id"])  && isset($_GET["status"]))
{
	$v = $_GET["id"];
	print $v;
	$status = $_GET["status"];
		print $status;	
	$m = new UserStory();			
	$m->UpdateUserStory($v,$status);



}

?>   
   

   