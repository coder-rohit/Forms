$(document).ready(function () {


    $("#submit").click(function () {
        var fname = $('#fname').val();
        var tel = $('#tel').val();
        var email = $('#email').val();

        if (fname == "") {
            $('#err').html("Please enter username");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }

        if (tel == "") {
            $('#err').html("Please enter your Phone Number");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }
       
        if (email == "") {
            $('#err').html("Please enter your Email");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }
        
    });
});