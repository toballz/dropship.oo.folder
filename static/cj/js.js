!(function(){
//reload page after gaining back focus
window.addEventListener('focus', function() {
    location.reload();
});


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