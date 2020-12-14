// Share
function fbShare(d,c,b){var a=(screen.height/2)-(b/2);var e=(screen.width/2)-(c/2);window.open("https://www.facebook.com/sharer/sharer.php?u="+d,"sharer","top="+a+",left="+e+",toolbar=0,status=0,width="+c+",height="+b)}

$(document).ready(function(){
// RWD Menu
    $("#mobilemenu, .closemenu").click(function(b){
        b.preventDefault();
        $('body').toggleClass('openmenu');
    });
});
