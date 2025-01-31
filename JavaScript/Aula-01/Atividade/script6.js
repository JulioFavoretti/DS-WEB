alert("Vamos descobrir o resultado do seu investimento?!");

var investimento = Number(prompt("Escreva a capital inicial do seu investimento: "));
var tempo = Number(prompt ("Por quantos meses você quer investir/investiu?"));
var taxa = Number(prompt("Quantos % de juros foi aplicado?"));

var resultado = investimento*(1+(taxa/100))**tempo;

alert("O valor final do seu investimento é: " + resultado.toFixed(2) );