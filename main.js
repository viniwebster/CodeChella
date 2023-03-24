//menu mobile
const menuMobile = document.querySelector('.menu__sanduiche');

menuMobile.addEventListener('click', ()=>{

    const botoes = document.querySelector('.header__botoes');
    
    if(botoes.style.display === 'none'){
        botoes.style.display = 'flex';
    }else{
        botoes.style.display = 'none';
    }
})


//perguntas frequentes
const perguntas = document.querySelectorAll('.informacoes__pergunta');

perguntas.forEach((event)=>{
    event.addEventListener('click', ()=>{

        const resposta = event.querySelector('[data-invisivel]')
        const mostraResposta = resposta.classList[1]
        console.log(resposta);

        if(mostraResposta == 'invisivel'){
            resposta.classList.remove('invisivel')
        }else{
            resposta.classList.add('invisivel')
        }

    })
})



