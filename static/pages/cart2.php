<?php include("../../conf.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
    <meta name="adventure" content="<?php echo $itemId;?>"/>
 
    <style type="text/css">
    .cart_container{
        display:flex;padding:12px 0;m ax-width:1200px;letter-spacing: 1px;
    }

    .cartv1{width:55%;display: flex;justify-content:end;}
    .cartv1>.cartv1_inner{max-width:800px;padding:12px}

    .cartv1>.cartv1_inner>ul{padding:12px; width:100%;display: grid;    column-gap: 16px;margin-bottom:12px;
    grid-template-columns: repeat(16,calc(6.25% - 16px + 1px));
    row-gap: 16px; border: 1px solid var(--grey);}
    .cartv1>.cartv1_inner>ul>li:nth-child(1){grid-area: 1/1/span 1/span 3;}
    .cartv1>.cartv1_inner>ul>li:nth-child(2){grid-area: 1/4/span 1/span 11;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3){grid-area: 1/15/span 1/span 2;display: flex;flex-direction: column;justify-content: space-between;align-items: center;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.pscaa{font-weight:600;font-size:19px}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.sees{width: 100%;border:1px solid #ccc;padding:3px 4px;cursor:pointer;outline:none;}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>.delt{cursor:pointer;font-size: 12px}
    .cartv1>.cartv1_inner>ul>li:nth-child(3)>div>select{border:0;width:100%;padding:6px 0; background-image: url('<?php echo tools::dir()->img."/da.svg?".$reloadStatic;?>');background-size: 16px;background-position: right center; background-repeat: no-repeat; padding-right: 1.5em;}
    .cartv1 select:focus-visible,.cartv1 select:focus{border:0 !important;outline:none;}

    .cartv2{width:45%;position:relative;}
    .cartv2>.cartv2_inner{position: sticky;top: 2px;padding:12px}
    .cartv2>.cartv2_inner>ul{padding:12px;border:1px solid var(--grey)}
    .cartv2>.cartv2_inner>ul>li{display:flex;justify-content: space-between;margin-bottom:9px}
    .cartv2>.cartv2_inner>ul>li.cartv2_shippaddressfoo{justify-content:center !important;}
    .cartv2>.cartv2_inner>ul>li>hr{width: 100%}
    .cartv2>.cartv2_inner>ul>li>a{margin-top:10px;background-color:#3665f3;padding:19px;width:100%;text-align:center;border-radius:15px;color: #fff}
    .cartv2 .subtotall{font-weight:600}
    .cartv1 h2{margin-bottom:26px;font-size:23px}
    .cartv1 .carttitle a{color:#000;font-weight:600;line-height:18px}
    .cartv2 .loginsespoint>span{margin-bottom:12px}
    .cartv2 .loginsespoint>span>a{display:inline;color:blue;}

.cartv2_shippaddressfoo{border:1px solid #ccc;padding:12px;font-size:11px}
#cart_address_765u{width: 100%;transition:1s linear all} 
.cart_address_editshipping>div{margin-bottom:8px;}
.nj79r8p{text-align: right;cursor: pointer;color:#2c78ff}
.cart_address_u213>p{font-weight: 600;margin-top:0;font-size:16px}
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
                       <li><div class=""><img src="<?php echo $re['productcolor'];?>"/></div></li>
                       <li><div class="carttitle"><u><a href="<?php echo site::url("domain")."/product/".$re['productid'];?>"><?php echo $re['producttitle'];?></a></u></div></li>
                       <li>
                            <div class="pscaa">$<?php echo $quantityTpriceArr[$io];?></div>
                            <div class="sees"><select class="changequnt"><?php for($i=1;$i<=10;$i++){echo "<option value='".$i."' ".(($re['productquantity'] == $i)?"selected='true'":'').">Qty ".$i."</option>";}?></select></div>
                            <div class="delt" onclick="deletefromcart('<?php echo $re['productcolor'];?>',<?php echo $re['productid'];?>);">remove</div>
                        </li>
                        
                   </ul>
                <?php $io++;}
           }else{echo "<p>Your cart is empty.</p><div style='width:50%;margin:auto'><img src='".tools::dir()->img."/emptycart.png?".$reloadStatic."' /></div>";}?>
        </div>
   </div>

   <div class="cartv2">
    <div class="cartv2_inner">

       <ul>
            <?php $itemSum= array_sum($quantityTpriceArr);?>
           <li><span>Items ( <?php echo tools::countQualCart("cartquantity");?> )</span><span>$<?php echo $itemSum;?></span></li>
           <li><span>Shipping</span><?php echo ($itemSum > 50) ? "<span style='color:green'>FREE</span>" : "<span>".(($itemSum == 0) ? "$0" : "Enter shipping address")."</span>";?></li>
           <li><hr/></li>
           <li class="loginsespoint"><?php if(!isset($_SESSION['usera01'])){?><span><a href="">Login</a> to use your points</span><?php }?></li>
           <li class="subtotall"><span>SubTotal</span><span>$<?php echo $itemSum;?></span></li>
           <li><hr/><span>.</span><hr/></li>
           <li class="cartv2_shippaddressfoo">
                <div id="cart_address_765u">
                    <div class="cart_address_u213">
                        <p>Shipping Address</p>
                        <div class="cart_address_editshipping">
                            <div><b>Street Address:</b> <?php echo $ShippingAdddress->shippingStreet;?></div>
                            <div><b>APT:</b> <?php echo $ShippingAdddress->shippingApt;?></div>
                            <div><b>City:</b> <?php echo $ShippingAdddress->shippingCity;?></div>
                            <div><b>State:</b> <?php echo $ShippingAdddress->shippingState;?></div>
                            <div><b>Zip/Postal:</b> <?php echo $ShippingAdddress->shippingZipPostal;?></div>
                            <div class="nj79r8p">EDIT ADDRESS?</div>
                        </div>
                    </div>
                </div>
            </li>

           <br/>
           <li class="subtotall"><span>Total</span><span>$<?php echo $itemSum;?></span></li>
           <li><hr/></li>

           <li><a href="<?php echo ($itemSum == 0)?'javascript:void(0)':'cart/checkout/';?>">Go to Checkout</a></li>
       </ul>
    </div>
   </div>
    
</section>

<footer><?php include(tools::dir()->php."/footer.php");?></footer>
<script type="text/javascript">
    function deletefromcart(th,sa){
        $.post("a/ig/apy.php", {o:"deltecart", cartid:sa, colre: th})
  .done(function(data) {
    if(data.code == 301){
        window.location.href = data.message;
    }  
  })
  .fail(function(jqXHR, textStatus, errorThrown) {
    console.error("addcart-failed:", textStatus, errorThrown);
  }); 
    }



//get address page
$(".nj79r8p").click(function(){
    $.get("http://dropship.oo/cart/checkout/", function(data){
        $("#cart_address_765u").html(data);
    });
});



$().click(function(){
    $.post("a/ig/apy.php", {
                    o:"paynow", 
                    price:14.44,
                    colre: "red"

                }).done(function(data) {
                    if(data.code == 301){
                        window.location.href = data.message;
                    }else{
                        alert(data.message);
                    }
                  })
                  .fail(function(jqXHR, textStatus, errorThrown) {
                    console.error("addcart-failed:", textStatus, errorThrown);
                  }); 
});


</script>

</body>
</html>
