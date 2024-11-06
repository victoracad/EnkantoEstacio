function sendRadioValue(value) {
    var xhr = new XMLHttpRequest(); // Cria um novo objeto XMLHttpRequest
    xhr.open("POST", "./methods/list_dishes.php", true); // Define a requisição como POST e aponta para o arquivo PHP

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Quando a resposta for recebida, exibe a mensagem no HTML
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("resultado").innerHTML = xhr.responseText;
        }
    };

    // Envia o valor do radio button selecionado para o PHP
    xhr.send("radioValue=" + value);
}


function selecionarRadio(opcao) {
    // Selecionar o radio button correspondente
    const radioSelecionado = document.getElementsByName('opcao' + opcao);
    radioSelecionado.checked = true;

    // Exibir o resultado
    switch(opcao){
        case 1:
            document.getElementById('nameListDishes').innerText = 'Prato Feito'
            break;
        case 2:
            document.getElementById('nameListDishes').innerText = 'Bebidas'
            break;
        case 3:
            document.getElementById('nameListDishes').innerText = 'Porções Individuais'
            break;
        case 4:
            document.getElementById('nameListDishes').innerText = 'Petiscos'
            break;
        case 5:
            document.getElementById('nameListDishes').innerText = 'Prato Feito'
            break;
    }
    //document.getElementById('nameDishes').innerText = 'Você selecionou a Opção ' + opcao;
}



