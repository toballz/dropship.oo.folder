<?php include_once("../co.php");
require_once('./stripe-php-master/init.php');

function mailReceiptAlert($oid, $customerEmsil){
	$mailer_header = 'From: cocohairsignature@gmail.com'."\r\n" .
    	    'Reply-To: cocohairsignature@gmail.com' . "\r\n" .
    	    'X-Mailer: PHP/'.phpversion(); 
    
    $SMSAlatMessage="A new appointment has been set\r\n\n----------------------------\r\n".site::url(1)."/pages/receipt.php?ords=".$oid;
    
	//Email customer receipt
    $customerReceiptMessage=file_get_contents(site::url(1)."/pages/receipt.php?ords=".$oid);
	mail($customerEmsil,
	     'Your Hair Appointment Confirmation | CocoHairSignature',
	     "<a href='".site::url(1)."/pages/receipt.php?ords=".$oid."'>View your appointment details here".site::url(1)."/pages/receipt.php?ords=".$oid."</a><br/>".$customerReceiptMessage,
	     'Content-Type: text/html; charset=UTF-8'."\r\n".$mailer_header);
	     
 	//sms me alert
 	$mySms="8506317422@tmomail.net,elisha4b@yahoo.com";
    mail($mySms, '!!', $SMSAlatMessage, $mailer_header);
    
	//sms coco alert
	$cocoSms="cocohairsignature@gmail.com,2244401819@txt.att.net";
	//mail($cocoSms, '!!',$SMSAlatMessage,$mailer_header);
}

//secret Stripe API key
\Stripe\Stripe::setApiKey(tools::stripe_Secret_key_API());

// Handle the incoming webhook event
$payload = @file_get_contents('php://input');
$event = null;
try {
    $event = \Stripe\Webhook::constructEvent($payload, $_SERVER['HTTP_STRIPE_SIGNATURE'], tools::stripe_Signing_Secret());
} catch(\UnexpectedValueException $e) {
    http_response_code(400);
    exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    http_response_code(400);
    exit();
}

// Handle the event
switch ($event->type) {
    case 'payment_intent.succeeded':
        //Get metadata from PaymentIntent
        $paymentIntent = $event->data->object; // Contains a Stripe PaymentIntent
        //get orderID 
        $Order_Id = $paymentIntent->metadata->orderID;
        $Order_Email = $paymentIntent->metadata->orderEmail;
		//file_put_contents("./akd.txt", $Order_Email);

        //update if has paid to 1
        db::stmt("UPDATE `schedulee` SET `haspaid` = '1' WHERE `schedulee`.`rida` = '$Order_Id';");
        mailReceiptAlert($Order_Id,$Order_Email);
        break;
    // Handle other event types as needed
}
http_response_code(200);
