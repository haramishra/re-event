$(document).ready(function () {
    var roll = $("#roll");
    roll.hover(function () {
        $(this).toggleClass('shadow-lg')

    });
    $('.popovers-to-be-activated').popover();
/*
    if ($('#topic').attr("readonly")) {
        $('#topic').attr({
            "data-toggle": "tooltip",
            "data-placement": "top",
            "title": "topic can not be changed"
        });
    }*/
//quotes with typed.js
    $.getJSON("https://favqs.com/api/qotd",
        function (data) {
            console.log(data.quote.body);
            var typed = new Typed('#typed', {
                strings: [data.quote.body+" - "+data.quote.author],
                typeSpeed: 40,

            });

        }
    );
    //set index.php according to newJOSN.json file

    $.getJSON("newJSON.json", 
        function(data) {
            $("#date-label").text("Presentation Dt: " + data.date);
            $("#resultDate").text("On Date: " + data.resultDate);
            if (data.topicType == "1") {
                $("#topic").attr("readonly", false);
            }
            else {
                $("#topic").attr("value", data.topic)
            }
        }
    );
});