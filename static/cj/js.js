!(function(){
var bH = document.baseURI;

    //index carosel
    //hover1
  $('.index_f_1>div:nth-child(1)').hover(function(){
        // On hover, add the 'highlight' class
        $('.index_f_1>div').addClass('index_f_1_1');
    }, function(){
        // On hover out, remove the 'highlight' class
        $('.index_f_1>div').removeClass('index_f_1_1');
    });

    //hover2
  $('.index_f_1>div:nth-child(2)').hover(function(){
        // On hover, add the 'highlight' class
        $('.index_f_1>div').addClass('index_f_1_2');
    }, function(){
        // On hover out, remove the 'highlight' class
        $('.index_f_1>div').removeClass('index_f_1_2');
    });
 
//accoint page from[data-formpage] to[data-formpagereturn]
$('[data-formpage]').click(function(){
    loader.start(); var tt=$(this);
    setTimeout(function(){
        var ah=tt.attr("data-formpage"),avb=ah.split("//"),returnPageHtml=$('[data-formpagereturn="'+avb[1]+'"]');
        $.get(bH+"cart/checkout/?"+avb[0]+"=732", function(data){
            $(returnPageHtml).html(data);
        });
    },1000);
    loader.stop();
});



//go checkout page
$("#flam42").click(function(){
    if($('[name="readtnc"]:checked').length == 0){
        alert("Please read our terms anad conditions");
        return false;
    }
    loader.start();

  setTimeout(function() {
    $.post("a/ig/apy.php", {
         o:"paynow", 
         price:$(".cartv2 .reltoal>span:nth-child(2)").html(),
         colre: "red"

     }).done(function(data) {
         if(data.code == 301){
             window.location.href = data.message; 
         }else{
             alert(data.message); 
         }
       })
       .fail(function(jqXHR, textStatus, errorThrown) {
         console.error("addcart-failed:", textStatus, errorThrown); 
       }).always(function() {
             loader.stop();
        }); 
     },1000);

});

//carosel
        var t=$(".product_carosel"),atk=0,clen=$(".product_carosel>li").length -1;
    $(".pa9h").html("1/"+Math.abs(clen+1));
    $(".product_carosel_ga9a.r").click(function(){
        if(atk > -(clen*100)){
            atk=atk-100;
            t.css("left",atk+"%");
            $(".pa9h").html((Math.abs(atk/100)+1)+"/"+Math.abs(clen+1));
        }
    });
    $(".product_carosel_ga9a.l").click(function(){
        if(atk < 0){
            atk=atk+100;
            t.css("left",atk+"%");
            $(".pa9h").html((Math.abs(atk/100)+1)+"/"+Math.abs(clen+1));
        }
    });


        //descript/specific
        $(".product_sat_dispec_f").click(function(){
            // $(".product_sat_dispec_f").next().removeClass("o_display");
            if($(this).next().hasClass("o_display")){
                $(this).next().removeClass("o_display");
            }else{
                $(this).next().addClass("o_display");
            }

        });




    //add sub product quantity
    $(".product_d_m,.product_d_p").click(function(){
        var n=$(".product_d_n"),e=n.val(),k=parseInt(e)-1,g=parseInt(e)+1; 
             if($(this).attr("class") == "product_d_m"){
                if( e>1){n.val(k);}else{n.val(1);};
                if( e>10){n.val(10);}
             }else if($(this).attr("class") == "product_d_p"){
                if( e<10){n.val(g);}else{n.val(10);}
                if( e<1){n.val(1);}
             } 
    });


//discription displar review
    $("[data-plupla]").click(function(){
        $(".decrepaos_boddy>div").css({"opacity":0});
        setTimeout(function(){
            $(".decrepaos_boddy>div").css({"display":"none"});
        },100);

        var d=$(this);
        setTimeout(function(){
            $(d.attr("data-plupla")).css({"display":"block"});
            setTimeout(function(){
                $(d.attr("data-plupla")).css({"opacity":1});
            },50);
        },102);
    });





//product add cart
$(".product_sat_addcart").click(function(){
    loader.start();
setTimeout(function(){
    if($('input[name="product_color"]').length >0 && $('input[name="product_color"]:checked').length <= 0) {
        alert("select a color");
        return;
    }
    if($('.product_sat_quantity>input').val()>10){
        alert('Contact us for orders over 10 per item.');return;
    }
    if($('.product_sat_quantity>input').val()<1){
        alert('You must have more than 1 item');return;
    }

    var pid= document.querySelector('meta[name="adventure"]').getAttribute('content'),
    qui=$(".product_d_n").val(),
    colS=$('.product_sat_color input[name="product_color"]:checked'),
    col=(colS.length > 0)?colS.next("label").find("img").attr("src"):$(".product_carosel_f5:first-child>img").attr("src"),
    til=$(".product_sat_title").html();


$.post("a/ig/apy.php", {o:"addcart", piid: pid, qunt: qui,color:col,tile:til })
  .done(function(data) {
    if(data.code == 200){
        reloadStatic();
        $(".addedtocart_kej75_heaader").html($(".product_d_n").val()+" Item(s) Added to Cart");
        $(".addedtocart_kej75_1btitle").html($(".product_sat_title").html());
        var tt=$('.product_sat_color [name="product_color"]:checked');
        if(tt.length > 0){
            $(".addedtocart_kej75_1bbdyimg>img").attr("src",tt.next("label").find("img").attr("src") );
         }else{
            $(".addedtocart_kej75_1bbdyimg>img").attr("src",$(".product_carosel_f5:first-child>img").attr("src") );
         }
        $(".addedtocart_6f75").css("display","flex");
    }  
  }).fail(function(jqXHR, textStatus, errorThrown) {
    console.error("addcart-failed:", textStatus, errorThrown);
  }).always(function() {
    loader.stop();
  });

},500);
    loader.stop();
});

//share product
   $(".product_sat_share").click(async function(){ await navigator.share({ title: document.title, text: document.title, url: window.location.href,});});

   //img lazyload
    $("[data-srcimg]").each(function(){
        var ts=$(this);
        setTimeout(function(){
            ts.attr("src",ts.attr("data-srcimg"));
            ts.attr("data-srcimg","");
        },600);
    });



//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//end
}());  
  





