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






}());

 function reloadStatic(){
        var bH = document.baseURI;
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

$(document).ready(function(){
   
    reloadStatic();
});