$(document).ready(function(){
    var originColor;
    var originOpacity;
    var boxCount = 1;
    var firstCheck = 1;
    first4hovers();
    createBox(boxCount, firstCheck);
})

function first4hovers() {
    $("#rightTopBox div") .hover(function () {
            originColor = $(this).css("background-color");
            originOpacity = $(this).css("opacity");
            $(this).css({ "background-color": "#ffffff", "opacity": "1" });
        }
        , function () {
            $(this).css({ "background-color": originColor, "opacity": originOpacity });
        });
}
function createBox(boxCount, firstCheck) {
    $(".button").on("click", function () {
        if((boxCount % 5) == 0 )
        {
            if (firstCheck ==1)
            {
                firstCheck = 0;
            }
            else {
                $(".Main3").css("height", "+=250");
            }
            boxCount = 1;
        }
        $(".Main3") .append("<div></div>") .find("div:last") .css("opacity", Math.random()).hover(function () {
                originColor = $(this).css("background-color");
                originOpacity = $(this).css("opacity");
                $(this).css({ "background-color": "#ffffff", "opacity": "1" });
            }
            , function () {
                $(this).css({ "background-color": originColor, "opacity": originOpacity });
            });
        boxCount++;
    });
}