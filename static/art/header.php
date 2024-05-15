 
<style>
	header{background:var(--bg-color);}
	.headerlogo{width:87px} 
.header_a3g{padding: 10px 31px;position: relative;}
.header_a3g:after{content: '';
    display: table;
    width: 100%;
    height: 20px;
    background: linear-gradient(to bottom, #15194b,var(--body) ,var(--body));
    position: absolute;
    left: 0;
    bottom: 0px;}
.header_r5jj{display: flex;justify-content: space-between;}
 .searchbtn{cursor: pointer;}
 
	 .accountloggedin_dropdown{display:none; padding:12px;cursor:auto;position:absolute;top:52px;right:-10px;width:187px;height:122px;background:red;z-index:121}
</style>


<header>

<br/>
<div class="header_a3g">


<div class="header_r5jj">
	<a href="<?php echo site::url('domain');?>" class="headerlogo"><img data-srcimg="<?php echo tools::dir()->img;?>/logo.jpg"/></a>
 



<Style>
	.breadcrumb li{position:relative;
	float:right;
	padding:5px;
	border-radius:50px;
	position:relative;
	margin-left:-50px;
	margin-top:3px;
	background:#fff5e6;
	transition:all 0.2s ease-in-out;  
	}

	.breadcrumb li .dircha{cursor:pointer;
	overflow:hidden;
	border-radius:50px;
	transition:all 0.2s ease-in-out;
	text-decoration:none;
	width:80px;
	height:50px;
	color:red;
	background:#ffd699;
	text-align:center;
	display:flex;align-items:center;	line-height:50px;
	padding-left:52px;
	padding-right:33.33px;
	
	}
 

	.breadcrumb li .dircha .text{ display:none; opacity:0; }
	.breadcrumb li .dircha:hover .text{ display:block; opacity:1; }

	.breadcrumb li .dircha:hover{ width:210px; background:#ffccff; }
 
 

	.breadcrumb li:last-child:hover{ padding:0 3px;  }
 
	.breadcrumb li:last-child:hover .dircha{height:60px; }
	</Style>
	<ul class="breadcrumb">
		<li>
			<div class="dircha <?php echo (session::user()->id)?"accountloggedin":"accountloggedout";?> " >
				<span class="material-symbols-outlined" style="font-size:31px;color:#fff"> account_circle </span>
				<span class="text">Account<?php echo (session::user()->id)?"(5055)":"";?></span>
			</div>
					
			<?php echo (session::user()->id)?'<div class="accountloggedin_dropdown">
				<a href="/account/account--0" style="padding:12px;background: green;width: 100%;text-align: center;font-size: 16px;font-weight: 800;margin-bottom:15px">Account</a>
				<a href="javascript:void(0);" id="justlogout">Logout</a>
			</div>':'';?>
		</li>

        <li>
			<div class="dircha" onclick="location.href='<?php echo site::url('domain').'/cart/';?>'">
				<span class="material-symbols-outlined" style="font-size:31px;color:#fff"> shopping_bag </span>
				<span class="text">Cart(<?php echo tools::countQualCart("cartquantity")?>)</span> 
			</div>
      </li>

        <li>
			<div  class="searchbtn dircha">
				<span class="material-symbols-outlined" style="font-size:31px;color:#fff">search</span>
				<span class="text">SEARCH</span>
			</div>
      </li> 
    </ul>

  


</div>

<br/>

	
</div>
</header >
<style>
	#searchnavbar{
		position:fixed;display:none;justify-content: right;
		top:0;right:0;width:100%;height:100%;z-index: 1234;
	}
	#searchnavbar>.searchnavbar_voidlef{width:100%;background:rgb(21 25 75 / 51%);}
	#searchnavbar>.searchnavbar_inner{width:590px;background:red;height: 100%;padding:12px;}
</style>
<nav id="searchnavbar">
	<div class="searchnavbar_voidlef"></div>
	
	<div class="searchnavbar_inner">
		<div style="display:flex;justify-content:right;">
			<span class="material-symbols-outlined closex">close</span>
		</div>
	</div>
</nav>


<script>
	
	$(".searchbtn").click(function(){
				$("#searchnavbar").css("display","flex");
			});
			$(".searchbtn").click(function(){
				$("#searchnavbar").css("display","flex");
			});
	$(".searchnavbar_voidlef,.closex").click(function(){
		$("#searchnavbar").toggle();
	});

	$(".accountloggedin").click(function(){
		$(".accountloggedin_dropdown").toggle();
	});
	
</script>