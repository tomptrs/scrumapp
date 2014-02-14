<?php

require_once "userstories.php";
$m = new UserStory();			

//header('Content-Type: application/json');
header("Content-type: text/javascript");
//$json = array();
print "test";
$str = $m->GetStories();
print "test";
echo json_encode($str);



//TRY TO SEND JSON DATA!

?>   
   

   