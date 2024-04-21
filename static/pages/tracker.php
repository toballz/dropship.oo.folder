<?php include("../../conf.php");?>
<?php
if(isset($_GET['oid'])){
    $processingOrderID=trim($_GET['oid']);
    $traccker=db::stmt("SELECT * FROM `orders_made` WHERE `order_id` = '$processingOrderID' AND `order_haspayed` = '1';");
    //echo "SELECT * FROM `orders_made` WHERE `order_id` = '$processingOrderID' AND `order_haspayed` = '1';";
    if(mysqli_num_rows($traccker)==1){
        $trackerIsValid=true;

        //empty carts
        if($_SESSION['processingOrderID'] == $_GET['oid']){
            $_SESSION['cart']=[];
            unset($_SESSION['shippingPrice']);

            $to = "noreply@".site::url("servername");
            $subject = site::url("servername")." Your Order Has Been Received";

            $headers = "From: Custom Name <noreply@".site::url("servername").">" . "\r\n";
            //$headers .= "Reply-To: custom@example.com" . "\r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $receiptMessage = "This is a test email.";
            // Send email
            // if (mail($to, $subject, $receiptMessage, $headers)) {
            //     echo "Email sent successfully.";
            // } else {
            //     echo "Email sending failed.";
            // }

        }

        while ($getTracckerInfo=mysqli_fetch_assoc($traccker)){ 
            $shippingAddress= $getTracckerInfo['order_shipping_address']; 
            $cartItems= $getTracckerInfo['order_cart_items'];
        }
    }else{ 
        $trackerIsValid=false;
    }
}
//echo  ($_GET['oid']);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?> 
    <style type="text/css">
        .trackknum{display: flex;align-items: center;}
        .trackknum input{width:100%;padding:15px 11px;font-size:15px;margin-bottom:15px}
        .trackknum input:first-child{width:70%;}
        .trackknum input:last-child{cursor: pointer;width:30%;}
        .tracker_container{
            width:100%;
            max-width: 1100px;
            margin: auto;
        }

        .mpshgpfoind{
            padding: 25px;display: flex;justify-content:center;align-items: center;
        }
        .mpshgpfoindsvgwarn{width: 100px;height:100px;margin-right:21px}
        .mpshgpfoindsvgwarn>svg{width: 100%;height: 100%}
        .trackercoolr{display: flex;align-items: center;}
        .trackercoolr>li{width: 100%;position: relative; color: #fff; text-aligns: center;}
        .trackercoolr>li:after{content: ''; width: 100%; height:13px; background: #fff; position: absolute; left:5%; right: 0%; top:15px; z-index:2;}
        .trackercoolr>li>div:first-child{padding:22px;background-color:#fff;color: #fff;width: 29px; text-align: center; line-height: 29px; font-size: 12px; border-radius: 50% }
        .trackercoolr>li>div:last-child{margin-top:12px;font-weight: 600}

    .trackercoolr>li:last-child{width: auto;}
    .trackercoolr>li:last-child:after{width: 0;}
 
    </style>
</head>


<body id="trackerpage">
    
    <?php include(tools::dir()->php."/header.php");?>
     
    <?php if($trackerIsValid){?>

    <style type="text/css"> 
        #trackerpage .header_a3g:after{background: linear-gradient(to bottom, #15194b,#3bb028 ,#3bb028);}
        
    </style>
    <div style="">
        <div style="background:#3bb028;padding:15px;
    position: relative;
    box-shadow: 0px 6px 5px 0px #3bb028;">
            <div class="tracker_container" >
                <br/><br/><br/>
            </div>
        </div>
        <div class="" style="background:#2c831c;padding:15px;
    box-shadow: 0px 6px 5px 0px #2c831c;">
            <br/>
             <ul class="trackercoolr tracker_container">
                <li>
                    <div></div>
                    <div>Order Placed</div>
                </li>
                <li>
                    <div></div>
                    <div>Processed</div>
                </li>
                <li>
                    <div></div>
                    <div>Shipped</div>
                </li>
                <li>
                    <div></div>
                    <div>Delivered</div>
                </li>
            </ul>
             <br/>
        </div>
    </div>
    <?php }?>

    <br>
 
    <div class="yjgfxh4yws tracker_container">
        <p>Track an Order Number ##:</p>
        <div class="trackknum">
            <input type="text" name="st" placeholder="# 12345 - 67890 - 12345 - 67890 - 12345" />
            <input type="button" name="bu" value="SEARCH" />
        </div>

        <?php if(!$trackerIsValid){?>
        <div class="mpshgpfoind">
            <div class="mpshgpfoindsvgwarn"><svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 478.125 478.125" xml:space="preserve"> <g> <g> <g> <circle cx="239.904" cy="314.721" r="35.878"/> <path d="M256.657,127.525h-31.9c-10.557,0-19.125,8.645-19.125,19.125v101.975c0,10.48,8.645,19.125,19.125,19.125h31.9 c10.48,0,19.125-8.645,19.125-19.125V146.65C275.782,136.17,267.138,127.525,256.657,127.525z"/> <path d="M239.062,0C106.947,0,0,106.947,0,239.062s106.947,239.062,239.062,239.062c132.115,0,239.062-106.947,239.062-239.062 S371.178,0,239.062,0z M239.292,409.734c-94.171,0-170.595-76.348-170.595-170.596c0-94.248,76.347-170.595,170.595-170.595 s170.595,76.347,170.595,170.595C409.887,333.387,333.464,409.734,239.292,409.734z"/> </g> </g> </g> </svg></div>
            <div>
                <h2><b># <?php echo tools::add_dashtoOrderID($processingOrderID, 5);?></b></h2>
                <p>No shipment with this tracking number found.</p>
            </div>
        </div>
        <?php }?>
    </div>

    <section>


    </section>

    <footer>
    <?php include(tools::dir()->php."/footer.php");?>

    </footer>


</body>
</html>
