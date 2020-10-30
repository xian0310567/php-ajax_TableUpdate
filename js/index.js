$(document).ready(function() {
    setInterval(function() {
        $.ajax({
            url : "source_server_text.php",
            type : "post",
            data: $("form").serialize(),
        }).done(function(data) {
            $("#input_data").html(data);
        })
    }, 500)
})