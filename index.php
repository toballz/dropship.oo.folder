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
      
 <style>section { position: relative; }
.welcome-area {
    height: 800px;
    z-index: 1;
}
.shapes-container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden!important;
}
.bg-shape {
    position: absolute;
    height: 190%;
    width: 100%;
    display: block;
    border-radius: 120px;
    background: linear-gradient(-47deg, #F956CB 0%, #F74B54 100%);
    bottom: 0;
    right: 0;
    -webkit-transform: translate(35%,-28%) rotate(-35deg);
    transform: translate(35%,-28%) rotate(-35deg);
    z-index: 0;
}</style>

<section class=" welcome-area ">
    <div class="shapes-container">
        <div class="bg-shape"></div>
    </div>
    <div class=" r_container"  style="display:flex;align-items:center; height: 100%;"> 
        <div class="welcome-intro">
            <span class="d-inline-block text-capitalize font-italic fw-3 mb-2">The next generation landing page</span>
            <h1 class="text-capitalize">Get <span class="fw-3">Prolend</span> Product landing page</h1>
            <p class="my-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <div class="button-group store-buttons d-flex">
                <a class="btn prolend-primary" href="#">Get the App</a>
                <a class="btn prolend-primary style-two" href="#">Learn More</a>
            </div>
        </div> 
        <div class="welcome-thumb thumb-animated">
            <img src="assets/img/welcome/welcome-mockup.png" alt="">
        </div>
     </div>
</section> 
 <section class="r_container">

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