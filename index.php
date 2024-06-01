<?php
    include('./pages/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amagron</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/amagron-icon.svg" type="image/x-icon">
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="nav__logo">
                <img src="images/logo-branca.png" alt="Logo Amagron" class="logo_img">
            </div>
            <div class="nav__menu">
                <ul class="menu">
                    <li><a href="" class="menu__item">Assinaturas</a></li>
                    <li><a href="#produtos" class="menu__item">Produtos</a></li>
                    <li><a href="#empresa" class="menu__item">Contato</a></li>
                    <li><a href="" class="menu__item">Notícias</a></li>
                </ul>
            </div>
            <div class="nav__buttons">
                <a href="pages/signIn.php" class="button_login">Login</a>
                <a href="pages/signup.php" class="button_singIn">Cadastrar</a>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="main__home">
            <div class="home__background">
                <video alt="Background" class="background_image" autoplay loop>
                    <source src="videos/background-fundo.mp4" type="video/mp4">
                </video>
            </div>
            <div class="home__container">
                <div class="container__dados">
                    <h1 class="dados__title">Impulsionando a Agricultura com Tecnologia e Sustentabilidade</h1>
                    <p class="dados__text">Transformamos a agricultura com práticas inovadoras e sustentáveis, fortalecendo os produtores rurais e promovendo um futuro mais verde</p>
                </div>
                <div class="container__button">
                    <a href="#sobre" class="button_catalog">Quem somos</a>
                </div>
            </div>
            <div class="home--shadow"></div>
        </section>
        <section class="main__produtos" id="produtos">
            <h1 class="produtos__title">Produtos</h1>
            <div class="produtos__slider">
                <div class="slider__box">
                    <?php
                    $sql_generico="select * from produtos order by id";
                    $consulta_generico=mysqli_query($conexao, $sql_generico);
                    while($linha=mysqli_fetch_array($consulta_generico)){
                        if ((!empty($linha))){
                            echo'<div class="box__item">';
                                echo'<div class="item__image">';
                                    echo'<img src="'.$linha['imagem'].'" alt="Produto Imagem" width="1024px" height="683px">';
                                echo'</div>';
                                echo'<div class="item__info">';
                                    echo'<div class="prod__img">';
                                        echo'<img src="./images/caixa.png" alt="" class="prod-img">';
                                    echo'</div>';
                                    echo'<div class="prod__dados">';
                                        echo'<h3 class="info__title">'.$linha['nome'].'</h3>';
                                        echo'<span class="info__value">R$'.$linha['preco'].'</span>';
                                    echo'</div>';
                                echo'</div>';
                                echo'<div class="backdrop"></div>';
                            echo'</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="main__banner">
            <video alt="Banner Amagron" class="banner_amagron" autoplay loop>
                <source src="videos/video-banner.mp4">
            </video>
        </section>
        <section class="main__about" id="sobre">
            <h1 class="about__title">Sobre Nós</h1>
            <div class="about__container">
                <div class="container__info">
                    <h2>AMAGRON Developers</h2>
                    <p>Nossa equipe de desenvolvedores é composta por estudantes do curso de Sistemas de Informação da Universidade Estadual do Tocantins (UNITINS). O site foi desenvolvido como parte de um projeto para a disciplina de Front-End, onde tivemos a oportunidade de aplicar e expandir nossos conhecimentos em desenvolvimento web. Aqui está uma descrição detalhada dos membros da equipe:</p>
                    <span>
                        <ul>
                            <li>Arthur Henrique</li>
                            <li>Bruno Lustoza</li>
                            <li>Bruno Sales</li>
                            <li>Heitor Fiuza</li>
                            <li>Lauro Leão</li>
                            <li>Marcos Ribeiro</li>
                        </ul>
                    </span>
                </div>
                <div class="container__slider">
                    <picture class="container__img">
                        <img src="images/assinaturas2.jpg" alt="Equipe" class="about_img">
                    </picture>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer_box">
            <div class="footer_web">
                <div class="footer_section">
                    <h4 class="footer_section_title">DEVELOPERS</h4>
                    <ul>
                        <li><a href="#"> Arthur Henrique </a></li>
                        <li><a href="#"> Bruno Lustosa </a></li>
                        <li><a href="#"> Marcos Ribeiro </a></li>
                        <li><a href="#"> Lauro Leão </a></li>
                        <li><a href="#"> Heitor Fiuza </a></li>
                        <li><a href="#"> Bruno Sales </a></li>
                    </ul>
                </div>
                <div class="footer_section">
                    <h4 class="footer_section_title" id="empresa">EMPRESA</h4>
                    <ul>
                        <li><a href="#"> Nossa história </a></li>
                        <li><a href="https://www.apache.org/licenses/LICENSE-2.0.txt" target="_blank"> Política de privacidade </a></li>
                    </ul>
                </div>
                <div class="footer_section">
                    <h4 class="footer_section_title">CONTATO</h4>
                    <ul>
                        <li><img src="./images/loc.png" class="icon_img"> <a href="">CEP 77020-122, Palmas-TO </a> </li>
                        <li><img src="./images/telefone.png" class="icon_img"><a href="tel:6339014000">(63) 3901-4000</a></li>
                        <li><img src="./images/email.png" class="icon_img"><a href="mailto:si.palmas@unitins.br">si.palmas@unitins.br</a></li>
                        <br>
                        <span><a rel="noopener" href="https://g.page/unitinsoficial?share" target="_blank" class="text_loc">Ver no Mapa</a> <br />
                        </ul>
                </div>
                <div class="footer_section">
                    <img class="footer_logo " src="./images/logo-branca.png">
                    <div class="footer_midias">
                        <a href="https://github.com/marcosguida/AMAGRON-Store" target="_blank"> <img class="img_github" src="./images/github.png"> <i class="GitHub"></i> </a>
                        <a href=""> <img class="img_insta" src="./images/instagram.png"> <i class="Instagram"></i> </a>
                        <a href=""> <img class="img_linkedln" src="./images/linkedin.png"> <i class="Linkedin"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer_copyright">AMAGRON STORE Copyright © 2024 – Todos os Direitos Reservados.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>