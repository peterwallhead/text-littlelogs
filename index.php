<?php
  $from = $_REQUEST['From'];
	$body = $_REQUEST['Body'];

  //This stops randoms using your Twilio budget (you should probably not tell people your Twilio number anyway)
	if($from != "+61427123456") { //Replace this number with your own mobile number, including the international code
		exit;
	}

	if (strpos($body, "{littlelog}") !== false) {
    	$body = preg_replace('/\{(littlelog)\}/usi','', $body);
    	$body = trim($body);
    	
    	$email_to = "your-secret-email@mailbot.littlelogs.co"; //Replace this with your own secret littlelogs address

    	mail($email_to, "This is a littlelog", $body);

    	$response = "littlelog posted";

	}

	header("content-type: text/xml");
	
	//The XML response below is optional, because it will text you back whatever is in $response (and this will cost you money).
?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
	<Message><?php echo $response; ?></Message>
</Response>
