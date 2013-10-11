var header = $("#position");
$(document).scroll(function(e) {
    if($(this).scrollTop() > $("#banner").height()+20) {
        header.css({"position" : "fixed", "top" : "20"});
    } else {
        header.css("position", "relative");
    }
});