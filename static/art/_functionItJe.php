<?php

$reloadStatic="as.as,ssdn".rand();
//isset($_SESSION['usera01'])
//isset($_SESSION['cart'])

class site{
    const name="Dropship";
    static function isSecure(){
    	if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443){
    		return "https:";
    	}else{
    		return "http:";
    	}
    }
    public static function url($vrvi){
        if ($vrvi=="domain"){
            return self::isSecure()."//".$_SERVER['SERVER_NAME'];
        }else if ($vrvi=="servername"){
            return $_SERVER['SERVER_NAME'];
        }else if($vrvi=="uri"){
            return $_SERVER['REQUEST_URI'];
        }else if($vrvi=="full"){
            return self::isSecure()."//".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        }else{
            die("url Erreor!!!!");
        }
    }
}
class tools{ 

    const passwordsalt="\u2315c#7@&8*";
    const stripe_Secret_key_API="sk_test_51NFmpULWQbqqSt59gnw0rTcvFeZ6t226bfUAx3do8u3J2f5pFZ5gCcxWIyuZULEYBKl15dE343r7ZuonVeEa563N00yTmQBkiG";

    public static function stripe_CreateDynamicLink($cemail,$pprice){
        if(!isset($cemail) || !isset($pprice)){exit("Payment platform error");}
        if(strlen($cemail) < 4 || $pprice < 1){exit("Payment platform error");}
        //
        require_once dir.'/static/3rdparty/stripe-php-master/init.php';

        \Stripe\Stripe::setApiKey(self::stripe_Secret_key_API);

        // Create a new Checkout Session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => site::name.' checkout page with Stripe',
                        ],
                        'unit_amount' => $pprice, // Amount in cents
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
            'customer_email' => $cemail, // Customer email
            //'customer_phone' => '+1234567890',
        ]);
        return $session->url;
    }

    public static function dir() {
        return (object)array(
        'php'=>dir.'/static/art',
        'img'=>site::url('domain').'/static/img',
        'cssjs'=>'static/cj'
        );
    }

    public static function countQualCart($agg){
        if($agg == "cartquantity"){
            $totalQuantity = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $item) {
                    $totalQuantity += $item['productquantity'];
                }
            }
            return $totalQuantity;
        }else if($agg == "quantityprice"){
             $productIds = array();
             //get productID from cart
             foreach ($_SESSION['cart'] as $product) {
                $productIds[] = $product['productid'];
            }
            //get price from productID
            $gtt=db::stmt("SELECT `item_id`,`price` FROM `items` WHERE `item_id` IN ('" . implode("','", $productIds) . "')");                
            $pPriceandIdforeach=array();
            while ($getInfo=mysqli_fetch_assoc($gtt)){
                $pPriceandIdforeach[]= array("pid"=>$getInfo['item_id'],
                                          "pric"=>$getInfo['price']);
            }

            //Multiple productID by Quantity
            $pricesTquantity = array();
            foreach($_SESSION['cart'] as $k=>$ses){
                foreach($pPriceandIdforeach as $ik=>$paif){
                    if($ses['productid'] == $paif['pid'] ){
                        $pricesTquantity[]= $paif['pric']*$ses['productquantity'];
                        break;
                    }
                }
            }

            return $pricesTquantity;

        }else if($agg == "subtotal"){
            //quantityprice + shipping
            
        }
    }


}