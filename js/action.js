$(document).ready(function() {
    $(".jumbotron").mouseenter(function() {
        $(this).animate({
            height: '+=7px'
        });
    });
    $(".jumbotron").mouseleave(function() {
        $(this).animate({
            height: '-=7px'
        });
    });
    $('#find').click(function() {
        $.ajax({
            url: "data.php"
        }).done(function(data) {
            $('#action').html(data);
        });
    });
    $('#register').click(function() {
        $.ajax({
            url: "register.html"
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

//hide div when clicked again