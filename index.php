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
 


 <section class="indexhome_container">

<style>
    .index_f_container{width:100%;height:340px;display:flex;gap:10px }
    .index_f_card{ overflow: hidden; min-width: 70px;height:100%;border-radius:30px;display:flex;align-items:flex-end;flex-grow:1;position:relative;transition:flex-grow 0.5s ease;}
     .index_f_card:hover{flex-grow:7;}

     .index_f_card > .index_f_img {
  position: absolute;
  inset: 0;height: 100%;
  object-fit: cover;
  object-position: center;
  filter: brightness(0.4);
  z-index: -1;
  transition: 1s ease all;
}
.index_f_card:hover > .index_f_img {
  filter: brightness(1);
  object--fit: contain;
}
</style>

<div class="index_f_container">
     
    <div class="index_f_card">
         <img class="index_f_img" data-srcimg="<?php echo tools::dir()->img;?>/jjjj.png"/>
         <div></div>
    </div>
    <div class="index_f_card">
         <img class="index_f_img" data-srcimg="<?php echo tools::dir()->img;?>/iojj.png"/>
         <div></div>
    </div>
    <div class="index_f_card">
         <img class="index_f_img" data-srcimg="<?php echo tools::dir()->img;?>/oji.png"/>
         <div></div>
    </div>
    <div class="index_f_card">
         <img class="index_f_img" data-srcimg="<?php echo tools::dir()->img;?>/oijj.png"/>
         <div></div>
    </div>
    <div class="index_f_card">
         <img class="index_f_img" data-srcimg="<?php echo tools::dir()->img;?>/jiii.png"/>
         <div></div>
    </div>



    <br>
</div>
 <br> <br>





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