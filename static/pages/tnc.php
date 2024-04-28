<?php include("../../conf.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
  
</head>

<body>
    <?php include(tools::dir()->php."/header.php");?>
    <section style="margin:auto;max-width:1000px;border:1px solid #ccc;padding:12px">
        <?php if($_GET['spage'] == "tnc"){?>
            <h2><?php echo site::url("servername");?> Terms and Conditions</h2>
            <br/>
            <i>Last updated on: April 28, 2024</i>
            <br/>
        <?php }?>



        <?php if($_GET['spage'] == "opt"){?>
        <?php }?>

    </section>
</body>


</html>