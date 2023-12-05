document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("senha").addEventListener("input", validarSenha);
});

function validarSenha() {
    var senha = document.getElementById("senha").value;
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#$%@])(?!.*(.)\1{2})(?!.*(012|123|234|345|456|567|678|789|987|876|765|654|543|432|321|210))([a-zA-Z0-9#$%@]{8,})$/;

    if (senha.match(regex)) {
        exibirIndicador('Senha forte :D', 'green');
    } else {
        exibirIndicador('Senha insuficiente', 'red');
    }
}

function exibirIndicador(nivel, cor) {
    var indicador = document.getElementById("indicador");
    indicador.textContent = nivel;
    indicador.style.color = cor;
}

// FUNÇÃO DE MASCARA PARA CPF

function mascara(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 
 }

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("password").addEventListener("input", validarSenha);
});

function validarSenha() {
    var senha = document.getElementById("password").value;
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#$%@])(?!.*(.)\1{2})(?!.*(012|123|234|345|456|567|678|789|987|876|765|654|543|432|321|210))([a-zA-Z0-9#$%@]{8,})$/;

    if (senha.match(regex)) {
        exibirIndicador('Senha forte :D', 'green');
    } else {
        exibirIndicador('Senha insuficiente', 'red');
    }
}

function exibirIndicador(nivel, cor) {
    var indicador = document.getElementById("indicador");
    indicador.textContent = nivel;
    indicador.style.color = cor;
}

// FUNÇÃO DE MASCARA PARA CPF

function mascara(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 
 }


// SCRIPT PARA PREVIEW DE FOTO

// SCRIPT PARA PREVIEW DE FOTO

const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Escolha sua imagem de perfil";

// Verifique se há uma imagem existente
const existingImage = document.querySelector(".picture__image img");
if (existingImage) {
    pictureImage.appendChild(existingImage.cloneNode(true));
} else {
    pictureImage.innerHTML = pictureImageTxt;
}

inputFile.addEventListener("change", function (e) {
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if (file) {
        const reader = new FileReader();

        reader.addEventListener("load", function (e) {
            const readerTarget = e.target;

            const img = document.createElement("img");
            img.src = readerTarget.result;
            img.classList.add("picture__img");

            pictureImage.innerHTML = "";
            pictureImage.appendChild(img);
        });

        reader.readAsDataURL(file);
    } else {
        pictureImage.innerHTML = pictureImageTxt;
    }
});