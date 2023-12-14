// MASCARA DE TELEFONE

function formatarTelefone(input) {
    // Remove caracteres não numéricos
    var numero = input.value.replace(/\D/g, '');
    
    // Verifica se o número é válido
    if (numero.length === 11) {
        input.value = '(' + numero.substring(0, 2) + ') ' + numero.substring(2, 7) + '-' + numero.substring(7);
    } else if (numero.length > 2) {
        input.value = '(' + numero.substring(0, 2) + ') ' + numero.substring(2, 6) + '-' + numero.substring(6, 10);
    } else {
        input.value = numero;
    }
}

// EXIBIR NIVEL DA SENHA

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
// EXIBIR NIVEL DA SENHA

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("senha").addEventListener("input", validarSenhaEmpresa);
});

function validarSenhaEmpresa() {
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

// MASCARA PARA DATA DE NASCIMENTO

function validarIdade(input, idadeMinima, idadeMaxima) {
    var value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    if (value.length === 8) { // Verifica se o campo está totalmente preenchido
        var dataFornecida = new Date(input.value);
        var hoje = new Date();
        var idade = hoje.getFullYear() - dataFornecida.getFullYear();

        // Ajusta a idade se o aniversário ainda não ocorreu este ano
        if (hoje.getMonth() < dataFornecida.getMonth() || 
            (hoje.getMonth() === dataFornecida.getMonth() && hoje.getDate() < dataFornecida.getDate())) {
            idade--;
        }

        if (idade < idadeMinima || idade > idadeMaxima) {
            alert('Por favor, insira uma data de nascimento válida.');
            input.value = ''; // Limpa o campo se a idade for inválida
        }
    }
}

// MASCARA CNPJ

function aplicarMascaraCNPJ(input) {
    var value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    var formattedValue = value;

    if (value.length > 2) {
        formattedValue = value.substring(0, 2) + '.' + value.substring(2);
    }

    if (value.length > 5) {
        formattedValue = value.substring(0, 2) + '.' + value.substring(2, 5) + '.' + value.substring(5);
    }

    if (value.length > 8) {
        formattedValue = value.substring(0, 2) + '.' + value.substring(2, 5) + '.' + value.substring(5, 8) + '/' + value.substring(8);
    }

    if (value.length > 12) {
        formattedValue = value.substring(0, 2) + '.' + value.substring(2, 5) + '.' + value.substring(5, 8) + '/' + value.substring(8, 12) + '-' + value.substring(12);
    }

    input.value = formattedValue;

}

// MASCARA IE

function aplicarMascaraIE(input) {
    var value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    var formattedValue = value;

    if (value.length > 3) {
        formattedValue = value.substring(0, 3) + '.' + value.substring(3);
    }

    if (value.length > 6) {
        formattedValue = value.substring(0, 3) + '.' + value.substring(3, 6) + '.' + value.substring(6);
    }

    if (value.length > 9) {
        formattedValue = value.substring(0, 3) + '.' + value.substring(3, 6) + '.' + value.substring(6, 9) + '.' + value.substring(9);
    }

    input.value = formattedValue;
}