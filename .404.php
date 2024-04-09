<?php include("./conf.php");?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <?php $headTitle=site::name." | 404 Not Found";include("ret/head.php");
    if(site::url("servername") !== "loccalhost"){
        include("ret/ads/popads.php");
    }
    if(site::url("servername") !== "loccalhost"){
        include("ret/ads/popads.php");
    }?>
</head>
<body>
	<header><?php include("ret/header.php");?></header>
	<h1 style="text-align:center;color: #fff;">This page is empty</h1>
	<video muted autoplay loop src="/ret/img/404space.mp4" style="width:100%;"></video>
	<footer><?php include("ret/footer.php");?></footer>
</body>
</html>