function showPassword () {

    let password = document.getElementById("password-student");
    let password_img = document.getElementById("password-function");

    if (password.type == "password") {

        password.type = "text";
        password_img.scr = "../assets/imgs/hide-password.png"

    }

    else {

        password.type = "password";
        password_img.scr = "../assets/imgs/view-password.png"

    }


}