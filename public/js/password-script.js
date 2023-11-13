function showPassword(student = true) {
    let passwordField = student ? document.getElementById("password-student") : document.getElementById("password-company");
    let passwordImg = document.getElementById("password-function");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordImg.src = "../assets/imgs/hide-password.png"; // Defina o caminho correto para a imagem de senha oculta
    } else {
        passwordField.type = "password";
        passwordImg.src = "../assets/imgs/view-password.png"; // Defina o caminho correto para a imagem de senha visível
    }
}