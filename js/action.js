$(document).ready(function() {
    $('#login').click(function() {
        $.ajax({
            url: "login.php"
        }).done(function(data) {
            $('#action').html(data);
        });
    });
    $('#reg').click(function() {
        $.ajax({
            url: "register.php"
        }).done(function(data) {
            $('#action').html(data);
        });
    });
});



$(document).ready(function() {
    $('#book').click(function() {
        $.ajax({
            url: "https://teamprojectgroupi-elmobai.c9users.io/booking.php"
        }).done(function(data) {
            $('#magicdiv').html(data);
        });
    });
    $('#register').click(function() {
        $.ajax({
            url: "https://teamprojectgroupi-elmobai.c9users.io/room.php"
        }).done(function(data) {
            $('#magicdiv').html(data);
        });
    });
});

  $('#score').click(function() {
        $.ajax({
            url: "score.php"
        }).done(function(data) {
            $('#action').html(data);
        });
    });
    
//hide div when clicked again