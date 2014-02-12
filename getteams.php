<?php

require_once "members.php";
$m = new Member();			

//header('Content-Type: application/json');
header("Content-type: text/javascript");
//$json = array();
$str = $m->GetTeams();

echo json_encode($str);


?>   
   

   