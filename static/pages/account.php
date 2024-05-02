<?php include("../../conf.php");



$trp=explode("--",$_GET['pager']); 
$pager0=(isset($trp[0]))?trim($trp[0]):false;
$pager1=(isset($trp[1]))?trim($trp[1]):false;

if(!session::user()->id){
    if($pager0 != "tracking"){
        header("LOCATION: /?r=logout");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?> 
 
    <style type="text/css"> 
        body{ font-family: "Inter", sans-serif;}
    
    </style>

</head>


<body>
    <header><?php include(tools::dir()->php."/header.php");?></header>
  <style>
    .account__container{display:flex;flex-flow: row;padding:12px;column-gap:1.2rem;} 

    .accmenuli{padding:14px;background:var(--grey1);margin-bottom:12px;border-radius:15px;display:flex;align-items:center;position:relative;}
    .accmenuli{background:var(--grey);}
    .accmenuli:hover{background:var(--grey1) !important;}
    .accmenuliacv{background:var(--grey1) !important;}
    .accmenuli>span{margin-right:4px;color:#3182ce}
    .accmenuli:after{content: "";display: table;width: 40px;position: absolute;top: 20px;background: inherit;right: -30px;z-index: -1;height: 12px;}
    .ashowerdiv_titlr{font-size:18px;margin-top:calc(1em - 12px);border-bottom:1px solid var(--body);padding-bottom:10px}
    .ashowerdiv{background:var(--grey1);width:100%;padding:12px;border-radius:15px;}
    .ashowerdiv>.ashowerdiv_titlr{font-size:18px;margin-top:calc(1em - 12px);}
  </style>
 <section class=" " style="max-width:1200px;width:100%;margin:auto;padding:84px 0">
    <div class="account__container  " >
        <div class="account-menu" style="width:270px">
            <p style="padding-left:12px; font-size:19px"><?php echo ($pager0=="tracking")?" Tracker ":" My account ";?></p>
            <a class="accmenuli <?php echo ($pager0=="tracking")?"":"accmenuliacv";?>" href="javascript:void(0);" data-fo<?php echo (session::user()->id && ($pager0 !="tracking"))?"r":"";?>mpage="orderhistory//showher">
                <span class="material-symbols-outlined">package_2</span><span>Order history</span>
            </a>
            <a class="accmenuli" href="javascript:void(0);" data-formpag<?php echo (session::user()->id && ($pager0 !="tracking"))?"":"r";?>e="getSipiihig//showher" >
                <span class="material-symbols-outlined">cottage</span><span>Address</span>
            </a>
            <a class="accmenuli <?php if($pager0=="tracking"){echo "accmenuliacv aasbsd";}?>" href="javascript:void(0);" data-formpage="tracker:<?php echo $pager1;?>//showher" >
                <span class="material-symbols-outlined">local_shipping</span><span>Tracker</span>
            </a>
            <?php if(session::user()->id){?><a class="accmenuli" href="javascript:void(0);" onclick="justlogout();">
                <span class="material-symbols-outlined"> logout </span><span>Log out</span>
            </a><?php }?>
        </div>

        <div class="ashowerdiv"  data-formpagereturn="showher">
            <p class="ashowerdiv_titlr"><?php echo ($pager0=="tracking")?" Loading Tracker ..... ":" Order History ";?></p>
            
            <div >

            </div>
        </div>

 
    </div>
 </section>

    <script>
        $('.accmenuli').click(function(){
            $(".accmenuli").removeClass("accmenuliacv");
            $(this).addClass("accmenuliacv");
        });
        

        setTimeout(function(){
            $(".accmenuliacv.aasbsd").click();
        },600);
    </script>

    <footer><?php include(tools::dir()->php."/footer.php");?></footer>

</body>
</html>