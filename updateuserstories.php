<?php


require_once "userstories.php";


print "test";
print $_GET["id"];

$id 	= 0;
$status = 0;

//if( isset($_GET["id"]) )// && isset($_GET["status"]))
//{
	$id = $_GET["id"];
	print $id;
//	$status = $_GET["status"];
//	print $status;
//}

$m = new UserStory();			
$m->UpdateUserStory($id,$status);
}
*/
?>   
   

   