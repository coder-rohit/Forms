$(document).ready(function () {


    $("#submit").click(function () {
        var name = $('#name').val();
        var add = $('#address').val();
        var email = $('#email').val();
        var gender = $('#gender').val();
        var dob = $('#dob').val();
        var tel = $('#tel').val();
        var city = $('#city').val();
        var cod = $('#cod').val();
        var qual = $('#qual').val();

        if (name == "") {
            $('#err').html("Please enter username");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }
        if (add == "") {
            $('#err').html("Please enter Address");
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
        if ($("#gender:checked").length == 0) {
            $('#err').html("Please select your gender");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }

        if (dob == "") {
            $('#err').html("Please enter your dob");
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
        if (city == "") {
            $('#err').html("Please enter your City");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }
        if (cod == "") {
            $('#err').html("Please enter City Zip Code");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }
        if (qual == "") {
            $('#err').html("Please select your qualification");
            $('#form').addClass("animate__animated animate__shakeX");
            setTimeout(function () {
                $("#form").removeClass("animate__animated animate__shakeX");
            }, 800);
            return false;
        }

    });


});