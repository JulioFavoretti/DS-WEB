//Questão 01 -ÍniciO
// Criando a div 
var div = document.createElement("div");   
div.id = "area";
div.style.width = "300px";
div.style.height = "300px";
div.style.backgroundColor = "blue";
div.style.display = "flex";
div.style.justifyContent = "center";
div.style.alignItems = "center"; 
div.style.textAlign = "center";
div.innerText = "Interaja";

document.body.appendChild(div);

// Adicionando eventos
div.addEventListener("click", clicar);
div.addEventListener("mouseenter", entrar);
div.addEventListener("mouseout", sair);

function clicar() {
    div.innerText = "Clicou!";
    div.style.background = "pink";
}

function entrar() {
    div.innerText = "Entrou!";
    div.style.background = "red";
    div.style.height = "500px";
    div.style.width = "500px";
}

function sair() {
    div.innerText = "Saiu!";
    div.style.backgroundColor = "blue";
    div.style.height = "300px";
    div.style.width = "300px";
}
document.write("<br><br><br>")
//Questão 01 -Fim

//Questão 02 - Ínicio
// Criando o campo de entrada
var input = document.createElement("input");
input.type = "text";
input.placeholder = "Digite algo...";
document.body.appendChild(input);

// Criando o parágrafo para exibir o texto digitado
var texto = document.createElement("p");
document.body.appendChild(texto);

// Adicionando evento de tecla pressionada
input.addEventListener("input", escreva);
function escreva(){
    texto.innerText = input.value;
}
document.write("<br><br><br>")
//Questão 02 - Fim 


//Questão 03 - Ínicio
// Criando o botão de clique
var sub = document.createElement("button");
sub.innerText = "Clique...";
document.body.appendChild(sub);

// Criando o parágrafo para exibir a quantidade de cliques
var para = document.createElement("p");
document.body.appendChild(para);

// Inicializando contador de cliques
var contador = 0;

// Adicionando evento de clique
sub.addEventListener("click", clique);

function clique() {
    contador++;
    para.innerText = "Cliques: " + contador;
}

document.write("<br><br><br>")
//Questão 03 - Fim 

//Questão 04 - Inicio
// Adicionando evento de carregar a página
document.addEventListener("DOMContentLoaded", carregando);

function carregando() {
    var div2 = document.createElement("div");   
    div2.id = "area";
    div2.style.width = "280px";
    div2.style.height = "50px";
    div2.style.backgroundColor = "lightgreen";
    div2.style.color = "dark";
    div2.style.padding = "20px";
    div2.style.display = "flex";
    div2.style.justifyContent = "center";
    div2.style.alignItems = "center"; 
    div2.style.fontSize = "20px";
    div2.style.borderRadius = "10px";
    div2.innerText = "Seja bem-vindo!!!";
    document.body.appendChild(div2);
}
document.write("<br><br><br>")
//Questão 04 - Fim 

