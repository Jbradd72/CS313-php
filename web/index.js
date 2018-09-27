$(document).ready(function(){
    $("#bio h3").hover(function(){
        $("p b").show();
    });
    
     $("#quote h3").hover(function(){
        $("blockquote").show();
    });
});