////////////////////////////////////
///////////////////////////////////
/////////////////////////////////////
var loader={
    start: function(){$("body").append('<div class="loaderstartstop" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:1212;background: rgb(0 0 0 / 69%);display:flex;justify-content: center;align-items:center;">'+
    '<div style="height:95px;width:95px"><svg style="width:100%;height:100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="200" height="200" style="shape-rendering: auto; display: block; background: rgb(255, 255, 255);" xmlns:xlink="http://www.w3.org/1999/xlink"><g><rect x="19" y="19" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0s" calcMode="discrete"></animate>'+
'</rect><rect x="40" y="19" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.125s" calcMode="discrete"></animate>'+
'</rect><rect x="61" y="19" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.25s" calcMode="discrete"></animate>'+
'</rect><rect x="19" y="40" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.875s" calcMode="discrete"></animate>'+
'</rect><rect x="61" y="40" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.375s" calcMode="discrete"></animate>'+
'</rect><rect x="19" y="61" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.75s" calcMode="discrete"></animate>'+
'</rect><rect x="40" y="61" width="20" height="20" fill="#505378">'+
  '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.625s" calcMode="discrete"></animate>'+
'</rect><rect x="61" y="61" width="20" height="20" fill="#505378">'+
   '<animate attributeName="fill" values="#ffffff;#505378;#505378" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.5s" calcMode="discrete"></animate>'+
'</rect><g></g></g> </svg></div>'+
'</div>');},
    stop:function(){
        setTimeout(function(){
            $(".loaderstartstop").remove();
        },2000);
    }
}
var bH = document.baseURI;

//reload cart num
function reloadStatic(){
    // cart num
    $.post(bH+"a/ig/apy.php", {o:"getsession", re1: "cartnum"}).done(function(data) {
        if(data.code == 200){
            $("span.hd").html(data.message.cartnum);
        }else{
            alert("#3777-4777");
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("session null:", textStatus, errorThrown);
    });

}

//delete from cart
function deletefromcart(th,sa){
    loader.start();
    setTimeout(function(){

        $.post("a/ig/apy.php", {o:"deltecart", cartid:sa, colre: th})
        .done(function(data) {
            if(data.code == 301){
                window.location.href = data.message;
            }  
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.error("addcart-failed:", textStatus, errorThrown);
        }).always(function() {
            loader.stop();
        }); 
    },1000);
}

//logout
function justlogout(){
    $.post(bH+"a/ig/apy.php", {o:"justlogout"}).done(function(data) {
        if(data.code == 301){if(data.message == "reload"){location.reload();}} 
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("session null:", textStatus, errorThrown);
    });
};





$(document).ready(function(){
    
    reloadStatic();


});