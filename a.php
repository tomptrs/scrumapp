

<?php

require "userstories.php";
$m = new UserStory();			
			
header('Content-Type: application/json');
//$json = array();
$str = $m->GetData();

print "test";//$str;

//TRY TO SEND JSON DATA!

?>   
   

   