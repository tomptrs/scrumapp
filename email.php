<?php
	
	mysql_connect("localhost", "mailapp", "mailpass") 
	    or die(mysql_error());
	mysql_select_db("test") 
	    or die(mysql_error());
	
	$result = mysql_query("select * from customers")
	    or die(mysql_error());  
	
	while ($row = mysql_fetch_array($result)) {
             
	    $headers = "From: bob@example.com\n";
	
	    $subject = "Thank you " . $row['first_name'] . "!";
	
	    $message = "Dear " . $row['first_name'] . ",\n\n"; 
	    $message .= "Thank you for being a loyal customer. " . 
                "Please contact us at 555-4321 for a special discount offer.";
	
	    mail($row['email_address'], $subject, $message, $headers);

	    echo "Sent email to:  " .
                $row['first_name'] . " " . $row['last_name'] .
                "(" . $row['email_address'] . ")" . "<br>";
	    
	    sleep(5);
	}
	
?>