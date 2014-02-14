<?php

require_once "userstories.php";

$id ,$status;

if( isset($_GET["id"]) && isset($_GET["status"]))
{
	$id = $_GET["id"];
	$status = $_GET["status"];
}

$m = new UserStory();			
$m->UpdateUserStory($id,$status);

?>   
   

   