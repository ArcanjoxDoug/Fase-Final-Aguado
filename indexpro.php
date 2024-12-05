
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groovestudio I.D</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="IMG/IMG-ICONS/groovestudio.png">
</head>
<style>
    .sair>button{
    background-color: transparent;
    border: none;
    font-size: 20px;
    color: white;
}
.sair{
    position: absolute;
    right: 6%;
    border: none;
    background-color: red;
    padding: 15px 50px;
    border-radius: 5px;
    box-shadow: 0 0 10px black;
    color: white;
    font-size: 20px;
    font-family: Arial;
}

.sair:hover{
    transition: 0.9s;
    transform: scale(1.05);
}
</style>
<body>
    <nav>
        <img class="logo-i" src="IMG/IMG-ICONS/groovestudio.png" alt="logo">
        <h1 class="logo-t"><b><i>GROOVE</i></b></h1>
            <div class="container-links">
                <a class="links" href="#Baterias">Bateria</a>
                <a class="links" href="#Teclados">Teclado</a>
                <a class="links" href="#Guitarras">Guitarra</a>
                <a class="links" href="#Acessorios">Acessórios</a>
                <a class="links" href="sistema.php">Sistema</a>

            </div>
            <a class="sair" href="sair.php">Sair</a>

            <div id="menu-icon" onclick="toggleMenu()">☰</div>
        <aside id="sidebar">
            <div class="container-links-mob">
                <a class="links-m" href="#Baterias">Bateria</a>
                <a class="links-m" href="#Teclados">Teclado</a>
                <a class="links-m" href="#Guitarras">Guitarra</a>
                <a class="links-m" href="#Acessorios">Acessórios</a>
                <a class="links-m" href="sistema.php">Sistema</a>

            </div>
        </aside>
    </nav>
    
    <main>

        <section class="pag1">
            <div class="banner">
                <p><b class="min-title">BEST ONLINE STORE FOR MUSICAL INTRUMENTS</b></p>

                <h1><b>PERFECT</b> SOUND FOR PASSION</h1>

                <p class="princ-text">In our store, you'll find the best selection of high-quality musical instruments at unbeatable prices. We offer an easy and secure shopping experience, with fast delivery and specialized support to help you choose the perfect instrument. Turn your passion for music into reality and discover everything we have to offer!</p>
            
                <button class="start" id="start">Start Here</button>
            </div>

            <img src="IMG/outros/felipe.webp" class="felipe">
            <p class="text-fundo"><b>MUSIC</b></p>
        </section>

        <!-- FIM DA PÁGINA 1 -->

        <section class="pag2">
            <h2>QUALITY INSTRUMENTS</h2>

            <div class="container-p2">
                <div class="cards">
                    <div class="icones">
                        <img src="IMG/IMG-ICONS/groovestudio.png" alt="">
                    </div>
                    <h2>Teclado</h2>
                    <div class="content-card">
                        <p>Descubra teclados versáteis que vão desde modelos digitais para iniciantes até pianos acústicos para músicos experientes. Desperte seu talento com recursos inovadores!</p>

                        <a href="#Teclados">See Now  &#x21E8;</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="icones">
                        <img src="IMG/IMG-ICONS/groovestudio.png" alt="">
                    </div>
                    <h2>Bateria</h2>

                    <div class="content-card">
                        <p>Explore nossa variedade de baterias de alta qualidade, perfeitas para iniciantes e profissionais. Kits duráveis e acessórios essenciais garantem o som ideal para qualquer estilo musical.</p>

                        <a href="#Baterias">See Now  &#x21E8;</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="icones">
                        <img src="IMG/IMG-ICONS/groovestudio.png" alt="">
                    </div>
                    <h2>Guitarra</h2>

                    <div class="content-card">
                        <p>Encontre a guitarra ideal para sua jornada musical. Oferecemos guitarras elétricas e acústicas que proporcionam conforto e sonoridade excepcional para todos os estilos.</p>

                        <a href="#Guitarras">See Now  &#x21E8;</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="icones">
                        <img src="IMG/IMG-ICONS/groovestudio.png" alt="">
                    </div>
                    <h2>Acessórios</h2>

                    <div class="content-card">
                        <p>Complete sua experiência musical com nossos acessórios de alta qualidade. Temos tudo, desde palhetas até suportes, para garantir que você esteja sempre pronto para tocar!</p>

                        <a href="#Acessorios">See Now  &#x21E8;</a>
                    </div>              
                </div>

            </div>
        </section>

        <!-- FIM DA PÁGINA 2 -->

        <section class="pag3">
            <h2>PRODUTOS</h2>
            <div class="container-p3">

                <div class="sub-linha" id="Baterias">
                    <button class="img-arrow" id="preBtn" ><img class="imagem-button" src="IMG/IMG-ICONS/arrow-l.png"></button>
                    <div class="linha-cont" id="linha">
                        <div class="cards-p3" id="cards_p3">

                           <div class="cont-img"><img src="IMG/IMG-BATERA/batera1.webp" alt=""></div>
                                <div class="organiz-descrit">
                                        <h3>Bateria Michael</h3>
                                        <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                        <h4>R$ 3.566,90</h4>
                                </div>
                        </div>

                        <div class="cards-p3" id="cards_p3">
                             
                            <div class="cont-img"><img src="IMG/IMG-BATERA/batera2.jfif" alt=""></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Dw</h3>
                                <p>Bateria Dw Black semi-nova - direto de fábrica </p>
                                <h4>R$ 13.443,90</h4>   
                            </div>
                        </div>

                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-BATERA/bateria.jfif" alt=""></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Yamaha</h3>
                                <p>Bateria Yamaha Stage Custon aros dourados - pack castanho </p>
                                <h4>R$ 16.500,00</h4>
                            </div>
                        </div>

                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-BATERA/bateria4.jfif" alt=""></div>
                                <div class="organiz-descrit">
                                    <h3>Bateria Yamaha</h3>
                                    <p>Bateria Yamaha Vermelha Stage Custom Birch</p>
                                    <h4>R$ 9.250,00</h4>
                                </div>
                            </div>

                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-BATERA/bateria5.jfif" alt=""></div>
                                <div class="organiz-descrit">
                                    <h3>Bateria Tama</h3>
                                    <p>Bateria Tama Stage Custon white and blue - Seminovo</p>
                                    <h4>R$ 5.459,00</h4>
                                </div>
                        </div>

                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-BATERA/bateria6.jfif" alt=""></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Odery</h3>
                                <p>Bateris Odery Eyedentity Maple Exotic Mappa </p>
                                <h4>12.560,00</h4>
                            </div>
                        </div>
    
                    </div>
                    <button class="img-arrow" id="nxtBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-r.png" alt=""></button>
                </div>

                <!--SESSÃO TECLADOS-->

                <div class="sub-linha" id="Teclados">
                    <button class="img-arrow" id="preBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-l.png"></button>
                    <div class="linha-cont" id="linha">


                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-TECLA/tecla1.webp"></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-TECLA/tecla2.jpg"></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-TECLA/tecla3.webp" alt=""></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">

                            <div class="cont-img"><img src="IMG/IMG-TECLA/tecla4.webp"></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                            <div class="cont-img"><img src="IMG/IMG-TECLA/tecla5.jpg" alt=""></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                            <div class="cont-img"><img src="IMG/IMG-TECLA/tecla6.jpg"></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
    
                    </div>
                    <button class="img-arrow" id="nxtBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-r.png" alt=""></button>
                </div>
                
                <div class="sub-linha" id="Guitarras">
                    <button class="img-arrow" id="preBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-l.png"></button>
                    <div class="linha-cont" id="linha">
                        <div class="cards-p3" id="cards_p3">
                            <div class="cont-img"><img src="IMG/IMG-GUITA/guita1.jfif" alt=""></div>
                            <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-GUITA/guita2.jfif" alt=""></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-GUITA/guita3.jfif" alt=""></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-GUITA/guita4.jfif" alt=""></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-GUITA/guita5.jfif" alt=""></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-GUITA/guita6.jfif" alt=""></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                    </div>
                    <button class="img-arrow" id="nxtBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-r.png" alt=""></button>
                </div>
                
                <div class="sub-linha" id="Acessorios">
                    <button class="img-arrow" id="preBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-l.png"></button>
                    <div class="linha-cont" id="linha">
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-ACESS/BAQUETAS.jfif" alt=""></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-ACESS/KIT-PRATO.jpeg"></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-ACESS/Baffles Em Acrílico Para Bateria E Percussão - 32 Polegadas.jfif"></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-ACESS/Kit 3 Encordoamento Guitarra 009 Giannini Geegst9.jfif"></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
                        <div class="cards-p3" id="cards_p3">
                           <div class="cont-img"><img src="IMG/IMG-ACESS/Kit De Pratos Zeus Para Bateria Hybrid Set E Liga B-20 10065.jfif"></div>
                           <div class="organiz-descrit">
                                <h3>Bateria Michael</h3>
                                <p>Bateria Michael Amadeirado Vernis - inRock</p>
                                <h4>R$ 3.566,90</h4>
                            </div>
                        </div>
    
                    </div>
                    <button class="img-arrow" id="nxtBtn"><img class="imagem-button" src="IMG/IMG-ICONS/arrow-r.png" alt=""></button>
                </div>
             
            </div>
        </section>

    </main>
    <footer>

        <div class="footer-cont1">
            <div class="content-footer">
                <p>
                    Obrigado por usar nosso site. Sua presença é muito importante para nós! Estamos sempre aqui para oferecer a melhor experiência possível. Volte sempre!
                </p>
                <div class="containder-icons-footer">

                    <div class="icon-cont1"><a href="https://wa.me/15992676340" class="icon-cont1">
                        <img src="IMG/IMG-ICONS/whats.png" class="img-icon-footer"></a></div>

                    <div class="icon-cont2">
                        <a href="https://www.facebook.com/douglas.batistaarcanjo" class="icon-cont2">
                            <img src="IMG/IMG-ICONS/face.png" class="img-icon-footer"></a></div>

                      <div class="icon-cont3"><a href="https://www.youtube.com/@GROVESTUDIO-bq3kb" class="icon-cont3">
                                <img src="IMG/IMG-ICONS/yout.png" class="img-icon-footer"></a></div>

                </div>
                <p>
                    DouglasArcanjo & 2024 Web Design and Developer Front-end.
                </p>
               
            </div>
        </div> 

        <div class="footer-cont2">
            <h2>About Me</h2>
            <ul>
                <li class="About"><a href="portifolio.html">Portifólio</a></li>
                <li class="About"><a href="https://cpv.ifsp.edu.br/">Instituição</a></li>
                <li class="About"><a href="">Comunidade</a></li>
            </ul>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>b