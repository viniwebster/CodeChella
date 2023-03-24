<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
    <link rel="stylesheet" href="styles/components/style.css">
    <title>CodeChella - Ingresso Comprado</title>
</head>

<body>


    <header>
        <div class="header__container">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/Tema Boreal/Desktop/Logo/Logo branco.png" alt="logo CodeChella">
                </a>
            </div>
            <img src="assets/Tema Boreal/Mobile/Ícones/svgs/menu.svg" class="menu__sanduiche">
            <nav class="header__botoes">
                <a href="experiencia.html" class="header__itens"> A experiência</a>
                <a href="setores.html" class="header__itens"> Mapa de Setores</a>
                <a href="informacoes.html" class="header__itens"> Informações</a>
                <a href="ingresso.html" class="header__itens"> Ingresso</a>
            </nav>
        </div>
    </header>
    <main id="geral">

        <section id="banner__ingresso-comprado">
            <h1 class="banner__title"> Seu ingresso está aqui!</h1>
        </section>

        <section>
            <div class="informacoes__container">
                <div class="informacoes__conteudo">
                    <h6> Uhul, agora sim! Seu ingresso está aqui, apresente na entrada do evento e divirta-se! </h6>

                    <div class="ticket__container">
                        <div class="ticket__titulo">
                            <img src="assets/Tema Boreal/Desktop/Logo/Logo branco.svg" alt="logo" srcset="">
                            <img src="assets/Tema Boreal/Desktop/Logo/Símbolo ingresso.svg" alt="" srcset="">
                        </div>
                        <div class="ticket__infos">
                            <div class="ticket__qr">
                                <img src="assets/Tema Boreal/Desktop/Imagens/6 - Qr code.svg" alt="" srcset="">
                            </div>
                            <ul class="ticket__infos-itens">
                                <h6 id="ticket_nome"> 
                                <?php
                                    $nome = $_POST['nome'];
                                    echo $nome;
                                ?>
                                </h6>
                                <li id="ticket_ingresso"> Ingresso cortesia</li>
                                <li id="ticket_setor"> 
                                    <?php
                                    $ingresso = $_POST['ingresso'];
                                    echo $ingresso;
                                ?>
                                </li>
                                <li id="ticket_data"> Data: 11/03</li>
                                <li id="ticket_local"> Local: São Paulo-SP</li>
                            </ul>
                        </div>
                    </div>

        </section>



        <footer>
            <div class="footer__container">
                <div class="footer__left">
                    <img src="assets/Tema Boreal/Desktop/Logo/Logo branco.png" alt="logo" srcset="">
                    <div class="footer__socials">
                        Acesse nossas redes:
                        <a href="#"> <img src="assets/Tema Boreal/Desktop/Ícones/svgs/Ícones whatsapp.svg" alt=""
                                srcset=""> </a>
                        <a href="#"> <img src="assets/Tema Boreal/Desktop/Ícones/svgs/Ícones Twitch.svg" alt=""
                                srcset=""> </a>
                        <a href="#"> <img src="assets/Tema Boreal/Desktop/Ícones/svgs/Ícones Instagram.svg" alt=""
                                srcset=""> </a>
                        <a href="#"> <img src="assets/Tema Boreal/Desktop/Ícones/svgs/Ícones Twitter.svg" alt=""
                                srcset=""> </a>
                    </div>
                </div>
                <div class="footer__info">
                    <p>Desenvolvido por<a href="https://instagram.com/vimico_"> Vinicius </a></p></br>
                    <p>Projeto ficticio sem fins comerciais.</p>

                </div>
            </div>
        </footer>


    </main>

    <script src="main.js"></script>

</body>

</html>