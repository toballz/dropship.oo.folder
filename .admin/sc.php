<?php include_once("../../conf.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $headTitle=site::name." | Home"; include(tools::dir()->php."/head.php");?>
	<title></title>
	<style type="text/css">
		textarea,input{width: 100%;padding: 12px;margin: 12px}
		.jst4{width:1200px;margin: auto;padding:20px;background:yellow;}
		.jst4 .imagge>ul,.jst4 .collor>ul{display: flex;flex-wrap: wrap;}
		.jst4 .imagge>ul>li,.jst4 .collor>ul>li{width:165px;padding: 12px;position: relative;}
		.jst4 .imagge>ul>li>div,.jst4 .collor>ul>li>div{background:red;font-weight: 600;padding:9px 11px;position: absolute;right: 0;top: 0;border-radius:25px;cursor: pointer;font-size: 25px}
		input[type="submit"]{cursor: pointer;padding:26px}
	</style>
</head>
<body>
<pre><?php 
if (isset($_POST['ak'])) {
	$ar=json_decode($_POST['ak']);
	//print_r($ar);
}

if(isset($_POST['urlfrom']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['pictures']) && isset($_POST['upload'] )){

	$itemId=rand(9999,9999999999);
	$titler=mysqli_escape_string(db::conn(),trim($_POST['title']));
	$descri=mysqli_escape_string(db::conn(),trim($_POST['description']));
	$imagee=trim($_POST['pictures']);
	$pricce=mysqli_escape_string(db::conn(),trim($_POST['price']));
	$coolor=isset($_POST['colors'])?$_POST['colors']:NULL;
	$frmsto=mysqli_escape_string(db::conn(),trim($_POST['urlfrom']));

	$rr="INSERT INTO 
	`items` (`item_id`, `title`, `description`, `images`, `price`, `sale`, `size`, `color`, `tag`, `fromstore`, `dateadded`) 
	VALUES ('$itemId', '$titler', '$descri',  '$imagee', '$pricce', '[]', NULL, '$coolor', 'b', '$frmsto', current_timestamp());";
	if( db::stmt($rr))
	{
		exit("<script>    window.open('".site::url("domain")."/product/$itemId','_blank');//window.close();</script>");
	}else{
		echo $rr;
	};



	}else{
		print_r($_POST);
}
?></pre>
<br/>
	<section class="jst4" >
		<form method="post">

			<label>url from:<input type="text" name="urlfrom" value="<?php echo $ar->urlfrom;?>"></label>
			<label>Title:<input type="text" name="title" value="<?php echo $ar->title;?>"></label>
			<label>price:<input type="text" name="price" value="<?php echo $ar->price;?>"></label>
			<label>description:<textarea oninput="autoResize(this)" type="" name="description"> <?php echo $ar->description;?></textarea></label>
			<label class="imagge">picture: 
				<ul>
					<textarea name="pictures" oninput="autoResize(this)"><?php echo json_encode(str_replace("_80x80","_", $ar->images)) ;?></textarea>
					<?php foreach ($ar->images as $p=>$j) {
						echo '<li class="awa'.$p.'"><div onclick="removeimage(this,\''.str_replace("_80x80","_", $j).'\',\'.awa'.$p.'\')">x</div><img src="'.str_replace("_80x80","_", $j).'"/></li>';
					};?>
				</ul>
			</label>
			<label class="collor">Color: 
				<ul>
					<textarea name="colors" oninput="autoResize(this)"><?php echo json_encode(str_replace("_80x80","_", $ar->color)) ;?></textarea>
					<?php foreach ($ar->color as $p=>$j) {
						echo '<li class="color'.$p.'"><div onclick="removecolor(this,\''.str_replace("_80x80","_", $j).'\',\'.color'.$p.'\')">x</div><img src="'.str_replace("80x80","_", $j).'"/></li>';
					};?>
				</ul>
			</label>

			<input type="submit" name="upload">
		</form>
	</section>


</body>
</html>
