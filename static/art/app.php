<?php include_once("../../conf.php");

if(isset($_POST['o']) &&  strlen($_POST['o']) > 2){
header('Content-Type: application/json');

//code::int:500|404|200
//message::string
$return=[];





if($_POST['o']=="addcart" && isset($_POST['piid']) && isset($_POST['tile']) && $_POST['qunt']){
    //ADD to cart
	$pid=trim($_POST['piid']);
	$color=(isset($_POST['color']))?$_POST['color']:null;
    $title=trim($_POST['tile']);
	$qpre=trim($_POST['qunt']);
	$quantity= (strlen($qpre) > 10) ? 10 : 
            ((strlen($qpre) < 1) ? 1 : 
            $qpre);

    // Flag to indicate if the item was found in the cart
    $found = false;
    // Iterate through the cart to find the item
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['productid'] === $pid && $item['productcolor'] === $color) {
            // Item found, update its quantity
            $item['productquantity'] = $quantity;
            $found = true;
            break;
        }
    }
    // If item not found, add it to the cart
    if (!$found) {
        $_SESSION['cart'][] = array(
            'productid' => $pid,
            'productcolor' => $color,
            'producttitle' => $title,
            'productquantity' => $quantity
        );
    }

    //return;;;
	$return["code"]=200;
	$return["message"]="Added to cart";


    //&&&&&&&&&&&&
}else if($_POST['o']=="getsession"){
    //count all cart
    if(isset($_POST['re1']) && $_POST['re1'] == "cartnum"){
        $return["message"]["cartnum"]= tools::countQualCart("cartquantity");
    }


    //return;;;
    $return["code"]=200; 


    //&&&&&&&&&&&&
}else if($_POST['o'] == "deltecart" && isset($_POST['cartid']) && isset($_POST['colre'])){
    //delete from cart
    $products = $_SESSION['cart'];
    $productcolorToRemove = $_POST['colre'];
    $productidToRemove = $_POST['cartid'];

    // Iterate through the array to find and remove the item
    foreach ($products as $key => $product) {
        if ($product["productid"] == $productidToRemove && $product["productcolor"] == $productcolorToRemove) {
            unset($_SESSION['cart'][$key]);

            //return;;;
            $return["code"]= 301;
            $return["message"]= site::url("domain")."/cart/";
            break;
        }
    }
    //&&&&&&&&&&&&
}else if($_POST['o'] == "paynow"){
    //pay now process

    $err=false;
    $vemail = strtolower(trim(session::user()->address->shippingEmail));
    //validate email
    if(!filter_var($vemail, FILTER_VALIDATE_EMAIL)){
        $return["code"]= 404;
        $return["message"]= "Email error! #5743-3554";
        $err=true;
    }
    if(session::user()->address->shippingStreet == ""){
        $return["code"]= 404;
        $return["message"]= "Enter your shipping address! #5743-3554";
        $err=true;
         
    }


    //if no errors
    if(!$err){
        $quantityNprice=tools::countQualCart("quantityprice");
        $shipping=session::user()->shippingPrice;
        $tax=0.0;
        $totalPrice=array_sum($quantityNprice)+$shipping+$tax;


         //insert into DB
        $orderID=rand(1,98999996).rand(1,99999997).rand(1,9999998);
        $userID=NULL;
        $shippingAddy=json_encode(session::user()->address);
        $allCart=json_encode($_SESSION['cart']);
        $isnta=db::stmt("INSERT INTO `orders_made` 
            (`order_id`, `order_user_id`, `order_email`, `order_shipping_address`, `payment_card`, `order_haspayed`, `order_cart_items`, `order_howmuchpaid`, `order_dateAdded`) VALUES 
            ('$orderID', NULLIF('$userID',false), '$vemail', '$shippingAddy', NULL, '0', '$allCart', '$totalPrice', current_timestamp());");
        $_SESSION['processingOrderID']=$orderID;

        //stripe paynow
        $payLink=tools::stripe_Create_Dynamic_Link_for_payments($vemail,$totalPrice,$orderID);

        //return;;;
        $return["code"]= 301;
        $return["message"]= "{$payLink}";
    }
    //&&&&&&&&&&&&
}else if($_POST['o'] == "saveshippingaddress" && isset($_POST['avi'])){
   
    $_SESSION[session::userArrayNameKey]['address'] =  json_decode($_POST['avi']);
    $return["code"]= 301;
    $return["message"]= site::url("domain")."/cart/";

}else if($_POST['o'] == "login" && isset($_POST['qav']) && (strlen($_POST['qav']) > 6) && isset($_POST['re'])){
    
    $bsh=json_decode(base64_decode(trim($_POST['qav'])));
     
    $useremailf=strtolower(base64_decode($bsh->ap));
    $passwordf=md5(tools::passwordsalt.base64_decode($bsh->py));

    if(!filter_var($useremailf, FILTER_VALIDATE_EMAIL) || (strlen($useremailf) < 6)){
        $return["code"]= 404;
        $return["message"]= "Wrong Email";
    
    }else{
        $hth=db::stmt("SELECT * FROM `users_info` WHERE `user_email` = '$useremailf' AND `user_password` = '$passwordf' LIMIT 1");
        if(mysqli_num_rows($hth) == 1){
            $ys=mysqli_fetch_assoc($hth);
            $_SESSION[session::userArrayNameKey]['ifNewUser']=(($ys['user_points'] == 0)?true:false);
            $_SESSION[session::userArrayNameKey]['id']=$ys['user_id'];
            $return["code"]= 301;
            $return["message"]= trim($_POST['re']);
        }else{
            $return["code"]= 404;
            $return["message"]= "Invalid Username Or Password!";
        }
    }
}else if($_POST['o'] == "justlogout" ){
     $_SESSION[session::userArrayNameKey]['id']=[];
     unset($_SESSION[session::userArrayNameKey]['id']);
     unset($_SESSION[session::userArrayNameKey]['ifNewUser']);
     unset($_SESSION[session::userArrayNameKey]['updateaddresstoDB']);
     
     $return["code"]= 301;
     $return["message"]= "reload";
}












































//return response
if(count($return)>0){echo json_encode($return);}else{die("return;".count($return));}

}else{echo "0";}

