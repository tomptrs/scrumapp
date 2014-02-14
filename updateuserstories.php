<?php

require_once "userstories.php";

$id ,$status;

if( isset($_POST["id"]) && isset($_POST["status"]))
{
	$id = $_POST["id"];
	$status = $_POST["status"];
}

$m = new UserStory();			
$m->UpdateUserStory($id,$status);

?>   
   

   