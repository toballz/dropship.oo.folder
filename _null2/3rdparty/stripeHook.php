<?php include_once("../co.php");
require_once('./stripe-php-master/init.php');

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
		//file_put_contents("./akd.txt", $Order_Id);

        //update if has paid to 1
        db::stmt("UPDATE `schedulee` SET `haspaid` = '1' WHERE `schedulee`.`rida` = '$Order_Id';");

        break;
    // Handle other event types as needed
}
http_response_code(200);