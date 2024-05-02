<?php include_once("../conf.php");
    //update tracking to db +1
    if(isset($_POST['updateprocessingtracker'])  &&  isset($_POST['ForderId'])  &&  isset($_POST['FtrackingLastUpdated'])){
        $FtrackingLastUpdatedx=trim($_POST['FtrackingLastUpdated']);
        $ForderIdx=trim($_POST['ForderId']);

        $j="UPDATE `orders_made` SET `order_tracker` = (CASE WHEN (`order_tracker` >= 3) THEN 20 ELSE (`order_tracker` + 1) END) ,`order_tracker_last_updated`=CURRENT_TIMESTAMP WHERE `order_id` = '$ForderIdx' AND `order_tracker_last_updated`='$FtrackingLastUpdatedx' AND `order_tracker` < 20;";
        if(db::stmt($j)){
        //echo $j;
            $snrtdu=$ForderIdx;
        }
    }
    //select orders from db
    $ordersmade=db::stmt("SELECT * FROM `orders_made` WHERE `order_haspayed`='1' AND `order_tracker` < 20 ORDER BY `order_tracker_last_updated` ASC");
?>
        
<!doctype html>
<html class="no-js" lang="en">
<head> 
    <title>Dashboard V.3 | Nalika - Material Admin Template</title>
    <?php include("./.o/head.php");?> 
</head>

<body>

    <?php include(".o/navbar.php");?>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php include("./.o/header.php");?>
     
            <br/><br/>
        <div class="product-cart-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3 style="color:#fff">tracking progress</h3>
                                <section> 
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <table>
                                                <tr>
                                                    <th>Product Title</th>
                                                    <th>Price Paid</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>

                                                <?php $i=0;
                                                while($made_orders= mysqli_fetch_assoc($ordersmade)){$i++;?>
                                                    
                                                <tr>
                                                    <td style="width:741px;">
                                                        <h3>
                                                            <a target="blank" href="<?php echo site::url("domain");?>/account/tracking--<?php echo $made_orders['order_id'];?>">
                                                                order_id##: 
                                                                <span style="color: <?php echo "rgb(".rand(0, 255).", ".rand(0, 255).", ".rand(0, 255).")";?>">
                                                                    <?php echo $made_orders['order_id'];?>
                                                                </span>
                                                            </a>
                                                        </h3>

                                                        <?php foreach(json_decode($made_orders['order_cart_items']) as $hm){?>
                                                        <div style="display:flex;align-items:center;margin-bottom:12px;border-bottom:2px solid orange"> 
                                                            <img src="<?php echo $hm->productcolor;?>" style="width:50px;margin-right:12px"/>
                                                            <div>
                                                                <p style="word-wrap: break-word; white-space: normal;">
                                                                    <a style="color:#fff;" target="blank" href="<?php echo site::url("domain");?>/product/<?php echo $hm->productid;?>">
                                                                        <b>Title:</b>
                                                                        <?php echo $hm->producttitle;?>
                                                                    </a>
                                                                </p>
                                                                <b>Quantity: <?php echo $hm->productquantity;?></b>
                                                            </div>
                                                        </div>

                                                        <?php }?>
                                                    </td>
                                                    <td>$<?php echo $made_orders['order_howmuchpaid'];?></td>
                                                    <td><?php $hs=json_decode($made_orders['order_shipping_address']);
                                                    echo "<br/><b>Fullname FL: </b>".$hs->shippingFname." ".$hs->shippingLname;
                                                    echo "<br/><b>Street, ApT: </b>".$hs->shippingStreet.", #". $hs->shippingApt;
                                                    echo "<br/><b>City, State: </b>".$hs->shippingCity.", ".$hs->shippingState;
                                                    echo "<br/><b>Zip, Country: </b>".$hs->shippingZipPostal.", ".$hs->shippingCountry;?></td>
                                                    <td>
                                                        <form class="j64yr" id="add1totrackprocessing<?php echo $i;?>" action="/.admin/shipping-tracking.php" method="post">
                                                         
                                                            <input name="FtrackingLastUpdated" value="<?php echo $made_orders['order_tracker_last_updated'];?> " type="hidden"/>
                                                            <input name="ForderId" value="<?php echo $made_orders['order_id'];?>" type="hidden"/>
                                                            <input name="updateprocessingtracker" value="" type="hidden"/>
                                                            
                                                            <button onclick="gdshjtr(this,'<?php echo $i;?>');" class="pd-setting-ed"
                                                             style="padding:20px 4px;background:<?php echo ((isset($snrtdu) && $snrtdu==$made_orders['order_id'])?"green":"");?>">
                                                                ({ Level: <?php echo $made_orders['order_tracker'];?> })<br/>
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> +1 tracking update
                                                            </button>

                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                                  
                                            </table>
                                        </div>
                                    </div>
                                </section>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    





<script>
function gdshjtr(tthis, formId){
    var formIdq=document.querySelector("#add1totrackprocessing"+formId);
    formIdq.addEventListener("submit", function(event) {
        event.preventDefault();

        var ohdaIder=document.querySelector('#add1totrackprocessing'+formId+' [name="ForderId"]');
        if(prompt("update this order tracker by +1?", ohdaIder.value+"+")==ohdaIder.value){
            formIdq.submit();
        }else{
            location.reload();
        }

    
    });
}

 
        
 
</script>
    <?php include("./.o/footer.php");?> 
</body>

</html>