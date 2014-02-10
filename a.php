<?php

require_once "members.php";
$m = new Member();			

//header('Content-Type: application/json');
//$json = array();
$str = $m->GetData();

print $str;


//TRY TO SEND JSON DATA!

?>   
   

   