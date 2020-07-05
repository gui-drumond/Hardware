<?php
session_start();
?>
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
    <link rel="stylesheet" type="text/css"  href="_css/global.css"/> 
    <link rel="stylesheet" type="text/css"  href="_css/topo.css"/> 
    <link rel="stylesheet" type="text/css"  href="_css/responsive_index.css"/>   
    <link rel="stylesheet" type="text/css"  href="_css/bootstrap.min.css"/>                                           
    <title>Meu TCC </title>
</head>
    <body>
        <header>
            <nav class="menu">
                <ul class="pagination justify-content-center">
                    <li class="home page-item"><a href="#home"class="page-link"><i class="fas fa-home" aria-hidden="true"></i></a></li>
                    <li class="page-item "><a target="_blank" href="https://www.instagram.com/hardware_assembly/" class="page-link"> <i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a target="_blank" href="https://github.com/Skillado"class="page-link"> <i class="fab fa-github-square" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a target="_self" href="controllers/login.php"class="page-link"> <i class="fas fa-sign-in-alt"></i></i></a></li>
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
                            <p class="passe"><span>A CONFIGURAÇÃO QUE VOCÊ PROCURA!</span></p>
                            <p class="sub">Apenas escolha sua classe e insira seu orçamento!</p>
                            <p class="jargao">Menos é <span class="mark">MAIS</span></p>
                                </nav>
                            <a href="pages/creation.php"><input  class="button" value="Pronto" type="submit" required="required"/></a>
                           
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
        <section class="quadros"><h1 class="title2"><p>Entenda como <strong>funciona.</strong></p></h1></section>                
            <section class="most img-fluid">
                            <div class="box-1 img-fluid">
                                    <div class="icons"><img class="img-fluid fotos2" src="_imagens/money.png"/></div>
                                    <h1 class="texto">1. Defina seu Orçamento</h1>
                            </div>
                            <div class="box-2 img-fluid">
                                    <div class="icons"><img class="img-fluid fotos2" src="_imagens/compatible.png"/></div>
                                    <h1 class ="texto">2. Nós testamos a Compatibilidade</h1>
                            </div>

                            <div class="box-3 img-fluid">
                                    <div class="icons"><img class="img-fluid fotos2" src="_imagens/checklist.png"/></div>
                                    <h1 class ="texto">3. Nós te mostramos as Peças</h1>
                            </div>
            </section>
        <section id="explication">
            <div class="container-explication">
                    <h1 class ="title_texto"> > _Quem somos?</br></h1>

                    <div class="container rodape shadow"> <!-- INICIANDO O CONTAINER DO BOOTSTRAP  -->
                            <div class="row shadow">
                                <div  class="col-md-4 mb-5 shadow dark">
                                    <div class="card h-100 shadow">
                                    <img class="card-img-top " src="https://scontent.fcpq3-1.fna.fbcdn.net/v/t1.0-9/p960x960/106177999_1522639234583469_5380731907179782100_o.jpg?_nc_cat=103&_nc_sid=85a577&_nc_eui2=AeFsnXeLTSR7BOuFcb7RiKpsSrtjTVaEqydKu2NNVoSrJ7v1_98740I92peDRQ5Lb8z01iVqyxqSD0rWJv3FPVNi&_nc_ohc=FWYK35fyc28AX9judoe&_nc_ht=scontent.fcpq3-1.fna&_nc_tp=6&oh=3d9ee804792c36afc85576c16bf265ce&oe=5F27A85D" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-dark">Programador do Front-End e Back-End</h4>
                                        <p class="card-text text-dark">Guilherme Fernandes Drumond (18 anos).</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href=""><input type="button" title="Mostrar redes sociais ?" value="Ver Mais!" class="btn btn-success"/></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 shadow">
                                    <div class="card h-100 shadow">
                                    <img class="card-img-top" src="https://scontent.fcpq3-1.fna.fbcdn.net/v/t1.0-9/p960x960/82100102_1880825198720348_5912516966823755776_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_eui2=AeFfQQGPQrbVAkFBykGK_DNu5SQLtM7B5s_lJAu0zsHmz1SoeXUTozPPGTmqnxLQPEO00IFZ5OR8Ugf2EMjVsXEK&_nc_ohc=3uy_LgCp6QkAX-nfXdw&_nc_ht=scontent.fcpq3-1.fna&_nc_tp=6&oh=0adcd5f676b5b455b7c273724fa5e858&oe=5F25DBAA" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-dark">Programador do Front-End</h4>
                                        <p class="card-text text-dark">Thales Gabriel Peixoto (17 anos).</p>
                                    </div>
                                    <div class="card-footer">
                                    <a><input title="Mostrar redes sociais ?" type="button" value="Ver Mais!" class="btn btn-roxo btn-danger"/></a></div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 shadow  ">
                                    <div class="card h-100 shadow">
                                    <img class="card-img-top" src="https://scontent.fcpq3-1.fna.fbcdn.net/v/t1.0-9/s960x960/92460480_1310068155859194_2732747558546833408_o.jpg?_nc_cat=110&_nc_sid=85a577&_nc_eui2=AeFbQ2iMyQEoi0SSSGqelBD1axySlKDHKptrHJKUoMcqm0_34anYKch-B2TNXSjtSl2c3EZ2sAFMnJpy3x75nqW7&_nc_ohc=WH_YGBNo5gkAX8cJsw4&_nc_ht=scontent.fcpq3-1.fna&_nc_tp=7&oh=168327735817ed1982dd001a011fa7f0&oe=5F25358C" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-dark">Programador do Front-End</h4>
                                        <p class="card-text text-dark">Brayan Roberto Viva.</p>
                                    </div>
                                    <div class="card-footer">
                                    <a><input type="button" title="Mostrar redes sociais ?" value="Ver Mais!" class="btn btn-roxo btn-primary"/></a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- FINALZANDO O CONTAINER DO BOOTSTRAP  -->
                        </div>



                        <div class="area_texto">
                        <p > Olá somos alunos do Curso Técnico em Informática na Escola Salesiana São José - CPDB. Somos aficionado pela área de Hardware, Somos integrantes deste grupo maravilhoso 
                        no intuito de desenvolver um site facilitador de hardware.<br/> Formado por três participantes, Criador do site em design: Guilherme Drumond, Criador do Banco de Dados: Brayan Roberto, Criador das funcionalidades javascript: Thales Gabriel.</p>
                        </div>
            </div>
        </section>
        <footer>
        
        <br/>
        <p class="footer"> © 2020 - HARDWARE ASSEMBLY </p>
        </footer>  
    <button onclick="backToTop()" id="btnTop"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="_js/topo.js"></script>
    <script type="text/javascript" src="_js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="_js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="_js/script.js"></script>
    <script type="text/javascript" src="_js/smoothscroll.js"></script>
    <script>$(window).on("load",function(){$(".loader-wrapper").fadeOut("fast");});</script>
    <script type="text/javascript" src="_js/jquery-3.5.1.min.js"></script>
   </body>
</html>