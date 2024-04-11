<?php include("./conf.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
    <style type="text/css">

    </style>
</head>


<body>
    
    <?php include(tools::dir()->php."/header.php");?>
     
<br><br><br>
 


 <section class="main_container">

<div class="index_f_1">
    
    <div>
        <div><img src="<?php echo tools::dir()->img;?>/gpugpu.jpg"/></div>
    </div>
    <div>
        <div><img src="<?php echo tools::dir()->img;?>/gpugpu.jpg"/></div>
    </div>
    <div>
        <div><img src="<?php echo tools::dir()->img;?>/gpugpu.jpg"/></div>
    </div>



    <br> <br> <br> <br> <br>
</div>
 <br> <br>




<div>
    <div class="indexhome_collection">
        <div style="flex: 1.5;">
            <div class="index_emg_c"><img src="<?php echo tools::dir()->img;?>/programmer_code.png"/></div>
            <p>programmer</p>
        </div> 
        <div style="flex: 2;">
            <div class="index_emg_c"><img src="<?php echo tools::dir()->img;?>/gammers_setup.jpg"/></div>
            <p>Gamers</p>
        </div>
        <div style="flex: 1.2;">
            <div class="index_emg_c"><img src="<?php echo tools::dir()->img;?>/crypto_bitcoin.jpg"/></div>
            <p>Crypto/blockchain</p>
        </div>
        <div style="flex: 1.4;">
            <div class="index_emg_c"><img src="<?php echo tools::dir()->img;?>/cool_gadgets.jpg"/></div>
            <p>Cool Gadgets</p>
        </div>
    </div>
</div>



 </section>


<footer>
<?php include(tools::dir()->php."/footer.php");?>

<script>

   
</script>
</footer>


</body>
</html>