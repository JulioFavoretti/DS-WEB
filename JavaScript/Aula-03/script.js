//Style do Body.
document.body.style.backgroundColor = "#f4f4f4";
document.body.style.fontFamily = "Arial, sans-serif";
document.body.style.display = "flex";
document.body.style.flexDirection = "column";
document.body.style.alignItems = "center";
document.body.style.margin = "20px";

//Style do Card
document.querySelectorAll(".card").forEach(card => {
    card.style.width = "250px";
    card.style.padding = "15px";
    card.style.backgroundColor = "lightblue";
    card.style.borderRadius = "8px";
    card.style.boxShadow = "2px 2px 10px rgba(0, 0, 0, 0.1)";
    card.style.margin = "10px 0";
    card.style.textAlign = "center";
});

function criarCartao() {
    let nome = document.getElementById("nome").value;
    let descricao = document.getElementById("descricao").value;

    if (nome === "" || descricao === "") {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    let card = document.createElement("div");
    card.setAttribute("class", "card");

    // Aplicando estilo diretamente ao criar o card
    card.style.width = "250px";
    card.style.padding = "15px";
    card.style.backgroundColor = "lightblue";
    card.style.borderRadius = "8px";
    card.style.boxShadow = "2px 2px 10px rgba(0, 0, 0, 0.1)";
    card.style.margin = "10px 0";
    card.style.textAlign = "center";

    let titulo = document.createElement("h3");
    titulo.textContent = nome;

    let texto = document.createElement("p");
    texto.textContent = descricao;

    let botaoExcluir = document.createElement("button");
    botaoExcluir.setAttribute("class", "delete-btn");
    botaoExcluir.textContent = "Excluir";

    // Aplicando estilos ao botão
    botaoExcluir.style.marginTop = "10px";
    botaoExcluir.style.padding = "5px 10px";
    botaoExcluir.style.background = "red";
    botaoExcluir.style.color = "white";
    botaoExcluir.style.border = "none";
    botaoExcluir.style.cursor = "pointer";
    botaoExcluir.style.borderRadius = "5px";
    botaoExcluir.style.transition = "background 0.3s";

    botaoExcluir.addEventListener("mouseover", () => botaoExcluir.style.background = "darkred");
    botaoExcluir.addEventListener("mouseout", () => botaoExcluir.style.background = "red");

    // Evento para remover o cartão
    botaoExcluir.onclick = function() {
        card.remove();
    };

    card.appendChild(titulo);
    card.appendChild(texto);
    card.appendChild(botaoExcluir);

    document.getElementById("cartoes-container").appendChild(card);

    document.getElementById("nome").value = "";
    document.getElementById("descricao").value = "";
}
