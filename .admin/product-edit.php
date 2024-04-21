<?php include_once("../conf.php");?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Product Edit | Nalika - Material Admin Template</title>
    <?php include("./.o/head.php");?>
    <style type="text/css">
        .bhfdn7w42{margin-bottom:23px;}
        .bhfdn7w42 input{padding:30px 12px;font-size:16px}
        .i75ysr{color: #aff}
    </style>
    <style type="text/css"> 
        .ulimagge{padding:20px;}
        .ulimagge>ul,.jst4 .collor>ul{display: flex;flex-wrap: wrap;}
        .ulimagge>ul>li,.jst4 .collor>ul>li{width:165px;padding: 12px;position: relative;}
        .ulimagge>ul>li>div,.jst4 .collor>ul>li>div{background:red;font-weight: 600;padding:9px 11px;position: absolute;right: 0;top: 0;border-radius:25px;cursor: pointer;font-size: 25px}
     </style>
</head>

<body> 

    <?php include(".o/navbar.php");?>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php include("./.o/header.php");?>
            
            <div class="breadcome-area">
                <pre><?php 
                    if (isset($_POST['ak'])) {
                        $ar=json_decode($_POST['ak']);
                        //print_r($ar);
                    }else if(isset($_POST['urlfrom']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['tagss']) && isset($_POST['pictures']) && isset($_POST['upload'] )){

                        $itemId=rand(9,99999).rand(99,999999);
                        $titler=mysqli_escape_string(db::conn(),trim($_POST['title']));
                        $descri=mysqli_escape_string(db::conn(),trim($_POST['description']));
                        $imagee=trim($_POST['pictures']);
                        $pricce=mysqli_escape_string(db::conn(),trim($_POST['price']));
                        $coolor=isset($_POST['colors'])?$_POST['colors']:false;
                        $tagsss=trim($_POST['tagss']);
                        $frmsto=mysqli_escape_string(db::conn(),trim($_POST['urlfrom']));

                        $rr="INSERT INTO 
                        `items_products` (`item_id`, `item_title`, `item_description`, `item_images`, `item_price`, `item_on_sale`, `size`, `item_colors`, `item_tags`, `item_fromstore`, `item_dateadded`) 
                        VALUES ('$itemId', '$titler', '$descri',  '$imagee', '$pricce', '[]', NULL, NULLIF('$coolor',false), '$tagsss', '$frmsto', current_timestamp());";
                        if( db::stmt($rr))
                        {
                            exit("<script>window.open('".site::url("domain")."/product/$itemId','_blank');window.close();</script>");
                        }else{
                            echo $rr;
                        };



                    }else{
                           print_r($_POST);
                           exit("errrrrr post from aliexpress;\n");
                    }
                    ?>
                        
                    </pre>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Product Edit</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <form class="single-product-tab-area mg-b-30" method="post">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <!-- -->
                                            <div class="bhfdn7w42">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="URL FROM"  name="urlfrom" value="<?php echo $ar->urlfrom;?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Title" name="title" value="<?php echo $ar->title;?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="REGULAR Price" name="price" value="<?php echo $ar->price;?>">
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="SALES Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <textarea type="text" class="form-control" placeholder="DESCRIPTION" oninput="autoResize(this)" name="description"> <?php echo $ar->description;?></textarea>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="TAGS/Category" name="tagss">
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button" onclick="$('[href=\'#reviews\']').click();" class="btn btn-ctl-bt waves-effect waves-light m-r-10">NEXT - PICTURES
														</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ulimagge">
                                                <p class="i75ysr">PICTURES [ ]</p>
                                                <textarea name="pictures" class="form-control" oninput="autoResize(this)"><?php echo json_encode(str_replace("_80x80","_", $ar->images)) ;?></textarea>
                                                <br/>
                                                <ul><?php foreach ($ar->images as $p=>$j) {
                                                    echo '<li class="awa'.$p.'"><div onclick="removeimage(this,\''.str_replace("_80x80","_", $j).'\',\'.awa'.$p.'\')">x</div><img src="'.str_replace("_80x80","_", $j).'"/></li>';
                                                };?>
                                                </ul>
                                                <br/><br/>

                                                <p class="i75ysr">COLORS [ ]</p>
                                                <textarea class="form-control" name="colors" oninput="autoResize(this)"><?php echo json_encode(str_replace("_80x80","_", $ar->color)) ;?></textarea>
                                                <br/>
                                                <ul><?php foreach ($ar->color as $p=>$j) {
                                                    echo '<li class="color'.$p.'"><div onclick="removecolor(this,\''.str_replace("_80x80","_", $j).'\',\'.color'.$p.'\')">x</div><img src="'.str_replace("80x80","_", $j).'"/></li>';
                                                };?></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="card-block">
                                                        <div class="text-muted f-w-400">
                                                            <p>No reviews yet.</p>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <div class="txt-primary f-18 f-w-600">
                                                                <p>Your Rating</p>
                                                            </div>
                                                            <div class="stars stars-example-css detail-stars">
                                                                <div class="review-rating">
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="star5" name="rating" value="5">
                                                                        <label class="full" for="star5"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                                        <label class="half" for="star4half"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4">
                                                                        <label class="full" for="star4"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                                        <label class="half" for="star3half"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3">
                                                                        <label class="full" for="star3"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                                        <label class="half" for="star2half"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2">
                                                                        <label class="full" for="star2"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                                        <label class="half" for="star1half"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1">
                                                                        <label class="full" for="star1"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half">
                                                                        <label class="half" for="starhalf"></label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mg-b-15 mg-t-15">
                                                            <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="User Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group review-pro-edt mg-b-0-pt">
                                                            <button type="submit" name="upload" class="btn btn-ctl-bt waves-effect waves-light" style="width: 442px;padding: 28px;margin: auto;font-size: 36px;font-weight: 800;margin-top: 25px;">Submit
																</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include("./.o/footer.php");?>



    <script type="text/javascript">
         
    function autoResize(textarea) { 
    $(textarea).css("height" , 'auto'); 
    $(textarea).css("height" , $(textarea).prop('scrollHeight') +10+ 'px');
    }
autoResize($('textarea[name="description"]'));

function removeimage(e,o,w){
    var ttu = JSON.parse($('[name="pictures"]').val()); 
    var tt = ttu.filter(function(ttu) {
        return ttu !== o;
    });
    console.log(o);
    $('[name="pictures"]').val(JSON.stringify(tt)); 
    $(w).remove(); 
     
}
function removecolor(e,o,w){
    var ttu = JSON.parse($('[name="colors"]').val()); 
    var tt = ttu.filter(function(ttu) {
        return ttu !== o;
    });
    $('[name="colors"]').val(JSON.stringify(tt)); 
    $(w).remove(); 
     
} 
    </script>
</body>

</html>