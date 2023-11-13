function showLoginModal () {

    let textSpace = document.getElementById("text-login-area");
    let loginSpace = document.getElementById("modal-forms-login");

    if (loginSpace.style.display = "none") {
        
        textSpace.style.display = "none";
        loginSpace.style.display = "flex"
        
        }

    else {

        textSpace.style.display = "flex";
        loginSpace.style.display = "none"

    }


}