<?php include_once("../conf.php");
    $ordersmade=db::stmt("SELECT * FROM `orders_made` WHERE `order_haspayed`='1'");
  

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
                                <h3>Shopping Cart</h3>
                                <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <table>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Product Title</th>
                                                    <th>Quality</th>
                                                    <th>Price Paid</th>
                                                    <th>Action</th>
                                                </tr>

                                                <?php while($made_orders= mysqli_fetch_assoc($ordersmade)){ ?>
                                                    
                                                <tr>
                                                    <td><img src="img/product/1.jpg" alt="" /></td>
                                                    <td style="width: 541px;">
                                                        <h3>
                                                            <a target="blank" href="<?php echo site::url("domain");?>/account/tracking--<?php echo $made_orders['order_id'];?>">
                                                                order_id: 
                                                                <span style="color: <?php echo "rgb(".rand(0, 255).", ".rand(0, 255).", ".rand(0, 255).")";?>">
                                                                    <?php echo $made_orders['order_id'];?>
                                                                </span>
                                                            </a>
                                                        </h3>

                                                        <?php foreach(json_decode($made_orders['order_cart_items']) as $hm){?>
                                                        <div style="display:flex;align-items:center;margin-bottom:12px"> 
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
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>$<?php echo $made_orders['order_howmuchpaid'];?></td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Welcome area -->

    <?php include("./.o/footer.php");?> 
</body>

</html>