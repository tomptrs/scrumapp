

<?php

require "members.php";
$m = new Member();			
			
header('Content-Type: application/json');
//$json = array();
$str = $m->GetData();

print "test ";//$str;

//TRY TO SEND JSON DATA!

?>   
   

   