<?php $loginSVG='<svg width="35px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 16C8 18.8284 8 20.2426 8.87868 21.1213C9.75736 22 11.1716 22 14 22H15C17.8284 22 19.2426 22 20.1213 21.1213C21 20.2426 21 18.8284 21 16V8C21 5.17157 21 3.75736 20.1213 2.87868C19.2426 2 17.8284 2 15 2H14C11.1716 2 9.75736 2 8.87868 2.87868C8 3.75736 8 5.17157 8 8" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
<path opacity="0.5" d="M8 19.5C5.64298 19.5 4.46447 19.5 3.73223 18.7678C3 18.0355 3 16.857 3 14.5V9.5C3 7.14298 3 5.96447 3.73223 5.23223C4.46447 4.5 5.64298 4.5 8 4.5" stroke="#fff" stroke-width="1.5"></path>
<path d="M6 12L15 12M15 12L12.5 14.5M15 12L12.5 9.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>';
$accountSVG='<svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="12" cy="9" r="3" stroke="#fff" stroke-width="1.5"/> <path d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/> </svg>';?>
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
.header_shopingbag>svg{height:32px;margin-right:4px;}
.header_shopingbag>div{display: flex; flex-direction: column;font-size: 12px;align-items: center;}
.header_shopingbag>div>.h_n{margin-top:3px; }
.header_shopingbag>div>.hd{border-radius:11px;background: red;padding:2.6px 10px 1px 8px;text-align: center;margin-top: 6px;font-weight:600}
.searchbtn{cursor: pointer;}

	.dh35,.ldi5{cursor:pointer;}
</style>


<header>

<br/>
<div class="header_a3g">


<div class="header_r5jj">
	<a href="<?php echo site::url('domain');?>" class="headerlogo"><img data-srcimg="<?php echo tools::dir()->img;?>/logo.jpg"/></a>
	<div class="header_rft7ik">
		<b class="header_shopingbag searchbtn">
			<svg width="70px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
		</b>
		<script>
			$(".searchbtn").click(function(){
				$("#searchnavbar").css("display","flex");
			});
		</script>


	
		<a class="header_shopingbag acc" href="<?php echo site::url("domain");?>/cart/">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 30 30"> <g> <g> <path fill="#fff" d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path> </g> </g></svg>
			<div>
				<span class="hd">0</span>
				<span class="h_n">Cart</span>
			</div>
		</a>

		<b class="header_shopingbag <?php echo (session::user()->id)?"dh35":"ldi5";?>" >
			<?php echo (session::user()->id)? $accountSVG: $loginSVG;?>
			<span><?php echo (session::user()->id)?"(5055)":"";?></span> 
			 
		</b>
		<script>
			$(".ldi5").click(function(){
				if($(".logina1").length>0){
					$(".logina1").css("display","flex");
					return;
				}
				<?php if(!session::user()->id){
					echo '$.get("'.site::url('domain').'/cart/checkout/?lke86j=e0gay3", function(data){
			        	$("body").append(data);
			    	});';
				}else{
					echo 'window.href.location="/user"';
				}?>

				//lke86je0gay3
			});
		</script>
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
			<b>X</b>
		</div>
	</div>
</nav>


<script>
	$(".searchnavbar_voidlef").click(function(){
		$("#searchnavbar").toggle();
	});
</script>