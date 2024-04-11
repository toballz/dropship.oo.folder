<?php include("../../conf.php");?>
<?php if(isset($_GET['i'])){
$gtt=db::stmt("SELECT * FROM `items` WHERE `item_id` = '".$_GET['i']."' ");
while ($getInfo=mysqli_fetch_assoc($gtt)){
                $ptitle= $getInfo['title']; 
                $pprice= $getInfo['price']; 
                $pimages= $getInfo['images']; 
                $pcolor= $getInfo['color']; 
                $pdescription= $getInfo['description']; 
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
 
    <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .product_container{ 
            width:100%;
            max-width: 1470px;
            margin: auto;
            padding:0 6px ;
        }


        .product_a_e_f{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .product_a_el{
            width:50%;padding: 12px; overflow:hidden;
        }
        .product_a_er{
            width:50%;padding: 12px;
            font-family: "Poppins", sans-serif;
        }


        .al0_2{font-size:10px;}

        .product_sat_title{font-weight: 600;font-size: 24px;margin-bottom: 10px}


        .product_lootrating{display: flex; align-items: center; gap: 2px;margin-bottom:12px;
            flex-direction: row-reverse;justify-content: start;}
        .product_lootrating>label>svg,.product_lootrating>label{width: 19px; height: 19px;cursor:pointer;}
        .product_lootrating>label>svg>path{fill:#ccc; }
        .product_lootrating > input { display: none; }
        .product_lootrating > input:checked ~ label>svg>path {fill:#ffc107 !important; }
        .product_lootrating > input:hover ~ label>svg>path{fill:#d19e03 !important; }


        .product_sat_quantity_in{font-size:12px}
        .product_sat_quantity{display:flex;margin-bottom:12px}
        .product_sat_quantity>span{font-weight: 600;padding:3px 17px;border: 1px solid #ccc;cursor:pointer;font-size: 18px}
        .product_sat_quantity>input{-moz-appearance: textfield; appearance: textfield; padding:3px 9px;border-left: 0;border-right: 0;text-align:center;border: 1px solid #ccc;outline: none;} 
        .product_sat_quantity>input::-webkit-outer-spin-button, .product_sat_quantity>input::-webkit-inner-spin-button {-webkit-appearance: none;margin: 0;}
        .product_sat_addcart{
            letter-spacing: 1.5px;font-size: 14px;font-weight: 600;width: 100%;border-radius: 25px;padding: 14.5px;margin-bottom: 12px;color:#fff;
                    background-color:var(--bg-color);border:1px solid;transition:all 0.3s ease}
        .product_sat_addcart:hover{background-color:#fff;border:1px solid var(--bg-color);color:#000;}

        .product_sat_share{border:0;background: transparent;font-family: "Poppins", sans-serif;font-size: 14px;padding:0; display: flex; min-height: 2.4rem;justify-content: space-around; align-items: center;
        }

        .product_sat_dispec{ }
        .product_sat_dispec_f{
            padding:8px 12px;font-size: 16px;cursor: pointer;background: #ccc;
            display: flex;align-items: center;font-weight: 600;margin-bottom:1px; 
        }
        .product_sat_dispec_o{
            transition:all 0.2s ease;background-color:#f9f9f9;box-shadow:-3px 6px 9px 0 rgba(0,0,0,0.2);padding:0;height:0;letter-spacing:1.1px;line-height:19px;visibility:hidden;
        }
        .product_sat_dispec_o.o_display{visibility:visible;padding:12px 16px;height:auto;margin-bottom:12px;}
        .product_sat_dispec_o pre{white-space:pre-wrap;margin:0}
        ul.product_sat_dispec_o{font-size:13px}
        ul.product_sat_dispec_o>li{list-style-type:initial;margin-left:21px}




        .product_carosel{position:absolute;left:0;top:0;width:100%;transition:all 0.2s ease}
        .product_carosel_f5{position:absolute;left: 0;top: 0;height:540px;width: 100%;
    }
        .product_carosel_f5>img{height: 100%;object-fit: contain;}
        .product_carosel_ga9a{position:absolute;top:40%;height:120px;width:43px;z-index:12;border:0;background-color:#ccc}
        .product_carosel_ga9a.r{right:0;}
        .product_carosel_ga9a.l{left:0;}
        .pa9h{width:100%;text-align-last: center;}
    </style>
</head>


<body>
    
    <?php include(tools::dir()->php."/header.php");?>
     
    


<br><br><br>
 


 <section class="product_container">
 
    <div class="product_a_e_f">

        <div class="product_a_el">
            <div class="pa9h">0/0</div>
            <div style="width:100%;height:100%;position:relative;">
                <button class="product_carosel_ga9a l"><</button>
                <ul class="product_carosel">
                    <?php $productcarosel=0;foreach(json_decode($pimages) as $ai){echo '<li class="product_carosel_f5" style="left:'.($productcarosel*100).'%"><img src="'.$ai.'"/></li>';$productcarosel++;}?>
                </ul>
                <button class="product_carosel_ga9a r">></button>

<script type="text/javascript">
    var t=$(".product_carosel"),atk=0,clen=$(".product_carosel>li").length -1;
    $(".pa9h").html("1/"+Math.abs(clen+1));
    $(".product_carosel_ga9a.r").click(function(){
        if(atk > -(clen*100)){
            atk=atk-100;
            t.css("left",atk+"%");
            $(".pa9h").html((Math.abs(atk/100)+1)+"/"+Math.abs(clen+1));
        }
    });
    $(".product_carosel_ga9a.l").click(function(){
        if(atk < 0){
            atk=atk+100;
            t.css("left",atk+"%");
            $(".pa9h").html((Math.abs(atk/100)+1)+"/"+Math.abs(clen+1));
        }
    });
</script>

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
<style type="text/css">
    .product_sat_color{display: flex;flex-wrap: wrap;}
    .product_sat_color>label{width:65px;margin-right:12px;margin-bottom:6px;border:2px solid var(--bg-color);cursor:pointer;
    }
    .product_sat_color input{display: none;}
    .product_sat_color input:checked+label{border: 2px solid #4bff52;}
</style>

            <?php if($pcolor != null){?>
            <span class="product_sat_quantity_in">Color</span>
            <div class="product_sat_color"><?php $colorIndex=0;foreach(json_decode($pcolor) as $ac){?>
                <input type="radio" id="colorid<?php echo $colorIndex;?>" name="product_color"/>
                <label for="colorid<?php echo $colorIndex;?>"><img src="<?php echo $ac;?>"/></label> 
            <?php $colorIndex++;}?></div>
            <?php }?>

            <span class="product_sat_quantity_in">Quantity</span>
            <div class="product_sat_quantity"><span class="product_d_m">-</span><input type="number" min="1" max="10" value="1" class="product_d_n" /><span class="product_d_p">+</span></div>

            <button class="product_sat_addcart">ADD TO CART • $<?php echo $pprice;?> USD</button>
            <span class="al0_2">Extra <b><?php echo explode(".",($pprice/3))[0];?></b> points with this item</span>

            <hr/>
            <button class="product_sat_share"><svg width="21" height="12" viewBox="0 1 13 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M1.625 8.125V10.2917C1.625 10.579 1.73914 10.8545 1.9423 11.0577C2.14547 11.2609 2.42102 11.375 2.70833 11.375H10.2917C10.579 11.375 10.8545 11.2609 11.0577 11.0577C11.2609 10.8545 11.375 10.579 11.375 10.2917V8.125" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.14775 1.27137C6.34301 1.0761 6.65959 1.0761 6.85485 1.27137L9.56319 3.9797C9.75845 4.17496 9.75845 4.49154 9.56319 4.6868C9.36793 4.88207 9.05135 4.88207 8.85609 4.6868L6.5013 2.33203L4.14652 4.6868C3.95126 4.88207 3.63468 4.88207 3.43942 4.6868C3.24415 4.49154 3.24415 4.17496 3.43942 3.9797L6.14775 1.27137Z" fill="currentColor"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 1.125C6.77614 1.125 7 1.34886 7 1.625V8.125C7 8.40114 6.77614 8.625 6.5 8.625C6.22386 8.625 6 8.40114 6 8.125V1.625C6 1.34886 6.22386 1.125 6.5 1.125Z" fill="currentColor"></path></svg>   Share   </button>

            <div class="product_sat_dispec">
                <div class="product_sat_dispec_f"><svg fill="#000000" height="18" width="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -15 380 330" xml:space="preserve"> <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>Description / Specification</div>
                <div class="product_sat_dispec_o">
                    <pre><?php echo $pdescription;?></pre>
                </div>
            </div>
            <div class="product_sat_dispec">
                <div class="product_sat_dispec_f"><svg fill="#000000" height="18" width="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -15 380 330" xml:space="preserve"> <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>Free Shipping</div>
                <ul class="product_sat_dispec_o">
                    <li>Shipping free on orders <b>above</b> $50</li>
                </ul>
            </div>

        </div>
    </div>
  <br>

  <style type="text/css">
      .product_f3haw>.product_f3haw_q{
        border:1px solid #000; width: 124px;padding: 14px;border-bottom: 0;
      }
      .product_f3haw_n{
        padding: 14px;border:1px solid #000;
      }
  </style>
    <hr/>
    <div class="product_f3haw">
        <div class="product_f3haw_q">Related</div>
        <div class="product_f3haw_n"></div>
    </div>
    <br/>
    <div class="product_f3haw">
        <div class="product_f3haw_q">Suggested</div>
        <div class="product_f3haw_n"></div>
    </div>
    <br>

 </section>


<footer>
<?php include(tools::dir()->php."/footer.php");?>

<script>

        //descript/specific
        $(".product_sat_dispec_f").click(function(){
            // $(".product_sat_dispec_f").next().removeClass("o_display");
            if($(this).next().hasClass("o_display")){
                $(this).next().removeClass("o_display");
            }else{
                $(this).next().addClass("o_display");
            }

        });




    //add sub product quantity
    $(".product_d_m,.product_d_p").click(function(){
        var n=$(".product_d_n"),e=n.val(),k=parseInt(e)-1,g=parseInt(e)+1; 
             if($(this).attr("class") == "product_d_m"){
                if( e>1){n.val(k);}else{n.val(1);};
                if( e>10){n.val(10);}
             }else if($(this).attr("class") == "product_d_p"){
                if( e<10){n.val(g);}else{n.val(10);}
                if( e<1){n.val(1);}
             } 
    });


//product add cart
$(".product_sat_addcart").click(function(){

    if($('input[name="product_color"]').length >0 && $('input[name="product_color"]:checked').length == 0) {
        alert("select a color");
        return;
    }
    if($('.product_sat_quantity>input').val()>10){
        alert('Contact us for orders over 10 per customer.');return;
    }
    if($('.product_sat_quantity>input').val()<1){
        alert('You must have more than 1 item');return;
    }
    alert("submitted");
});



   $(".product_sat_share").click(async function(){

        try {
            await  navigator.share({
                    title: 'Title of shared content',
                    text: 'Content to share',
                    url: 'https://example.com',
                });
                console.log('Successfully shared');
            } catch (error) {
                console.error('Error sharing:', error);
            }

   });
</script>
</footer>


</body>
</html>