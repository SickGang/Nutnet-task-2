$(document).ready(function () {
    $("form").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: '../create.php',
            method: 'post',
            dataType: 'html',
            data: $(this).serialize(),
            success: function (data) {
                $('form')[0].reset();
                $('.alert-success').show("fast").html('Данные успешно отправлены!');
            },
            error: function (data) {
                $('.alert-danger').show("fast");
            }
        });
    });
    $(".upload").on('click', function () {
        $.ajax({
            url: '../upload.php',
            beforeSend: function () {
                $(".lds-dual-ring").show();
            },
            success: function (response) {
                $(".lds-dual-ring").hide();
                $('.alert-info').show("slow");
            },
            error: function (data) {
                $(".lds-dual-ring").hide();
                $('.alert-danger').show("fast");
            }
        });
    });
});
