<?php include_once("../co.php");include_once("../i/var__function.php");if(isset($_GET['ids'])){
if(isset($_GET['rek']) && !empty($_GET['rek'])){
  $rr=db::filter($_GET['rek']);
}//else{exit("Receipt ID not found!");}
?><!DOCTYPE html>
<html class="js shopify-features__smart-payment-buttons--enabled" lang="en">
  <head>
    <style type="text/css">.hsy24d>div{display:flex;justify-content:space-between;text-align:left;}/;</style>
  </head>
  <body>
    <section style="max-width:700px;border:1px dashed #ccc;margin:auto; font-size:16.9px;font-family:sans-serif;"><div style="padding:12px">
      <div style="padding:23px;background:#bcbcbc;"></div>
      <h3><?php echo site::name;?></h3>
      <div style="display:flex;justify-content:space-between;align-items:center;">
        <div>
            <div style="max-width:222px;"><?php echo site::address;?></div><div style="font-size:16px;"><BR>Contact Us: +1(224) 440-1819</div> 
            <div><br><b>Receipt NO#: </b><?php echo $_GET['ids'];?></div>
          </div>
          <div style="width:300px"><img style="width:100%;" src="<?php echo site::url(1);?>img/llogo.png"></div>
      </div>



<style type="text/css">
.ttble{border-collapse: collapse; width: 100%;}td,th{border-bottom:0.1px dashed#ccc;text-align:left;padding:8px;width:50%;}</style> <?php $rd=db::filter($_GET['ids']);$dbstmt=db::stmt("select * FROM schedulee WHERE `rida`='$rd' LIMIT 1");if(mysqli_num_rows($dbstmt)<1){exit("Receipt do not exist!");}$customerInfo=mysqli_fetch_assoc($dbstmt);?>

                  <hr><br>
                  <table style="padding:1px 23px;font-size:32px;width:100%;"><tr>
                          <td>Receipt Total:</td><td>$<?php echo number_format(50,2);?></td></tr></table>
                  <br><hr>
              <div style="margin-top:12px;max-width:449px;margin:auto;">

                
                  <div class="hsy24d">
                    <div><img style="width:100%" src="<?php echo site::url(1);?>img/<?php echo $customerInfo['image'];?>.jpg" /></div><br>
                      <table class="ttble">
                        <tr>
                          <td>Full Name: </td>
                          <td><?php echo $customerInfo['customername'];?></td>
                        </tr>
                        <tr>
                          <td>Phone Number: </td>
                          <td><a href="tel:<?php echo $customerInfo['phonne'];?>" target="_blank"><?php echo $customerInfo['phonne'];?></a></td>
                        </tr>
                        <tr>
                          <td>Hair Style: </td>
                          <td style="color:green;"><?php echo $customerInfo['hairstyle'];?></td>
                        </tr>
                        <tr>
                          <td>Arrival Time: </td>
                          <td><span style="color:green;"><?php echo $customerInfo['time'];?></span></td>
                        </tr>
                        <tr>
                          <td>Date:</td>
                          <td><span style="color:red;"><?php echo $customerInfo['date'];?></span></td>
                        </tr>
                        <tr>
                          <td>Time Range: </td>
                          <td><?php echo $customerInfo['timeRange']?></td>
                        </tr>
                        <tr>
                          <td>Price: </td>
                          <td><?php echo $customerInfo['price'];?></td>
                        </tr>
                      </table>
                  </div>
                       
                       <br><br><br>
            </div>


<br><Br>



      <div style="padding:23px;background:#bcbcbc;"></div></div>
    </section>
  </body>
</html><?php }?>