<?php

require_once "iterations.php";
$m = new Iteration();			

//header('Content-Type: application/json');
header("Content-type: text/javascript");
//$json = array();
$str = $m->GetData();

echo json_encode($str);
//print $str;

/*
 $value = array('return' => 1, 'msg1' => 'Message sent OK, we will be in touch ASAP');
} else {
    $value = array('return' => 0, 'msg1' => 'Message Failed, please try later');
}
$output = $json->encode($value);
echo $output;
*/


//TRY TO SEND JSON DATA!

?>   
   

   