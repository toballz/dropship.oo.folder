 
<style>
	header{background:var(--bg-color);}
	.headerlogo{width:87px}
	.header_rft7ik{display: flex;align-items: center;}
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
.header_shopingbag{color: #ccc;font-size:14px;display: flex;align-items: center;}
.header_shopingbag.acc{margin-right:19px;margin-bottom:5px;} 
.header_shopingbag>div{display: flex; flex-direction: column;font-size: 12px;align-items: center;}
.header_shopingbag>div>.h_n{margin-top:3px; }
.header_shopingbag>div>.hd{border-radius:11px;background: red;padding:2.6px 10px 1px 8px;text-align: center;margin-top: 6px;font-weight:600}
.searchbtn{cursor: pointer;}

	.a64irgsf,.ldi5{cursor:pointer;}
	.a64irgsf{position:relative;}
	.a64irgsf>.a64irgsf_droppeer{display:none;padding:12px;cursor:auto;position:absolute;top:52px;right:-10px;width:187px;height:122px;background:red;z-index:121}
</style>


<header>

<br/>
<div class="header_a3g">


<div class="header_r5jj">
	<a href="<?php echo site::url('domain');?>" class="headerlogo"><img data-srcimg="<?php echo tools::dir()->img;?>/logo.jpg"/></a>
	<div class="header_rft7ik">
		<b class="header_shopingbag searchbtn">
			<svg style="height:32px;margin-right:4px;" width="70px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
		</b>
		<script>
			$(".searchbtn").click(function(){
				$("#searchnavbar").css("display","flex");
			});
		</script> 
	
		<a class="header_shopingbag acc" href="<?php echo site::url("domain");?>/cart/">
			<span class="material-symbols-outlined" style="font-size:41px;color:#fff"> shopping_bag </span>
			<div>
				<span class="hd">0</span>
				<span class="h_n">Cart</span>
			</div>
		</a>

		<b class="header_shopingbag <?php echo (session::user()->id)?"a64irgsf":"ldi5";?> " >
			<span class="material-symbols-outlined" style="font-size:41px;color:#fff"> account_circle </span>
			<span><?php echo (session::user()->id)?"(5055)":"";?></span> 
			 
			<?php echo (session::user()->id)?'<div class="a64irgsf_droppeer">
				<a href="/account/" style="padding:12px;background: green;width: 100%;text-align: center;font-size: 16px;font-weight: 800;margin-bottom:15px">Account</a><a href="javascript:void(0);" onclick="justlogout();">Logout</a>
			</div>':'';?>
		</b>
	</div>
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
	$(".searchnavbar_voidlef,.closex").click(function(){
		$("#searchnavbar").toggle();
	});

	$(".a64irgsf").click(function(){
		$(".a64irgsf_droppeer").toggle();
	});
	
</script>