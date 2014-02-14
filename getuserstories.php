<?php

require_once "userstories.php";
$m = new UserStory();			

//header('Content-Type: application/json');
header("Content-type: text/javascript");
//$json = array();
$str = $m->GetStoris();

echo json_encode($str);



//TRY TO SEND JSON DATA!

?>   
   

   