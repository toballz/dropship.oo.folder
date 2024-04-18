<?php include("../../conf.php");?>
<?php
if(isset($_GET['i'])){
    $itemId=trim($_GET['i']);
    $gtt=db::stmt("SELECT * FROM `items` WHERE `item_id` = '$itemId' ");
    if(mysqli_num_rows($gtt) <1){exit(header("Location: ".site::url("domain")."/products/not-found.php"));}
    while ($getInfo=mysqli_fetch_assoc($gtt)){
        $ptitle= $getInfo['title']; 
        $pprice= $getInfo['price']; 
        $pimages= $getInfo['images']; 
        $pcolor= $getInfo['color']; 
        $pdescription= $getInfo['description']; 
    }
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
    <meta name="adventure" content="<?php echo $itemId;?>"/>
 
    <style type="text/css">
    .cart_container{
        display: flex;
        position: relative;padding:12px;
    }

    .cartv1{width:68%;}
    .cartv1>ul{padding:12px; width:100%;display: grid;    column-gap: 16px;margin-bottom:12px;
    grid-template-columns: repeat(16,calc(6.25% - 16px + 1px));
    row-gap: 16px; border: 1px solid #e5e5e5;}
    .cartv1>ul>li:nth-child(1){grid-area: 1/1/span 1/span 3;}
    .cartv1>ul>li:nth-child(2){grid-area: 1/4/span 1/span 11;}
    .cartv1>ul>li:nth-child(3){grid-area: 1/15/span 1/span 3;}
    .cartv1>ul>li:nth-child(3)>select{width:100%;padding:10px 12px; background-image: url('<?php echo tools::dir()->img."/da.svg?".$reloadStatic;?>');background-size: 16px;
  background-position: right center;
  background-repeat: no-repeat;
  padding-right: 1.5em; }
    .cartv1>ul>li:nth-child(4){grid-area: 2/15/span 2/span 2;cursor: pointer;}

    .cartv2{position:relative;width:32%;margin-left:1rem}
    .cartv2>ul{padding:12px;position: sticky;top: 2px;border:1px solid #000}
    .cartv2>ul>li{display:flex;justify-content: space-between;margin-bottom:9px}
    .cartv2>ul>li>hr{width: 100%}
    .cartv2>ul>li>a{margin-top: 19px;background-color:#3665f3;padding:12px;width:100%;text-align:center;border-radius:15px;color: #fff}
    </style>
</head>


<body>
    <header><?php include(tools::dir()->php."/header.php");?></header>
 


 <section class="cart_container">
   <div class="cartv1">
<?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
foreach($_SESSION['cart'] as $pi=>$re){?>
    <!---<pre><?php //print_r($re);?></pre>--->
       <ul>
           <li><div class=""><img src="<?php echo $re['productcolor'];?>"/></div></li>
           <li><div class=""><a href="<?php echo site::url("domain")."/product/".$re['productid'];?>"><?php echo $re['producttitle'];?></a></div></li>
           <li><select class=""><?php for($i=1;$i<=10;$i++){echo "<option value='".$i."' ".(($re['productquantity'] == $i)?"selected='true'":'').">Qty ".$i."</option>";}?></select></li>
           <li><div class="">remove</div></li>
       </ul>
<?php }}else{echo "<p>Your cart is empty.</p>";}?>
   </div>
   <div class="cartv2">
       <ul>
           <li><span>Items (44)</span><span>$101.01</span></li>
           <li><span>Shipping</span><span>$587.67</span></li>
           <li><hr/></li>
           <li><span>Subtotal</span><span>$587.67</span></li>
           <li><span>Total</span><span>$6000.67</span></li>
           <li><a href="">Go to Checkout</a></li>
       </ul>
   </div>
    
</section>

<footer><?php include(tools::dir()->php."/footer.php");?></footer>


</body>
</html>
