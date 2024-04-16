<?php include_once("../../conf.php");

if(isset($_POST['o']) &&  strlen($_POST['o']) > 1){
header('Content-Type: application/json');

//code::int:500|404|200
//message::string
$return=[];





if($_POST['o']=="addcart" && isset($_POST['piid']) && $_POST['qunt']){
	$pid=trim($_POST['piid']);
	$color=(isset($_POST['color']))?$_POST['color']:null;
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
            'productquantity' => $quantity
        );
    }

    //return;;;
	$return["code"]=200;
	$return["message"]="Added to cart";
}


















































//return response
if(count($return)>0){print_r($_SESSION['cart']);}else{die("return;".count($return));}

}else{echo "0";}

