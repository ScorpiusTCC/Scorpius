function passwordView() {
    let password = document.getElementById("password");
    let passwordImg = document.getElementById("password-img");

    if (password.type === "password") {

        password.type = "text";
        passwordImg.src = "../imgs/login/hide-password.png";

    } 
    
    else {

        password.type = "password";
        passwordImg.src = "../imgs/login/view-password.png";

    }
}