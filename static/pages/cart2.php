<?php include("../../conf.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?> 
 
    <style type="text/css"> 
        body{ font-family: "Inter", sans-serif;}
    
    </style>

</head>


<body>
    <header><?php include(tools::dir()->php."/header.php");?></header>
  
 <section class="cart_container">
    <?php $quantityTpriceArr=tools::countQualCart("quantityprice");
        $ShippingAdddress=session::user()->address?>
    <div class="cartv1">
        <div class="cartv1_inner">
           <h2>Your Shopping Cart</h2>
            <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
                $io=0;
                foreach($_SESSION['cart'] as $re){?>
                   <ul>
                       <li><div class=""><img data-srcimg="<?php echo $re['productcolor'];?>"/></div></li>
                       <li>
                            <div class="carttitle"><u><a href="<?php echo site::url("domain")."/product/".$re['productid'];?>"><?php echo $re['producttitle'];?></a></u></div>
                            <div class="delt"><span onclick="deletefromcart('<?php echo $re['productcolor'];?>',<?php echo $re['productid'];?>);">remove</span></div>
                        </li>
                       <li>
                            <div class="pscaa">$<?php echo $quantityTpriceArr[$io];?></div>
                            <div class="sees"><span class="cart_d_m">-</span><input type="number" min="1" max="10" value="<?php echo $re['productquantity'];?>" class="product_d_n"><span class="cart_d_p">+</span></div>
                        </li>
                        
                   </ul>
                <?php $io++;}
           }else{echo "<p>Your cart is empty.</p><div style='width:50%;margin:auto'><img data-srcimg='".tools::dir()->img."/emptycart.png?".$reloadStatic."' /></div>";}?>
        </div>
   </div>

   <div class="cartv2">
    <div class="cartv2_inner">

       <ul>
            <?php $itemSum= array_sum($quantityTpriceArr);
                if($itemSum > 60) {
                    $shippingPrice="<span style='color:green'>FREE</span>";
                }else if($itemSum == 0) {
                    $_SESSION['shippingPrice']=0;
                    $shippingPrice="<span>$0</span>";
                }else if($ShippingAdddress->shippingStreet !== ""){
                    if(!isset($_SESSION['shippingPrice'])){
                         $_SESSION['shippingPrice']=(rand(8,10))+0.99;
                    }
                    $shippingPrice="<span>{$_SESSION['shippingPrice']}</span>";
                 }else{
                    $shippingPrice="<span style='color:var(--err-red);font-size:12px'>Enter shipping address</span>";
                }?>
           <li><span>Items ( <?php echo tools::countQualCart("cartquantity");?> )</span><span>$<?php echo $itemSum;?></span></li>
           <li><span>Shipping</span><?php echo $shippingPrice;?></li>
           <li style="border-bottom:1px solid var(--grey);"></li>
           <li class="loginsespoint"><?php if(!session::user()->id){?><span><a href="">Login</a> to use your points</span><?php }?></li>
           <li class="subtotall"><span>SubTotal</span><span>$<?php echo $itemSum+session::user()->shippingPrice;?></span></li>
           <li style="align-items:center;"><span class="hr"></span><span> SHIPPING </span><span class="hr"></span></li>
           <li class="cartv2_shippaddressfoo">
                <div id="cart_address_765u">
                    <div class="cart_address_u213"> 
                        <div class="cart_address_editshipping">
                            <div><b>Full Name:</b> <?php echo $ShippingAdddress->shippingFname." ".$ShippingAdddress->shippingLname;?></div>
                            <div><b>Email:</b> <?php echo $ShippingAdddress->shippingEmail;?></div>
                            <div><b>Street Address:</b> <?php echo $ShippingAdddress->shippingStreet." #".$ShippingAdddress->shippingApt;?></div>
                            <div><?php echo $ShippingAdddress->shippingCity.", ".$ShippingAdddress->shippingState;?></div> 
                            <div><?php echo $ShippingAdddress->shippingZipPostal.", ".$ShippingAdddress->shippingCountry;?></div>
                            <div class="nj79r8p_parn"><div class="nj79r8p">EDIT ADDRESS?</div></div>
                        </div>
                    </div>
                </div>
            </li>

           <br/>
           <li style="align-items:center;"><span class="hr"></span><b>TOTAL</b><span class="hr"></span></li>
           <li><b>Points</b><?php if(session::user()->id){
                echo "<span>Use Your Points</span>";
            }else{
                echo "<span>Login to use Your Points</span>";
            }?></li>
           <li class="reltoal"><span>Total</span><span>$<?php echo $itemSum+session::user()->shippingPrice;;?></span></li>
           
           <li class="termsCcheck"><div class="checkout_createaccount"><label><input type="checkbox" name="readtnc"/><div class="checkout_checkker"></div></label> <span>You have read and agreed to our terms & conditions.</span></div></li>
           <li><a id="<?php echo ($itemSum == 0)?'':'flam42';?>" href="javascript:void(0);">Go to Checkout</a></li>
       </ul>
    </div>
   </div>
    
</section>

<footer><?php include(tools::dir()->php."/footer.php");?></footer>


</body>
</html>
