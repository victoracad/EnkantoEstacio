let contagem = {};
let carrinho = [];    
        // Percorre a array original
idsArray.forEach(num => {
    // Se o número já está no objeto contagem, incrementa
    if (contagem[num]) {
        contagem[num]++;
    }else{
    // Se for a primeira vez que o número aparece, inicializa a contagem
    contagem[num] = 1;
    // Adiciona o número à nova array se for a primeira vez que aparece
    carrinho.push(num);
    }
});
console.log(contagem);
let strCarrinhoJson = JSON.stringify(contagem);

function mudarValueInput(strCarrinhoJson) {
    
    document.getElementById("input_carrinhoStr").value = strCarrinhoJson;
}

document.getElementById("qItens").innerHTML = idsArray.length;//COlOCA O TAMANHO DO MEU CARRINHO E COLOCA ELE COMO NUMERO DO LADO DO CARRINHO
    
function sendIdsDishes(carrinho) {
    var xhr = new XMLHttpRequest(); // Cria um novo objeto XMLHttpRequest
    xhr.open("POST", "./methods/carrinho.php", true); // Define a requisição como POST e aponta para o arquivo PHP

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Quando a resposta for recebida, exibe a mensagem no HTML
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("resultado1").innerHTML = xhr.responseText;
        }
    };

    // Envia o valor do radio button selecionado para o PHP
    xhr.send("arrayCarrinho=" + carrinho);
}
function sendTotalCarrinho(contagem) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./methods/somarCarrinho.php", true);
    
    xhr.setRequestHeader("Content-Type", "application/json"); // Define o Content-Type como application/json
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("totPrice").innerHTML = xhr.responseText;
            
        }
    };
    
    var data = JSON.stringify(contagem); // Converte o objeto em JSON
    xhr.send(data); // Envia o JSON
}
function showQuantDishes(contagem){
    const arrayDivQuantDishe = document.getElementsByClassName('quantDishe');
    const valores = Object.values(contagem);
    //console.log(valores)
    if (arrayDivQuantDishe.length > 0) {
        // Use um laço para iterar sobre os elementos da classe
        for (let i = 0; i < arrayDivQuantDishe.length; i++) {
            // Verifique se existe um valor correspondente no objeto
            if (valores[i] !== undefined) {
                // Defina o valor da propriedade correspondente do objeto como o conteúdo da tag
                arrayDivQuantDishe[i].textContent = valores[i];
            }
        }
    }
}
function showCarrinhoEvery(contagem, carrinho){
    
    sendIdsDishes(carrinho);
    sendTotalCarrinho(contagem);   
    setTimeout(function() {
        showQuantDishes(contagem);
    }, 500);
    setTimeout(function() {
        mudarValueInput(strCarrinhoJson);
    }, 500);
}
function deleteCarrinhoori(){
    const urlParams = new URLSearchParams(window.location.search); //PEGA OS PARAMETROS DA URL E COLOCA NA CONSTANTE urlParams
    urlParams.get('id'); //PEGA A VARIAVEL id QUE FOI PASSADA NA URL
    let idUrl = urlParams.get('id')
    for(let j = 0; j < idsArray.length; j++){
        if(idUrl == idsArray[j]){
            idsArray.splice(j, 1);
            saveIdsToLocalStorage(idsArray);
            
        }
        
    }
    location.reload();
}
function deleteItemCarrinho(idsArray) {
    const urlParams = new URLSearchParams(window.location.search); //PEGA OS PARAMETROS DA URL E COLOCA NA CONSTANTE urlParams
    urlParams.get('id'); //PEGA A VARIAVEL id QUE FOI PASSADA NA URL
    let idToRemove = urlParams.get('id')

    idsArray = idsArray.filter(number => number != idToRemove);
    saveIdsToLocalStorage(idsArray);
    location.reload();
}
function adicionarParametroNaURL(chave, valor) {
    // Obtemos a URL atual
    const urlAtual = new URL(window.location);

    // Modificamos os parâmetros da URL
    urlAtual.searchParams.set(chave, valor);

    // Atualizamos a URL no navegador sem recarregar a página
    window.history.replaceState({}, '', urlAtual);
}





