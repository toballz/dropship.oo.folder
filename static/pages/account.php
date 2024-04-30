<?php include("../../conf.php");?>
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
  </style>
 <section class=" " style="max-width:1200px;width:100%;margin:auto;padding:84px 0">
    <div class="account__container  " >
        <div class="account-menu" style="width:270px">
            <p style="padding-left:12px; font-size:19px"> My account </p>
            <a class="accmenuli accmenuliacv" href="javascript:void(0);" data-formpage="orderhistory//showher">
                <span class="material-symbols-outlined">package_2</span><span>Order history</span>
            </a>
            <a class="accmenuli" href="javascript:void(0);" data-formpage="addresshistory//showher" >
                <span class="material-symbols-outlined">cottage</span><span>Addresses</span>
            </a>
            <a class="accmenuli" href="javascript:void(0);" data-formpage="tracker//showher" >
                <span class="material-symbols-outlined">local_shipping</span><span>Tracker</span>
            </a>
            <a class="accmenuli" href="javascript:void(0);" onclick="justlogout();">
                <span class="material-symbols-outlined"> logout </span><span>Log out</span>
            </a>
        </div>

        <div class=" " style="background:var(--grey1);width:100%;padding:12px;border-radius:15px;" data-formpagereturn="showher">
            <p style="font-size:18px;margin-top:calc(1em - 12px);"> Order history </p>
            
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
    </script>

    <footer><?php include(tools::dir()->php."/footer.php");?></footer>

</body>
</html>