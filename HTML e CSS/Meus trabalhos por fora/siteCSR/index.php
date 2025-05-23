<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSR</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap');

        /* Estilo geral */
        body {
            background-color: #dcdcdc;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            padding-bottom: 80px;
        }


        h1, p {
            margin: 0;
        }

        p {
            font-family: 'Lora', serif;
            font-weight: 500;
        }

        /* Barra superior */
        .top-bar {
            width: 100%;
            height: 60px;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .icons {
            display: flex;
            gap: 15px;
            position: absolute;
            left: 20px;
        }

        .icons a {
            color: white;
            font-size: 20px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .icons a:hover {
            color: orange;
        }

        .buttons {
            display: flex;
            gap: 20px;
        }

        .button {
            color: white;
            font-size: 16px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .button:hover {
            color: orange;
            cursor: pointer;
        }

        /* Imagem principal */
        .main-image-container {
            position: relative;
            margin-top: 60px;
        }

        .main-image {
            width: 100%;
            height: auto;
        }

        .logo {
            width: 15%;
            max-width: 200px;
            height: auto;
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }

        /* Galeria de imagens */
        .img-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;
        }

        .img-item {
            text-align: center;
        }

        .img-item img {
            width: 350px;
            height: 500px;
            border-radius: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .img-item img:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }

        .text-section {
            margin-top: 20px;
            margin-left: 20px;
        }

        .text-section h1 {
            margin: 10px;
        }

        .text-section .nossos {
            color: black;
            top: 20px;
            margin-left: 50px;
        }

        .text-section .servicos {
            color: orangered;
            top: -20px;
            margin-left: 30px;
        }

        /* Seção de contato */
        .contact-section {
            background-color: black;
            color: white;
            padding: 50px 20px;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-container div {
            text-align: left;
        }

        .contact-container h2 {
            color: orangered;
        }

        .contact-container input, 
        .contact-container textarea, 
        .contact-container button {
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .contact-container button {
            background-color: orangered;
            color: white;
            border: none;
            cursor: pointer;
        }

        .contact-container button:hover {
            background-color: #e66000;
        }

        /* Rodapé */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 2%;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 999;
            height: 10%;
        }

        .footer img {
            width: 25%;
            max-height: 100%;
            height: 100%;
            margin: 0;
            right: 10px;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barra superior -->
    <div class="top-bar">
        <div class="buttons">
            <a href="https://openai.com/index/chatgpt/" target="_blank" class="button">SIGA-NOS</a>
            <a href="#contato" class="button">CONTATO</a>
        </div>
        <div class="icons">
            <a href="https://wa.me/1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Imagem principal -->
    <div class="main-image-container">
        <img src="./imagens/imagem_principal.svg" alt="Imagem Principal" class="main-image">
        <img src="/imagens/Logo-CSR-semfundo.svg" alt="Logo CSR" class="logo">
    </div>

    <!-- Conteúdo adicional -->
    <div class="img-container">
        <div class="text-section">
            <h1 class="nossos">NOSSOS</h1>
            <h1 class="servicos">SERVIÇOS</h1>
        </div>
        <div class="img-item">
            <img src="./imagens/construção.svg" alt="Construção">
            <p>Construção</p>
        </div>
        <div class="img-item">
            <img src="./imagens/projeto.svg" alt="Projetos">
            <p>Projetos</p>
        </div>
        <div class="img-item">
            <img src="./imagens/material.svg" alt="Materiais">
            <p>Materiais</p>
        </div>
    </div>

    <!-- Fale Conosco -->
    <div class="contact-section">
        <div class="contact-container">
            <div>
                <h2>FALE CONOSCO</h2>
                <p>(11) 98679-2357</p>
                <p>csr.engetec@gmail.com</p>
            </div>
            <div>
                <h2>Traga seu PROJETO!</h2>
                <form action="#" method="POST">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome"><br>
                    <label for="segmento">Segmento:</label><br>
                    <input type="text" id="segmento" name="segmento"><br>
                    <label for="projeto">Sobre seu projeto:</label><br>
                    <textarea id="projeto" name="projeto" rows="4"></textarea><br>
                    <button type="submit">Solicitar contato</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="footer">
        <img src="./imagens/Logo-CSR-semfundo.svg" alt="Logo CSR">
    </div>
</body>
</html>
<?php
    session_unset();
?>