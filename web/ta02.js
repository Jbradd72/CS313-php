function buttonClick() {
    var button = document.getElementById("button");
    
    var text = button.innerHTML
    
    if(text == "Clicked!"){button.innerHTML = "Click Me!"}
    else{button.innerHTML = "Clicked!";}
}

function colorChange(){
    var input = document.getElementById("colorInput");
    document.getElementById("div1").style.backgroundColor = input.value;
    
}

function jqueryColor(){
    var div = $("#div2");
    div.css("background-color", $("#jqueryChange").val());
        }

function jqueryFade(){
    var div = $("#div3");
    div.fadeTo(1000, 0, function(){
    div.css("background-color", $("#colorInput3").val());
    div.fadeTo(750, 1);
        });
}
