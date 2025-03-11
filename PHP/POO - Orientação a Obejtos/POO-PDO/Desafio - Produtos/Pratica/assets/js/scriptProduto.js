//Função para validação dos dados do cliente
function validarDadosProduto(){

    //Verificação do codigo.
    if(formulario.codigo.value.length < 12 || formulario.codigo.value == "" ||formulario.codigo.value.length > 15 ){
        formulario.codigo.focus();
        document.getElementById('erro-codigo').innerHTML = "Verifique o código do produto.";
        document.getElementById('erro-nome').innerHTML = ""
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "";
        return false;   
    }

    //Verificação de nome.
    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
        document.getElementById('erro-codigo').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "Verifique se o nome possui mais de 2 caracteres.";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "";
        return false;   
    }

    //Verificação Estoque.
    if(formulario.estoque.value == "" || 
        formulario.estoque.value.indexOf('@')==-1 ||
        formulario.estoque.value.indexOf('.')==-1 ){
        formulario.estoque.focus();
        document.getElementById('erro-codigo').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "Preencha o campo estoque corretamente!";
        document.getElementById('erro-preco').innerHTML = "";
        return false;
    }

    //Verificação Do Preco.
    if(formulario.preco.value.length >  1000  ){
        formulario.preco.focus();
        document.getElementById('erro-codigo').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro.preco').innerHTML = "Excedeu a capacidade de 1000 caracteres!<br>No momento possui "+formulario.preco.value.length;      
        return false;
    }
}