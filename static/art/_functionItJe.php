<?php

$reloadStatic="as.as,ssdn".rand();

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
    const shippingFee=15.99;

 
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