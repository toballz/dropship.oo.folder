<?php include("../../conf.php");?>
<?php
if(isset($_GET['i'])){
    $itemId=trim($_GET['i']);
    $gtt=db::stmt("SELECT * FROM `items_products` WHERE `item_id` = '$itemId' ");
    if(mysqli_num_rows($gtt) <1){exit(header("Location: ".site::url("domain")."/products/not-found.php"));}
    while ($getInfo=mysqli_fetch_assoc($gtt)){
        $ptitle= $getInfo['item_title']; 
        $pprice= $getInfo['item_price']; 
        $pimages= $getInfo['item_images']; 
        $pcolor= $getInfo['item_colors']; 
        $pdescription= $getInfo['item_description']; 
    }
}

$svgStar='<svg height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     viewBox="0 0 47.94 47.94" xml:space="preserve">
<path d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
    c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
    c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
    c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
    c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
    C22.602,0.567,25.338,0.567,26.285,2.486z"/>
</svg>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
    <meta name="adventure" content="<?php echo $itemId;?>"/>
 
    <style type="text/css">
         .product_container{ 
            width:100%;
            max-width: 1300px;
            margin: auto;
            padding:0 6px ;
    color: var(--bg-color);
        } 
        .product_a_e_f{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .pspeck{grid-row: 3;display: grid;grid-template-columns: repeat(3, 1fr);grid-gap: 10px;}
        @media  screen and (max-width: 800px) {
            .pspeck{grid-template-columns: repeat(2, 1fr);}
        }
        @media  screen and (max-width: 700px) {
            .product_a_e_f{display: block;}
            .product_a_el{height: 100%;max-height: 400px}
            .product_a_er,.product_a_el{width: 100% !important;margin-bottom: 12px}
            .product_a_eldp{height: 400px !important}
        .product_a_el{ min-height:250px !important;}
        }

        .product_a_el{ width:45%;padding: 12px; overflow:hidden;min-height: 550px; }
        .product_a_eldp{width:100%;height:100%;position:relative;overflow:hidden;}
        .product_a_er{ background: var(--grey); width:55%;padding: 12px; font-family: "Inter", sans-serif; }

        @media screen and (max-width: 999px){
        .product_a_el{ width:55%; }
        .product_a_er{   width:45%; }

        }

        .al0_2{font-size:10px;}

        .product_sat_title{font-weight: 600;font-size: 24px;margin-bottom: 10px;margin-top: 12px}


        .product_lootrating{display: flex; align-items: center; gap: 2px;margin-bottom:12px;
            flex-direction: row-reverse;justify-content: start;}
        .product_lootrating>label>svg,.product_lootrating>label{width: 19px; height: 19px;cursor:pointer;}
        .product_lootrating>label>svg>path{fill:#ebebeb; }
        .product_lootrating > input { display: none; }
        .product_lootrating > input:checked ~ label>svg>path {fill:#ffc107 !important; }
        .product_lootrating > input:hover ~ label>svg>path{fill:#d19e03 !important; }


        .product_sat_quantity_in{font-size:12px}
        .product_sat_quantity{display:flex;margin-bottom:12px;}
        .product_sat_quantity>span{font-weight: 600;padding:3px 17px;border: 1px solid #ebebeb;cursor:pointer;font-size: 18px;background:#fff;line-height: 30px;}
        .product_sat_quantity>input{ background:#fff;-moz-appearance: textfield; appearance: textfield; height:40px;width:60px;padding:3px 9px;border-left: 0;border-right: 0;text-align:center;border: 1px solid #ebebeb;outline: none;} 
        .product_sat_quantity>input::-webkit-outer-spin-button, .product_sat_quantity>input::-webkit-inner-spin-button {-webkit-appearance: none;margin: 0;}
        .product_sat_addcart{
            letter-spacing: 1.5px;font-size: 14px;font-weight: 600;width: 100%;border-radius: 25px;padding: 14.5px;margin-bottom: 12px;color:#fff;
                    background-color:var(--bg-color);border:1px solid;transition:all 0.3s ease}
        .product_sat_addcart:hover{background-color:#fff;border:1px solid var(--bg-color);color:#000;}

        .product_sat_share{border:0;background: transparent;font-size: 14px;padding:0; display: flex; min-height: 2.4rem;justify-content: space-around; align-items: center;}
      .product_f3haw>.product_f3haw_q{width: 124px;padding: 14px;border-bottom: 0;font-weight:600;background: var(--grey);}
      .product_f3haw_n{padding: 14px;display:flex;justify-content: space-around;flex-wrap:wrap; background: var(--grey);}
      .product_f3haw_n_haj4{width:252px;font-size:14px;padding:7px}
      .product_f3haw_n_haj4 p{white-space:nowrap;overflow:hidden;text-overflow: ellipsis;width:100%}


      
          
    .product_sat_color{display: flex;flex-wrap: wrap;}
    .product_sat_color>label{width:65px;margin-right:12px;margin-bottom:6px;border:2px solid var(--bg-color);cursor:pointer; }
    .product_sat_color input{display: none;}
    .product_sat_color input:checked+label{border: 2px solid #4bff52;}


        .product_carosel{position:absolute;left:0;top:0;width:100%;height:100%;transition:all 0.2s ease}
        .product_carosel_f5{position:absolute;left: 0;top: 0;height:100%;width: 100%; }
        .product_carosel_f5>img{height: 100%;object-fit: contain;}
        .product_carosel_ga9a{position:absolute;top:40%;height:120px;width:43px;z-index:12;border:0;opacity: 0.4;
    background-color: var(--bg-color);
    color: #ffe0e0;
    font-weight: 600;
    font-size: 47px;
}
        .product_carosel_ga9a.r{right:0;}
        .product_carosel_ga9a.l{left:0;}
        .pa9h{width:100%;text-align-last: center;}
    </style>
</head>


<body>
    
    <?php include(tools::dir()->php."/header.php");?>
     

 <section class="product_container">
 
    <div class="product_a_e_f">

        <div class="product_a_el">
            <div class="pa9h">0/0</div>
            <div class="product_a_eldp">
                <button class="product_carosel_ga9a l"><span class="material-symbols-outlined">arrow_back_ios</span></button>
                <ul class="product_carosel">
                    <?php $productcarosel=0;foreach(json_decode($pimages) as $ai){echo '<li class="product_carosel_f5" style="left:'.($productcarosel*100).'%"><img data-srcimg="'.$ai.'"/></li>';$productcarosel++;}?>
                </ul>
                <button class="product_carosel_ga9a r"><span class="material-symbols-outlined">arrow_forward_ios</span></button>
 

            </div>

        </div>

        <div class="product_a_er">
            <h1 class="product_sat_title"><?php echo $ptitle;?></h1>
 

            <div class="product_lootrating">
              <span class="loox-rating-label">&nbsp;(1)</span>
              <input type="radio" id="star1" name="rating" value="1">
              <label for="star1"><?php echo $svgStar;?></label>
              <input type="radio" id="star2" name="rating" value="2">
              <label for="star2"><?php echo $svgStar;?></label>
              <input type="radio" id="star3" name="rating" value="3">
              <label for="star3"><?php echo $svgStar;?></label>
              <input type="radio" id="star4" name="rating" value="4">
              <label for="star4"><?php echo $svgStar;?></label>
              <input type="radio" id="star5" name="rating" value="5">
              <label for="star5"><?php echo $svgStar;?></label>
             </div>
 

            <?php if($pcolor != null){?>
            <span class="product_sat_quantity_in">Color</span>
            <div class="product_sat_color"><?php $colorIndex=0;foreach(json_decode($pcolor) as $ac){?>
                <input type="radio" id="colorid<?php echo $colorIndex;?>" name="product_color"/>
                <label for="colorid<?php echo $colorIndex;?>"><img data-srcimg="<?php echo $ac;?>"/></label> 
            <?php $colorIndex++;}?></div>
            <?php }?>

            <span class="product_sat_quantity_in">Quantity</span>
            <div class="product_sat_quantity"><span class="product_d_m">-</span><input type="number" min="1" max="10" value="1" class="product_d_n" /><span class="product_d_p">+</span></div>

            <?php if(!session::user()->id || session::user()->ifnewuser){?>
                <div class="" style=";padding:13px;background: linear-gradient(90deg, rgb(221, 230, 254) 0%, rgb(247 249 254 / 0%) 100%);">
                    <div class=" "><b>10% off for new users</b></div>
                </div>
            <?php }?>
            <div class="" style="margin:10px 0;padding:13px;background: linear-gradient(90deg, rgb(222, 254, 221) 1%, rgb(247 249 254 / 0%) 100%);">
                    <div class=" "><b>9% cash back for <?php echo site::name;?>+ accounts</b></div>
            </div>

            <button class="product_sat_addcart">ADD TO CART • $<?php echo $pprice;?> USD</button>
            <span class="al0_2">Earn <b><?php echo explode(".",($pprice/3))[0];?></b> points with this item</span>

            <hr/>
            <button class="product_sat_share">
            <span class="material-symbols-outlined" style="font-size:17px;margin-right:4px"> upload </span>   Share   </button>
        </div>
    </div>


<style type="text/css">
    .decrepaos{ margin-top: 24px;padding: 12px;}
    .decrepaos_inner{}
    .product_a_description_header{margin-bottom:12px;
    display: flex;
    justify-content: space-around;}
    .product_a_description_header>li{background: #ebebeb; padding:20px 12px;cursor: pointer;margin:0 5px;width:100%}  
     [data-plupla="#re83vws"]{ display:flex;align-items:center}
     [data-plupla="#re83vws"]>span{margin:0 4px; }

     .decrepaos_boddy{ padding: 12px;min-height:222px}
    .decrepaos_boddy>div{transition:  opacity .15s linear;display: none;color:#fff;}
    #deropto{display: block;}
    #deropto>ul>li{margin-bottom:12px}




    .product_a_afterdisplay{display:flex;}
    .product_a_related{max-width: 33.3333333%;width:100%;}
    .product_a_description{max-width: 66.6666666%;width:100%;padding-right:30px;}
</style>

<div class="product_a_afterdisplay">
        <div class="decrepaos product_a_description"  >
            <div class="decrepaos_inner">
                <ul class="product_a_description_header" >
                    <li data-plupla="#deropto"><div>DESCRIPTION</div></li>
                    <li data-plupla="#shippi"><div>SHIPPING</div></li>
                    <li data-plupla="#re83vws">
                        <span class="material-symbols-outlined">grade</span> 
                        <span> REVIEWS ( 1 ) </span>
                        <span class="material-symbols-outlined">grade</span> 
                    </li>
                </ul>
            </div> 
            <div class="decrepaos_boddy">
                    <?php  $descriptionsNspec = json_decode($pdescription, true);?>
                <div id="deropto">
                    <b>DESCRIPTION</b><br/><br/>
                    <ul>
                        <li><?php echo $descriptionsNspec['Description'];?></li>
                    </ul>

                    <br/><br/>
                    <b>SPECIFICATIONS</b><br/><br/>
                    <ul class="pspeck">
                    <?php 
                    $specck="";
                    foreach ($descriptionsNspec['Specifications'] as $key => $value) {
                    $specck .= '<li><b>' . $key . ':</b> <span>' . $value . '</span></li>';
                    }
                    echo $specck;?>
                        
                    </ul>

                </div>
                <div id="shippi">
                    <b>Free Shipping / Return Policy</b><br/><br/>
                    <ul class="product_sat_dispec_o">
                        <li><b>✓</b> Free Shipping on orders <strong>above</strong> $60</li>
                    </ul> 

                </div>
                <div id="re83vws">review<br><br><br><br></div>
        
            </div>
        
        </div>

        <div class="product_a_related">
            <div style="box-shadow: 0 2px 15px -3px rgba(0,0,0,0.07), 0 10px 20px -2px rgba(0,0,0,0.04);padding: 13px">
                    <p>Related:</p>
                <ul>
                <?php $gttw=db::stmt("SELECT * FROM `items_products` WHERE `item_id` != '$itemId' ORDER BY `item_id` ASC LIMIT 5");
                while ($getInfo=mysqli_fetch_assoc($gttw)){
                    echo '<li style="margin-bottom:30px;">
                            <a href="/product/'.$getInfo["item_id"].'" style="display: flex;">
                                <div style=" width: 100px;margin-right:6px">
                                    <img data-srcimg="'.json_decode($getInfo["item_images"])[0].'" style="height:100%;object-fit: contain;" />
                                </div>
                                <div style="width: 100%;font-size:11px">'.$getInfo["item_title"].'</div>
                            </a>
                        </li>';
                } ?>
                </ul>
            </div>
        </div>



</div>


 <!--ggggg-->
  <br><br> 
    <br/>
    <div class="product_f3haw">
        <div class="product_f3haw_q">Suggested</div>
        <div class="product_f3haw_n">
            <?php $gttq=db::stmt("SELECT * FROM `items_products` WHERE `item_id` != '$itemId' ORDER BY `item_id` DESC LIMIT 5");
            while ($getInfo=mysqli_fetch_assoc($gttq)){ 

                echo '<a href="/product/'.$getInfo["item_id"].'" class="product_f3haw_n_haj4">
                        <div style=" height:292px; " ><img data-srcimg="'.json_decode($getInfo["item_images"])[0].'" style="height:100%;object-fit: contain;" /></div>
                        <p>'.$getInfo["item_title"].'</p>
                    </a>';
            } ?>
        </div>
    </div>
    <br>

 </section>
<div class="addedtocart_6f75">
    <style>
        .addedtocart_6f75{display:none;position:fixed;font-size:13px;top:0;left:0;width: 100%;height: 100%;z-index: 1212;background: rgb(15 16 27 / 68%); align-items: center;justify-content: center;}
        .addedtocart_kej75{width:100%;max-width: 416px; min-width:500px;background:#fff;height:100%;border-radius:20px;max-height:302px;overflow:hidden;}
        .addedtocart_kej75_heaader{background:var(--bg-color);color:#fff;text-align: center;font-size:21px;font-weight:600;padding:14px;}
        .addedtocart_kej75_1b{padding:12px;}
        .addedtocart_kej75_2b{display:flex;justify-content: space-between;padding:12px}
        .addedtocart_kej75_2b>div,.addedtocart_kej75_2b>a{border-radius:15px;text-align:center;min-width: 187px;padding:14px 10px;font-size:13px;background:#ebebeb;margin:2px;cursor:pointer;}
        .addedtocart_kej75_2b>div{background-color:var(--bg-color);color: #fff}
        .addedtocart_kej75_2b>a{background-color:#ba2;color: #fff}
        .addedtocart_kej75_1btitle{font-size: 16px;width:60%}
        .addedtocart_kej75_1bbdy{margin-top:16px;display: flex;justify-content: space-around;}
        .addedtocart_kej75_1bbdyimg{width:30%}
    </style>
    <div class="addedtocart_kej75">
            <div class="addedtocart_kej75_heaader">1 Item Added to Cart</div>
            <div class="addedtocart_kej75_1b">
                
                <div class="addedtocart_kej75_1bbdy">
                    <div class="addedtocart_kej75_1bbdyimg"><img src=""/></div>
                    <div class="addedtocart_kej75_1btitle"></div>
                </div>
            </div>
            <div class="addedtocart_kej75_2b">
                <div class="" onclick="location.reload();">Continue Shopping</div>
                <a href="<?php echo site::url("domain");?>/cart/">Go to Cart</a>
            </div>
    </div>
    
</div>

<footer>
<?php include(tools::dir()->php."/footer.php");?>

 
</footer>


</body>
</html>
