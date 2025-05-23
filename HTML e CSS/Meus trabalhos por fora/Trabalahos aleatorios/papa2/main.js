// Menu Mobile
document.getElementById('menuToggle').addEventListener('click', function() {
    document.getElementById('mainMenu').classList.toggle('show');
});

// Newsletter Form
document.getElementById('newsletterForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simulação de envio
    const formData = new FormData(this);
    const name = formData.get('name');
    
    // Animação de sucesso
    const button = this.querySelector('button');
    button.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    button.style.backgroundColor = '#4CAF50';
    
    setTimeout(() => {
        alert(`Obrigado, ${name}! Você receberá as últimas notícias sobre o Papa Robert I.`);
        this.reset();
        button.innerHTML = '<span>Assinar Newsletter</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        button.style.backgroundColor = '';
    }, 1000);
});

// Botão Voltar ao Topo
const backToTop = document.querySelector('.back-to-top');
window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
        backToTop.classList.add('visible');
    } else {
        backToTop.classList.remove('visible');
    }
});

backToTop.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Efeito de carregamento
document.addEventListener('DOMContentLoaded', function() {
    document.body.style.opacity = '0';
    setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    }, 100);
});

// Animação dos artigos ao rolar
const observerOptions = {
    threshold: 0.1
};

const articleObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            articleObserver.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('article').forEach(article => {
    article.style.opacity = '0';
    article.style.transform = 'translateY(20px)';
    article.style.transition = 'all 0.5s ease';
    articleObserver.observe(article);
});