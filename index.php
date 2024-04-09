<?php include("./conf.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
    <style type="text/css">
        .main_container{width: 100%;
            max-width: 1300px;margin: auto;}

        .index_emg_c{  height: 280px;}
        .index_emg_c>img{ object-fit: cover;height: 100%}

        .indexhome_collection{
            display: flex;
            flex-direction: row;
            align-items: stretch;
            width: 100%;
        }
        .indexhome_collection>div{
            border-radius: 10px;overflow: hidden;
            margin:4px; 
            background: red;
        }
        .indexhome_collection>div>p{
            padding-top:2px;
            margin:9px 0 1px;
            text-align:center;
        }




    .index_f_1{border-radius: 25px;background: yellowgreen;
        width: 100%;
        aspect-ratio: 32 / 9;
        display: flex;
        position: relative; 
        overflow: hidden;}

    .index_f_1>div{
        position: absolute;
        transition: all 0.6s ease 0s;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        cursor: pointer;
        height: 100%;
        top: 0px;
        bottom: 0px;
    }
    .index_f_1>div:nth-child(1){
        left: 0px;
        width: 25%;
        background-color: rgb(25, 29, 43);
        clip-path: polygon(0px 0px, 100% 0px, 70% 100%, 0px 100%);
    }
    .index_f_1>div:nth-child(2){ 
        left: 17.5%;
        width: 57.5%;
        background-color: rgb(46, 50, 69);
        clip-path: polygon(12.5% 0px, 100% 0px, 87.5% 100%, 0px 100%);
    } 
    .index_f_1>div:nth-child(3){ 
        left: 42.5%;
        width: 57.5%;
        background-color: rgb(46, 50, 69);
        clip-path: polygon(12.5% 0px, 100% 0px, 100% 100%, 0px 100%);
    }


/*hover 1*/
   .index_f_1>div.cycy1:nth-child(1){ 
    left: 0%;
    width: 54.5%; }

    .index_f_1> div.cycy1:nth-child(2){ 
    left: 48%;
    width: 31.5%;
    clip-path: polygon(20px 0px, 100% 0px, 80% 100%, 0px 100%);}

    .index_f_1> div.cycy1:nth-child(3){ 
    left: 72%;
    width: 27.5%; } 

/*hover 2*/
   .index_f_1>div.cycy2:nth-child(1){ 
   
    left: 0px;
    width: 25%; }

    .index_f_1> div.cycy2:nth-child(2){ 
  
    left: 17.5%;
    width: 57.5%;
}

    .index_f_1> div.cycy2:nth-child(3){ 
    left: 67%;
    width: 33%;clip-path: polygon(22.5% 0px, 100% 0px, 100% 100%, 0px 100%); } 


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
    
          $('.index_f_1>div:nth-child(1)').hover(function(){
                // On hover, add the 'highlight' class
                $('.index_f_1>div').addClass('cycy1');
            }, function(){
                // On hover out, remove the 'highlight' class
                $('.index_f_1>div').removeClass('cycy1');
            });


          $('.index_f_1>div:nth-child(2)').hover(function(){
                // On hover, add the 'highlight' class
                $('.index_f_1>div').addClass('cycy2');
            }, function(){
                // On hover out, remove the 'highlight' class
                $('.index_f_1>div').removeClass('cycy2');
            });
   
</script>
</footer>


</body>
</html>