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
        <div><img data-srcimg="<?php echo tools::dir()->img;?>/gpugpu.jpg"/></div>
    </div>
    <div>
        <div><img data-srcimg="<?php echo tools::dir()->img;?>/gpugpu.jpg"/></div>
    </div>
    <div>
        <div><img data-srcimg="<?php echo tools::dir()->img;?>/gpugpu.jpg"/></div>
    </div>



    <br> <br> <br> <br> <br>
</div>
 <br> <br>




<div>
    <div class="indexhome_collection">
        <div style="flex: 1.5;">
            <div class="index_emg_c"><img data-srcimg="<?php echo tools::dir()->img;?>/programmer_code.png"/></div>
            <p>programmer</p>
        </div> 
        <div style="flex: 2;">
            <div class="index_emg_c"><img data-srcimg="<?php echo tools::dir()->img;?>/gammers_setup.jpg"/></div>
            <p>Gamers</p>
        </div>
        <div style="flex: 1.2;">
            <div class="index_emg_c"><img data-srcimg="<?php echo tools::dir()->img;?>/crypto_bitcoin.jpg"/></div>
            <p>Crypto/blockchain</p>
        </div>
        <div style="flex: 1.4;">
            <div class="index_emg_c"><img data-srcimg="<?php echo tools::dir()->img;?>/cool_gadgets.jpg"/></div>
            <p>Cool Gadgets</p>
        </div>
    </div>
</div>


<style type="text/css">
    .index_f3haw_n{display:flex;}
</style>


<div> 
    <div class="indexhome_collection">
        <?php $gttw=db::stmt("SELECT * FROM `items_products` WHERE `item_id`='2627948511' OR `item_id`='11111200690' OR `item_id`='4165511427' OR `item_id`='1714836465' ORDER BY `item_id` ASC");

        function flexs($f3l2){ 
            switch ($f3l2) {
                case 0: return 1.5;break;
                case 1: return 2;break;
                case 2: return 1.2;break;
                default: return 1.4;
            }
        }
        $i=0;
        while ($getInfo=mysqli_fetch_assoc($gttw)){
            echo '<a href="/product/'.$getInfo["item_id"].'" style="flex: '.flexs($i).';"><div style=" height:292px " ><img data-srcimg="'.json_decode($getInfo["item_images"])[0].'" style="height:100%;object-fit: contain;" /></div><p>'.$getInfo["item_title"].'</p></a>';
        $i++;} ?>
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