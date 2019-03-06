$(document).ready(function () {
    $("#form").on('submit', function (e) {
        $.ajax({
            type: "post",
            url: "AJAXupload.php",
            data: new FormData(this),
            beforeSend: function () {
                $(".preview").fadeout();
            },
            success: function (data) {
                $("#preview").html(data).fadeIn();
                $("#form")[0].reset();
            }
        });
    });
});