// Recebe dados


// FUNCAO USADA NA TELA "mostraOqueDigitou.html"
// Ela pega o que o usuário digitou no ID "texto" e escreve na tela
// Jogando dentro do ID "textoDigitado"
function recebeTexto(){
    var textoDigitado = document.getElementById("texto").value;

    // Envia dados
    document.getElementById("textoDigitado").innerHTML = textoDigitado;
}

