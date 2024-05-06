<?php include_once("../co.php");
    if(isset($_GET['ords']) && strlen($_GET['ords']) <= 9){
    $irida=preg_replace('/[^a-zA-Z0-9]/', '', trim($_GET['ords'])); 
    }else{
    exit("No receipt exists!!!");
    }

    $gs= db::stmt("SELECT * FROM `schedulee` WHERE `rida`= '$irida' AND `haspaid`='1' LIMIT 1");
    if(mysqli_num_rows($gs) != 1){
        exit("The receipt does not exists!!!");
    }

    $gs_fetchassoc=mysqli_fetch_assoc($gs);
?>
<!DOCTYPE html>
<html>
<head> 
    
  <?php include(dirr."/i/head.php");?>
   
  <title>Your Appointmented Receipt | CocoHairSignature</title>
   
  <link rel="stylesheet" href="<?php echo site::url(1);?>/assets/web/assets/mobirise-icons/mobirise-icons.css"> 

  <style type="text/css">
                .ttble{border-collapse: collapse; width: 100%;}td,th{border-bottom:0.1px dashed#ccc;text-align:left;padding:8px;width:50%;}</style> Receipt do not exist!</div>
  
</head>
<body>
<?php include(dirr."/i/header.php");?>
<section data-bs-version="5.1" class="content5 cid-sRCtHKvscz" id="content5-q">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                 
            <div style="padding:12px">
                    <div style="padding:20px;background:#bcbcbc;"></div>
                    <h3><?php echo site::name;?></h3>
                    <div style="display:flex;justify-content:space-between;align-items:center;">
                        <div>
                            <div style="max-width:222px;"><?php echo site::address ;?></div>
                            <div style="font-size:16px;padding-top:12px">Call us: <?php echo site::phone;?></div> 
                            <div><br><b>Receipt NO#: </b><?php echo $irida;?></div>
                        </div>
                        <div style="width:300px"><img style="width:100%;" src="<?php echo site::url(1);?>/img/n/llogo.png"></div>
                    </div>


                    <div>
                    
                        <div style="width:400px;margin:auto;"><img src="<?php echo site::url(1)."/img/".$gs_fetchassoc['image'];?>.jpg?kyjthg" style="width:100%" /></div>
                    <table border="1">
                        <thead>
                            <tr>
                            <th>**</th>
                            <th>**</th>
                            <th>**</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td><b>Fullname</b></td>
                                <td></td>  
                                <td><?php echo $gs_fetchassoc['customername'];?></td>  
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td></td>  
                                <td><?php echo $gs_fetchassoc['email'];?></td>  
                            </tr>
                            <tr>  
                                <td><b>Phone Number</b></td>
                                <td></td>  
                                <td><?php echo $gs_fetchassoc['phonne'];?></td>  
                            </tr>
                            <tr> 
                                <td></td> 
                                <td></td>  
                                <td></td>  
                            </tr>
                            <tr> 
                                <td><b>Date</b></td>
                                <td></td>  
                                <td><?php $hss=new DateTime($gs_fetchassoc['date']);echo $hss->format('Y F jS l');?></td>  
                            </tr>
                            <tr> 
                                <td><b>Time</b></td>
                                <td></td>  
                                <td><?php echo date("g:i A", strtotime($gs_fetchassoc['time']));?></td>  
                            </tr>
                            <tr> 
                                <td><b>Price</b></td>
                                <td></td>  
                                <td><?php echo $gs_fetchassoc['price'];?></td>  
                            </tr>
                            <tr> 
                                <td><b>Time Range</b></td>
                                <td></td>  
                                <td><?php echo $gs_fetchassoc['timeRange'];?></td>  
                            </tr>
                            <tr> 
                                <td><b>Hair Style</b></td> 
                                <td></td>  
                                <td><?php echo $gs_fetchassoc['hairstyle'];?></td>  
                            </tr> 
                        </tbody>
                        </table>
                    </div>


                
            </div>





            </div>
        </div>
    </div>
</section>

 

 
  
  
  
</body>
</html>