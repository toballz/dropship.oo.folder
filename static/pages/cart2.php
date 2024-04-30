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
           <h2 style="text-align:center">Your Shopping Cart <?php echo (isset($_SESSION['cart']) && count($_SESSION['cart'])>0)?"":"(Is Empty)";?></h2>
            <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
                $io=0;
                foreach($_SESSION['cart'] as $re){?>
                   <ul>
                       <li><div class=""><img data-srcimg="<?php echo $re['productcolor'];?>"/></div></li>
                       <li>
                            <div class="carttitle"><span><a href="<?php echo site::url("domain")."/product/".$re['productid'];?>"><?php echo $re['producttitle'];?></a></span></div>
                            <div class="delt"><span onclick="deletefromcart('<?php echo $re['productcolor'];?>',<?php echo $re['productid'];?>);">remove</span></div>
                        </li>
                       <li>
                            <div class="pscaa">$<?php echo $quantityTpriceArr[$io];?></div>
                            <div class="sees"><span class="cart_d_m">-</span><input type="number" min="1" max="10" value="<?php echo $re['productquantity'];?>" class="product_d_n"><span class="cart_d_p">+</span></div>
                        </li>
                        
                   </ul>
                <?php $io++;}
           }else{echo "<div style='width:50%;margin:auto'><img data-srcimg='".tools::dir()->img."/emptycart.png?".$reloadStatic."' /></div>";}?>
        </div>
   </div>

   <div class="cartv2">
    <div class="cartv2_inner">

       <ul>
            <?php $itemSum= array_sum($quantityTpriceArr);
                if($itemSum > 60) {
                    $_SESSION['shippingPrice']=0;
                    $shippingPrice="<span style='color:green'>FREE</span>";
                }else if($itemSum == 0) {
                    $_SESSION['shippingPrice']=0;
                    $shippingPrice="<span>$0</span>";
                }else if($ShippingAdddress->shippingStreet !== ""){
                    if(!isset($_SESSION['shippingPrice'])){ //(session::user()->shippingPrice==0)
                         $_SESSION['shippingPrice']=(rand(8,10))+0.99;
                    }
                    $shippingPrice="<span>$".session::user()->shippingPrice."</span>";
                 }else{
                    $shippingPrice="<span style='color:var(--err-red);font-size:12px'>Enter shipping address</span>";
                }?>
           <li><span>Items ( <?php echo tools::countQualCart("cartquantity");?> )</span><span>$<?php echo $itemSum;?></span></li>
           
           <li>Points<?php if(session::user()->id){
                echo '<span style="font-size:12px;">Use Your Points</span>';
            }else{
                echo '<span class="ldi5" style="font-size:12px;color:#3182ce">Login to use your points</span>';
            }?></li>
           <li style="border-bottom:1px solid var(--grey);"></li>
           <li class="subtotall"><span>SubTotal</span><span>$<?php echo $itemSum+session::user()->shippingPrice;?></span></li>
           <li style="align-items:center;"><span class="hr"></span><span> SHIPPING </span><span class="hr"></span></li>
           <li class="cartv2_shippaddressfoo">
                <div data-formpagereturn="cart_address_765u">
                    <div class="cart_address_u213"> 
                        <div class="cart_address_editshipping">
                            <div><b>Full Name:</b> <?php echo $ShippingAdddress->shippingFname." ".$ShippingAdddress->shippingLname;?></div>
                            <div><b>Email:</b> <?php echo $ShippingAdddress->shippingEmail;?></div>
                            <div><b>Street Address:</b> <?php echo $ShippingAdddress->shippingStreet." #".$ShippingAdddress->shippingApt;?></div>
                            <div><?php echo (($ShippingAdddress->shippingCity)?$ShippingAdddress->shippingCity.", ":"").$ShippingAdddress->shippingState;?></div> 
                            <div><?php echo (($ShippingAdddress->shippingZipPostal)?$ShippingAdddress->shippingZipPostal.", ":"").$ShippingAdddress->shippingCountry;?></div>
                            <div class="nj79r8p_parn"><div data-formpage="getSipiihig//cart_address_765u">EDIT ADDRESS?</div></div>
                        </div>
                    </div>
                </div>
            </li>

           <br/>
           <li style="align-items:center;"><span class="hr"></span><b>TOTAL</b><span class="hr"></span></li>
           <li><span>Shipping</span><?php echo $shippingPrice;?></li>
           <li class="reltoal"><span>Total</span><span>$<?php echo $itemSum+session::user()->shippingPrice;;?></span></li>
           
           <li class="termsCcheck"><div class="checkout_createaccount"><label><input type="checkbox" name="readtnc"/><div class="checkout_checkker"></div></label> <span>You have read and agreed to our <a style="color:#3182ce;display:inline" href="/s/tnc">terms & conditions.</a></span></div></li>
           <li><a id="<?php echo ($itemSum == 0)?'':'flam42';?>" href="javascript:void(0);">Go to Checkout</a></li>
       </ul>
    </div>
   </div>
    
</section>

<footer><?php include(tools::dir()->php."/footer.php");?></footer>


</body>
</html>
