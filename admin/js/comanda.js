const divCriar = document.getElementById('abrirComanda');
const botao = document.getElementById('botaoAbrir')

botao.addEventListener('click', function() {
    // Verifica se a div está escondida
    if (divCriar.classList.contains('escondido')) {
        // Troca a classe 'escondido' por 'visivel'
        divCriar.classList.replace('escondido', 'abrir_comanda');
    } else {
        // Troca a classe 'visivel' por 'escondido'
        divCriar.classList.replace('abrir_comanda', 'escondido');
    }
});