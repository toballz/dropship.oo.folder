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

	.header_a3g_g5{max-width: 800px;margin: auto;display: flex;}
	.header_a3g_g5>input,.header_a3g_g5>button{
		width:100%;padding: 15px;
	    margin-bottom: 12px;font-size: 15px;outline: none;
	    border: 0;border-top-left-radius: 15px;
	}
	.header_a3g_g5>button{
		border-radius: 0;width: 132px;
	}
	.ldi5{cursor:pointer;}
</style>


<header>

<br/>
<div class="header_a3g">


<div class="header_r5jj">
	<a href="<?php echo site::url('domain');?>" class="headerlogo"><img src="<?php echo tools::dir()->img;?>/logo.jpg"/></a>
	<div class="header_rft7ik">
		<a class="header_shopingbag acc" href="<?php echo site::url("domain");?>/cart/">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 30 30"> <g> <g> <path fill="#fff" d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path> </g> </g></svg>
			<div>
				<span class="hd">0</span>
				<span class="h_n">Cart</span>
			</div>
		</a>

		<b class="header_shopingbag ldi5" >
			<svg   viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="12" cy="9" r="3" stroke="#fff" stroke-width="1.5"/> <path d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/> </svg>
			<span>Account</span>
		</b>
		<script>
			$(".ldi5").click(function(){
				if($(".logina1").length>0){
					$(".logina1").css("display","flex");
					return;
				}
				<?php if(!session::user()->id){
					echo '$.get("http://dropship.oo/cart/checkout/?lke86j=e0gay3", function(data){
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

	<form action="/search">
		<div class="header_a3g_g5">
			<input name="ia" type="text" />
			<button>Search</button>
		</div>
	</form>
</div>
</header >