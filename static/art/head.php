<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- e -->
<title><?php if(isset($headTitle)){echo $headTitle;}else{$a="@@@^^no title%";echo $a;die($a);}?></title>
<base href="<?php echo site::url("domain");?>">
<link rel="shortcut icon" href="/favicon.ico?<?php echo $reloadStatic;?>">
<link rel="icon" type="image/x-icon" href="/favicon.ico?<?php echo $reloadStatic;?>">
<?php if(isset($headCanonical)){echo $headCanonical;}else{?><link rel="canonical" href="<?php echo site::url("domain").explode("?",site::url("uri"))[0];?>"/><?php }?>
<!-- 1 -->
<meta name="keywords" content="<?php echo site::name;?>, bookmark, share files, online<?php echo (isset($headKeywords)?", ".$headKeywords:'');?>">
<meta http-equiv="refresh" content="660">
<script type="text/javascript">//setTimeout(function(){$("body").click();},2*1000);</script>
<meta name="robots" content="all">
<meta name="revisit-after" content="1 days">
<!--<meta content="dark" name="color-scheme">-->
<meta name="theme-color" content="#151d3d">
<meta name="description" content="<?php echo (isset($headDescription)?$headDescription:site::name.' app, designed with user convenience in mind lets you create a simple bookmark effortlessly. It offers a user-friendly interface that allows you to easily upload files and data with just a few clicks. Additionally, the application provides a seamless experience for saving data, enabling you to quickly and efficiently bookmark link and upload files so you can continue from where you left off from another device.');?>">
<!-- a -->
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="true">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script type="text/javascript" src="/<?php echo tools::dir()->cssjs;?>/jq.js"></script>
<link rel="stylesheet" href="/<?php echo tools::dir()->cssjs;?>/css.css?<?php echo $reloadStatic;?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- t -->
<style type="text/css"> </style>
<script>;</script> 
<?php echo isset($_SERVER['HTTP_REFERER'])?'<meta name="reft" content="'.$_SERVER['HTTP_REFERER'].'" />':'';?>