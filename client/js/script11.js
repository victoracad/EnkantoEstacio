
const checkbox = document.getElementById('burger');
const openSidebar = document.getElementById('open-sidebar');
openSidebar.addEventListener('click', function(event) {
    checkbox.checked = !checkbox.checked;     
});
  
document.getElementById('open-sidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('open');
});

function redirecionarComId(id) {
    window.location.href = "?id=" + id;
}

function retiraId() {
    window.location.href = "?id=0";
}

function increment() {
    const input = document.getElementById('quantidade');
    input.value = parseInt(input.value) + 1;
}
  
function decrement() {
    const input = document.getElementById('quantidade');
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function getIdFromUrl(){ //PEGA OS PARAMETROS DA URL
    const urlParams = new URLSearchParams(window.location.search); //PEGA OS PARAMETROS DA URL E COLOCA NA CONSTANTE urlParams
    return urlParams.get('id'); //PEGA A VARIAVEL id QUE FOI PASSADA NA URL
}
      
function loadIdsFromLocalStorage() {// Função para carregar o array do localStorage
    const storedIds = localStorage.getItem('idsArray');
    return storedIds ? JSON.parse(storedIds) : [];
}
    // Função para salvar o array no localStorage
function saveIdsToLocalStorage(idsArray) {
    localStorage.setItem('idsArray', JSON.stringify(idsArray));
}

let idsArray = loadIdsFromLocalStorage();// Carrega o array de IDs do localStorage
      
function limparCarrinho(){
    idsArray.length = 0;
    saveIdsToLocalStorage(idsArray);
    location.reload()
}
      
function addToCar(){
    const id = getIdFromUrl();
    if (id) {
        idsArray.push(id);
        console.log(`ID armazenado: ${id}`);
        console.log(`Array de IDs:`, idsArray);
        // Salva o array atualizado no localStorage
        saveIdsToLocalStorage(idsArray);
        location.reload()
        retiraId()
    }else{
        console.log('ID não encontrado na URL.');
    }
}
        // Objeto para armazenar a contagem de cada número
