<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"  href="_css/style.css"/>
    <link rel="stylesheet" type="text/css" href="_css/fakeloading.css"/>
    <link rel="stylesheet" type="text/css"  href="_css/responsive_index.css"/>           
    <link rel="stylesheet" type="text/css"  href="_css/global.css"/>
    <link rel="stylesheet" type="text/css"  href="_css/bootstrap.min.css"/>                                           
    <title>Meu TCC</title>
</head>
    <body>
        <header>
            <nav class="menu">
                <ul class="pagination justify-content-center">
                    <li class="home page-item"><a href="#home"class="page-link"><i class="fas fa-home" aria-hidden="true"></i></a></li>
                    <li class="page-item "><a target="_blank" href="https://www.instagram.com/drumond_guilherme/" class="page-link"> <i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a target="_blank" href="https://github.com/Skillado"class="page-link"> <i class="fab fa-github-square" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a target="_self" href="controllers/creation.php"class="page-link"> <i class="fas fa-sign-in-alt"></i></i></a></li>
                </ul>
            </nav>
        </header>
        <section class="fundo"id="content">   
        <div class="loader-wrapper">
                <span class="loader"><span class="loader-inner"></span></span>
            </div>     
        </section> 
        <aside>
            <section class="heroes" id="home">
                <div class="flex">
                    <div class="grid conteudo">
                        <div class="computador">
                            <p>
                            <img class="pc img-fluid"src="_imagens/pc.png" class="fotos"/></p>
                                <nav>
                            <p class="passe"><span>A SUA CONFIGURAÇÃO IDEAL</span></p>
                            <p class="sub">Apenas diga seu nome e sua idade e pronto use e abuse!</p>
                            <p class="jargao">Menos é <span class="mark">MAIS</span></p>
                                </nav>
                            <a href="controllers/login.php"><input  class="button" value="Pronto" type="submit" required="required"/></a>
                           
                        </div>
                        <div classs=""></div>
                        <div class="producao">
                            <img class="prods img-fluid "src="_imagens/cms.png" class="fotos"/>
                            <nav>
                            <p class="passe">FIQUE ATENTO AS NOVIDADES</p>
                            <p class="sub"><a href="#explication"><i class="fas fa-hashtag">FICAEMCASA</i></a> </p> 
                            <p class="jargao"><span class="title_area">Criadores</span></p>
                            <nav class="box-owners">
                            <p class="sub sub2"><span class="owners">Drumond</p>
                            <p class="sub sub2"><span class="owners">Thales</p>
                            <p class="sub sub2"><span class="owners">Brayan</p>
                            </nav>
                            <a class="botao"href="controllers/login.php"><input  class="button" value="Ver mais" type="submit" required="required"/></a>
                        </div> 
                    </div>
                </div>
            </section>
        </aside>
        <section class="quadros"><h1 class="title2"><p>Entenda <strong>como funciona</strong></p></h1></section>                
            <section class="most img-fluid">
                            <div class="box-1 img-fluid">
                                    <div class="icons"><img class="img-fluid fotos2" src="_imagens/money.png"/></div>
                                    <h1>1. Defina seu Orçamento</h1>
                            </div>
                            <div class="box-2 img-fluid">
                                    <div class="icons"><img class="img-fluid fotos2" src="_imagens/compatible.png"/></div>
                                    <h1>2. Nós testamos a Compatibilidade</h1>
                            </div>

                            <div class="box-3 img-fluid">
                                    <div class="icons"><img class="img-fluid fotos2" src="_imagens/checklist.png"/></div>
                                    <h1>3. Nós te mostramos as Peças</h1>
                            </div>
            </section>
        <section id="explication">
            <div class="container-explication">
                    <h1 class ="title_texto"> > _Quem somos?</br></h1>
                        <div class="area_texto">
                        <p class="descricao"> Olá somos alunos do Curso Técnico em Informática na Escola Salesiana São José - CPDB. Somos aficionado pela área de Hardware, Somos integrantes deste grupo maravilhoso 
                        no intuito de desenvolver um site facilitador de hardware.<br/> Formado por três participantes, Criador do site em design: Guilherme Drumond, Criador do Banco de Dados: Brayan Roberto, Criador das funcionalidades javascript: Thales Gabriel.</p>
                    </div>
            </div>
        </section>
        <footer>
        <p class="footer"> © 2020 - NOME DO TCC </p>
        </footer>  
    <script type="text/javascript" src="_js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="_js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="_js/script.js"></script>
    <script type="text/javascript" src="_js/smoothscroll.js"></script>
    <script>$(window).on("load",function(){$(".loader-wrapper").fadeOut("fast");});</script>
    <script type="text/javascript" src="_js/jquery-3.5.1.min.js"></script>
   </body>
</html>
