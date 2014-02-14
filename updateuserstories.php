<?php


require_once "userstories.php";


print "test";
print $_GET["id"];




//if( isset($_GET["id"]) )// && isset($_GET["status"]))
//{
	$v = $_GET["id"];
	print $v;
//	$status = $_GET["status"];
//	print $status;
//}

$m = new UserStory();			
$m->UpdateUserStory($id,$status);
}
*/
?>   
   

   