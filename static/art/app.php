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
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
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
}else if($_POST['o'] == "paynow" && isset($_POST['wemail'])){
    //pay now process
    $vemail = trim($_POST['wemail']);
    //validate email
    if(!filter_var($vemail, FILTER_VALIDATE_EMAIL)){
        $return["code"]= 404;
        $return["message"]= "Email error! #5743-3554";
        return;
    }


    //if user loggedin save address n email
    if(){

    }













    $quantityNprice=tools::countQualCart("quantityprice");
    $shipping=0.0;
    $tax=0.0;
    $totalPrice=array_sum($quantityNprice)+$shipping+$tax;

    //paynow
    $payLink=tools::stripe_Create_Dynamic_Link_for_payments($vemail,$totalPrice);

    //return;;;
    $return["code"]= 301;
    $return["message"]= "{$payLink}";

    //&&&&&&&&&&&&
}


















































//return response
if(count($return)>0){echo json_encode($return);}else{die("return;".count($return));}

}else{echo "0";}

