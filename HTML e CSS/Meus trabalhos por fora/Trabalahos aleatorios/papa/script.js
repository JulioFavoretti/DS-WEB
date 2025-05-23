const noticias = {
    1: {
      titulo: "Leão XIV anuncia iniciativa global de paz",
      conteudo: "Em um discurso histórico, o Papa Leão XIV propôs um pacto entre nações para promover o desarmamento e a cooperação pacífica. A proposta inclui diálogo inter-religioso e investimentos em educação global."
    },
    2: {
      titulo: "Viagem histórica à África",
      conteudo: "Leão XIV percorreu diversos países africanos, promovendo diálogo, justiça social e ajuda humanitária. O papa foi recebido com entusiasmo por multidões e líderes locais."
    },
    3: {
      titulo: "Encíclica sobre tecnologia e fé",
      conteudo: "O Vaticano lançou uma nova encíclica escrita por Leão XIV sobre os desafios e oportunidades da inteligência artificial e tecnologia moderna em relação à fé cristã."
    }
  };
  
  function showPage(id) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.getElementById(id).classList.add('active');
  }
  
  function abrirNoticia(id) {
    const noticia = noticias[id];
    document.getElementById('titulo-noticia').innerText = noticia.titulo;
    document.getElementById('conteudo-noticia').innerText = noticia.conteudo;
    showPage('noticia-detalhe');
  }
  