<<?php

function checkEmail(email) {


    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email)) {
       // alert('Please provide a valid email address');
        email.focus;
        return false;
    }
    else
        return true;
}


function myFunction() {
    var name = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (name == '' || email == '' || password == '' || name== null || email==null || password==null || checkEmail(email)== false) {
        if(checkEmail(email)== false)
            alert('Please provide a valid email address');
        else
        alert("Please Fill All Fields")
    } else {
// AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "registeration.php",
            data: $('#form').serialize(),
            cache: false,
            success: function(html) {
                alert(html);
            }
        });
    }
    return false;
}


?>
