$(document).ready(function () {
    $("#bio h3").click(function () {
        if ($("p b").css("display") == "none") {
            $("p b").show();
        } else {
            $("p b").hide();
        }
    });

    $("#quote h3").click(function () {
            if ($("blockquote").css("display") == "none") {
            $("blockquote").show();
        } else {
            $("blockquote").hide();
        }
    });
});
