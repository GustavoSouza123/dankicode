let transitionTime = .3; /* se vc quiser aumentar ou diminuir a velocidade da animação da janela, mude aqui */
document.querySelector('.modal-area').style.transition = transitionTime + 's';


function openModal() {
    document.querySelector('.modal-area').classList.add('modal-display');
    setTimeout(() => {
        document.querySelector('.modal-area').classList.add('modal-opacity')
    }, 10);
}

function closeModal() {
    document.querySelector('.modal-area').classList.remove('modal-opacity')
    setTimeout(() => {
        document.querySelector('.modal-area').classList.remove('modal-display');
    }, transitionTime*1000);
}

document.querySelector('button').onclick = function(e) {
    e.stopPropagation();
    openModal();
};
document.querySelector('.modal').onclick = function(e) {
    e.stopPropagation(); // comente essa linha, clique no modal e veja o que acontece
}
document.querySelector('.close-btn').onclick = function(e) {
    e.stopPropagation();
    closeModal();
};
document.querySelector('body').onclick = closeModal;

/*
a função stopPropagation impede que um evento se propague para o body, ou seja,
se vc adicionar um evento de clique no body e clicar em um botao, que está no body,
o html vai entender que vc clicou no body
quando vc coloca a função stopPropagation no botao, quando clicar nele o html
vai entender como se vc tivesse clicado apenas no botão, e nao no body
*/