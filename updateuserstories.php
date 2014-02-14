<?php

require_once "userstories.php";

$id ,$status;
print "test";
if( isset($_GET["id"]) && isset($_GET["status"]))
{
	$id = $_GET["id"];
	print $id;
	$status = $_GET["status"];
	print $status;


$m = new UserStory();			
$m->UpdateUserStory($id,$status);
}
?>   
   

   