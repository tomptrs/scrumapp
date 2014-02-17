<?php
	
	require_once('ses.php');
	//$ses = new SimpleEmailService('AKIAILTXZOTR7G62RPGQ', 'vxbVOYaccxOEsw2d4hy+QbuGfnVm+MRR3BY132yN');
	
	//print_r($ses->verifyEmailAddress('tom.peeters@ap.be'));
	
	 print_r($ses->listVerifiedEmailAddresses());
	 
	   $m = new SimpleEmailServiceMessage();

  $m->addTo('tom.peeters@ap.be');
  $m->setFrom('tom_ptrs@yahoo.com');
  $m->setSubject('Hello, world!');
  $m->setMessageFromString('This is the message body.');

  print_r($ses->sendEmail($m));
	
	/*	include "aws-sdk-for-php-master\sdk.class.php";
	
	
	function amazonSesEmail($to, $subject, $message)
{
    $amazonSes = new AmazonSES(array(
        'key' => "AKIAILTXZOTR7G62RPGQ",
        'secret' => "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"
    ));
 
 $subject = "test";
 $message = "test message";
    $response = $amazonSes->send_email("tom_ptrs@yahoo.com",
        array('tom.peeters@ap.be' => array($to)),
        array(
            'Subject.Data' => $subject,
            'Body.Text.Data' => $message,
        )
    );
    if (!$response->isOK())
    {
        // handle error
    }
}
//	mysql_connect("localhost", "mailapp", "mailpass") 
//	    or die(mysql_error());
//	mysql_select_db("test") 
//	    or die(mysql_error());
	
	//$result = mysql_query("select * from customers")
	 //   or die(mysql_error());  
	
	//while ($row = mysql_fetch_array($result)) {
             
	    $headers = "From: tom_ptrs@yahoo.com\n";
	
	    $subject = "Thank you TEST!";
	
	    $message = "Dear TEST \n\n"; 
	    $message .= "Thank you for being a loyal customer. " . 
                "Please contact us at 555-4321 for a special discount offer.";
	
	    mail("tom.peeters@ap.be", $subject, $message, $headers);

	    echo "Sent email to";
	    
	   // sleep(5);
	//}
	*/
	
?>