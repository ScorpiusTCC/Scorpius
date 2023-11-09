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