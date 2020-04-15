function userAvailability() {
    jQuery.ajax({
        url: "check-availability.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
            $("#user-availability-status1").html(data);
        },
        error: function () { }
    });
}