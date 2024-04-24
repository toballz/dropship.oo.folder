<?php
$reloadStatic="a.r".rand(1,11);
//$_SESSION['usera01']
//$_SESSION['cart']
//$_SESSION['shippingPrice']
//$_SESSION['processingOrderID']

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}





class site{

    const appIsLive=false;
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


/**
 * get array from $_SESSION[]
*/
class session{
    const userArrayNameKey="usera01";

    /**
     * get user info from $_SESSION[self::userArrayNameKey]
     * 
     * returns: -> {
     * 
     *              id: int|false
     *              address: { shippingEmail, shippingFname, shippingLname,
     *                          shippingStreet, shippingApt, shippingCity, 
     *                      shippingState, shippingZipPostal, shippingPhonel
     *              shippingPrice: double
     *  }
    */
    public static function user(){

        if(!isset($_SESSION[self::userArrayNameKey]['address'])){
            $_SESSION[self::userArrayNameKey]['address']=(object)array(
                                                "shippingStreet"=>"",
                                                "shippingApt"=>"",
                                                "shippingCity"=>"",
                                                "shippingState"=>"",
                                                "shippingZipPostal"=>"",
                                                "shippingEmail"=>"",
                                                "shippingFname"=>"",
                                                "shippingLname"=>"",
                                                "shippingPhonel"=>"",
                                            );
        }
        
        //if user is loggedin
        $ifUserIsLoggedin=false;
        if(isset($_SESSION[self::userArrayNameKey]['id']) && strlen($_SESSION[self::userArrayNameKey]['id'])>4 ){
            $ifUserIsLoggedin=true;

            $u=$_SESSION[self::userArrayNameKey]['id'];
            //if user loggedin get address from DB::user_profile

            $getAddressFromDb=db::stmt("SELECT `user_firstlastname_phone`, `user_address` FROM `users_info` WHERE `user_id`='$u' LIMIT 1;");

            if($_SESSION[self::userArrayNameKey]['address']->shippingStreet == ""){
                $getAddressFromDb=db::stmt("SELECT `user_firstlastname_phone`, `user_address` FROM `users_info` WHERE `user_id`='$u' LIMIT 1;");
                if(mysqli_num_rows($getAddressFromDb) == 1){
                    $s=mysqli_fetch_assoc($getAddressFromDb);
                    $addy4rmDB=(object)json_decode($s['user_address']);
                    $contact4rmDB=(object)json_decode($s['user_firstlastname_phone']);

                    $addy4rmDB->shippingFname=$contact4rmDB->first;
                    $addy4rmDB->shippingLname=$contact4rmDB->last;
                    $addy4rmDB->shippingPhonel=$contact4rmDB->phone;

                    $_SESSION[self::userArrayNameKey]['address']=$addy4rmDB;
                }
            }else if(!isset($_SESSION[self::userArrayNameKey]['updateaddresstoDB'])){
                $conta=[];
                $addyy=json_decode(json_encode($_SESSION[self::userArrayNameKey]['address'])); 
                $conta['first']=$addyy->shippingFname;
                $conta['last']=$addyy->shippingLname;
                $conta['phone']=$addyy->shippingPhonel;

                unset($addyy->shippingLname);
                unset($addyy->shippingPhonel);
                unset($addyy->shippingFname);

                db::stmt("UPDATE `users_info` SET 
                `user_firstlastname_phone` = '".json_encode($conta)."',
                `user_address`= '".json_encode($addyy)."'
                 WHERE `user_id` = '$u';");
                 $_SESSION[self::userArrayNameKey]['updateaddresstoDB']=1;
                
            } 
        }

        return (object)array(
            'id'=> ($ifUserIsLoggedin)?trim($_SESSION[self::userArrayNameKey]['id']):false,
            'address'=> $_SESSION[self::userArrayNameKey]['address'],
            'shippingPrice'=> (!isset($_SESSION['shippingPrice']))?0:$_SESSION['shippingPrice']
        );
  
    }
}



class tools{ 

    const passwordsalt="\u2315?>c#7@&8*`";
    public static function stripe_Secret_key_API(){
        if(site::appIsLive){
            return "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";
        }else{
            //test api
            return "sk_test_51K35sFFccEYIDCwADI0uqY5sUkNX18tNt2Hk4dzZ589UKY42yDdXCdJi070mklB8PVvzTCz3kLCAPC0Tkip5DBlo00eaaBIvrE";
        }
    }
    public static function stripe_Signing_Secret(){
        if(site::appIsLive){
            return "whsec_26dFBYpqShU78UNstISQOW27gteD77JZ";
        }else{
            //test api
            return "whsec_Za5Uue0BAausncPr7Y1QXxPIWFWBwa4N";
        }
    }

    public static function stripe_Create_Dynamic_Link_for_payments($cemail,$pprice,$orderID4){
        if(!isset($cemail) || !isset($pprice)){exit("Payment platform error #2896-2407");}
        if(strlen($cemail) < 4 || !filter_var($cemail, FILTER_VALIDATE_EMAIL) || $pprice < 1){exit("Payment platform error #1352-3745");}
        if(strlen($orderID4) < 10 ){exit("Payment platform error #4890-7455");}
        $realpprice=$pprice*100;
        //
        require_once dir.'/static/3rdparty/stripe-php-master/init.php';
        //
        \Stripe\Stripe::setApiKey(self::stripe_Secret_key_API());
        //
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
                        'unit_amount' => $realpprice, // Amount in cents
                    ],
                    'quantity' => 1,
                ],
            ],
            'payment_intent_data' => [
            'metadata' => [
                'orderID' => $orderID4, // Include order ID in metadata
                ],
            ],
            'mode' => 'payment',
            'success_url' => site::url("domain").'/g/tracker/'.$orderID4,
            'cancel_url' => site::url("domain").'/cart/',
            'customer_email' => $cemail, // Customer email
            //'customer_phone' => '+1234567890',
        ]);
        return $session->url;
    }


    public static function add_dashtoOrderID($orderId, $incre){
        $pOrderID_withdash="";
        for ($i = 0; $i < strlen($orderId); $i++) { 
            $pOrderID_withdash .= $orderId[$i]; 
            if (($i + 1) % $incre == 0 && $i != strlen($orderId) - 1) { 
                $pOrderID_withdash .= ' - ';
            }
        }
        return $pOrderID_withdash;
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
            if ($_SESSION['cart']) {
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
            $gtt=db::stmt("SELECT `item_id`,`item_price` FROM `items_products` WHERE `item_id` IN ('" . implode("','", $productIds) . "')");                
            $pPriceandIdforeach=array();
            while ($getInfo=mysqli_fetch_assoc($gtt)){
                $pPriceandIdforeach[]= array("pid"=>$getInfo['item_id'],
                                          "pric"=>$getInfo['item_price']);
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