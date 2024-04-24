<?php include("../../conf.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?> 
 
    <style type="text/css">
    .cart_container{
        display:flex;letter-spacing: 1px;
    color: var(--bg-color) !important;
    }

    .cartv1{width:55%;display: flex;justify-content:end;background: var(--body);}
    .cartv1>.cartv1_inner{max-width:800px;padding:12px;margin-top:29px}

    .cartv1>.cartv1_inner>ul{padding:12px; width:100%;display: grid;    column-gap: 16px;margin-bottom:12px;
    grid-template-columns: repeat(16,calc(6.25% - 16px + 1px));
    row-gap: 16px; border-bottom: 1px solid #fff;}
    .cartv1>.cartv1_inner>ul>li:nth-child(1){grid-area: 1/1/span 1/span 3;}
    .cartv1>.cartv1_inner>ul>li:nth-child(2){grid-area: 1/4/span 1/span 10;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3){grid-area: 1/15/span 1/span 1;display: flex;flex-direction: column;justify-content: space-between;align-items: center;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.pscaa{font-weight:600;font-size:19px} 
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.sees{display:flex;width: 100%; padding:3px 4px;justify-content: space-around;
    align-items: center;cursor:pointer;outline:none;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.sees>span{
    padding: 7px 9px;
    background: #fff}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.sees>input{border:0;text-align:center;
    height: 100%;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.delt{cursor:pointer;font-size: 12px}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>div>select{border:0;width:100%;padding:6px 0; background-image: url('<?php echo tools::dir()->img."/da.svg?".$reloadStatic;?>');background-size: 16px;background-position: right center; background-repeat: no-repeat; padding-right: 1.5em;}
    .cartv1 select:focus-visible,.cartv1 select:focus{border:0 !important;outline:none;}

    .cartv2{width:45%;position:relative;background-color:#ffff}
    .cartv2>.cartv2_inner{position: sticky;top: 2px;padding:12px;margin-top:39px}
    .cartv2>.cartv2_inner>ul{padding:12px;border:1px solid var(--grey)}
    .cartv2>.cartv2_inner>ul>li{display:flex;justify-content: space-between;margin-bottom:9px}
    .cartv2>.cartv2_inner>ul>li.cartv2_shippaddressfoo{justify-content:center !important;}
    .cartv2>.cartv2_inner>ul>li>hr{width: 100%}
    .cartv2>.cartv2_inner>ul>li>a{margin-top:10px;background-color:#3665f3;padding:19px;width:100%;text-align:center;border-radius:15px;color: #fff}
    .cartv2 .reltoal,.cartv2 .subtotall{font-weight:600}
    .cartv1 h2{margin-bottom:26px;font-size:23px}
    .cartv1 .carttitle a{color:#000;font-weight:600;line-height:18px}
    .cartv2 .loginsespoint>span{margin-bottom:12px}
    .cartv2 .loginsespoint>span>a{display:inline;color:blue;}
.termsCcheck{margin-bottom:0 !important;}
.termsCcheck>div{margin-bottom:0 !important;margin-top:15px}
.cartv2_shippaddressfoo{border:1px solid #ccc;padding:12px;font-size:11px}
#cart_address_765u{width: 100%;transition:1s linear all} 
.cart_address_editshipping>div{margin-bottom:8px;}
.nj79r8p_parn{text-align: right;color:#2c78ff;margin:0;display:flex;justify-content:end;margin-bottom:0 !important;}
.nj79r8p{cursor: pointer;}
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
                       <li><div class="carttitle"><u><a href="<?php echo site::url("domain")."/product/".$re['productid'];?>"><?php echo $re['producttitle'];?></a></u></div></li>
                       <li>
                            <div class="pscaa">$<?php echo $quantityTpriceArr[$io];?></div>
                            <div class="sees"><span class="cart_d_m">-</span><input type="number" min="1" max="10" value="<?php echo $re['productquantity'];?>" class="product_d_n"><span class="cart_d_p">+</span></div>
                            <div class="delt" onclick="deletefromcart('<?php echo $re['productcolor'];?>',<?php echo $re['productid'];?>);">remove</div>
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
           <li class="loginsespoint"><?php if(!isset($_SESSION['usera01'])){?><span><a href="">Login</a> to use your points</span><?php }?></li>
           <li class="subtotall"><span>SubTotal</span><span>$<?php echo $itemSum+session::user()->shippingPrice;?></span></li>
           <li><hr/><span> SHIPPING </span><hr/></li>
           <li class="cartv2_shippaddressfoo">
                <div id="cart_address_765u">
                    <div class="cart_address_u213"> 
                        <div class="cart_address_editshipping">
                            <div><b>Street Address:</b> <?php echo $ShippingAdddress->shippingStreet;?></div>
                            <div><b>APT:</b> <?php echo $ShippingAdddress->shippingApt;?></div>
                            <div><b>City:</b> <?php echo $ShippingAdddress->shippingCity;?></div>
                            <div><b>State:</b> <?php echo $ShippingAdddress->shippingState;?></div>
                            <div><b>Zip/Postal:</b> <?php echo $ShippingAdddress->shippingZipPostal;?></div>
                            <div class="nj79r8p_parn"><div class="nj79r8p">EDIT ADDRESS?</div></div>
                        </div>
                    </div>
                </div>
            </li>

           <br/>
           <li><hr/><b>TOTAL</b><hr/></li>
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
