<?php

  if(isset($_POST['submit']))
  {
       // Fazendo teste 2 na tela !!!!

    // print_r('nome: ' .$_POST['nome']);
    // print_r('<br>');
    // print_r('email: ' .$_POST['email']);
    // print_r('<br>');
    // print_r('projeto: ' .$_POST['projeto']);
    // print_r('<br>');
    // print_r('detalhes: ' .$_POST['detalhes']);

   include_once('./config.php');
    $nome = $_POST['nome'];
    $emal = $_POST['email'];
    $projeto = $_POST['projeto'];
    $detalhes = $_POST['detalhes'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,projeto,detalhes)
    VALUES ( '$nome','$emal','$projeto','$detalhes')");


}else
(isset($_DELETE['submit']));

include_once('');
    $nome = $_POST[''];
    $emal = $_POST[''];
    $projeto = $_POST[''];
    $detalhes = $_POST[''];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,projeto,detalhes)
    VALUES ('','','','')");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<!-- ARQUIVO CSS-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>


        <!-- HOME DO PROJETO-->

  <header>

    <div class="avatar-user">
      <img src="./img/th_img.jpeg" alt="">
      <h3 class="name">Thiago</h3>
      <p class="postagem">Desenvolvedor</p>
    </div>

    <nav class="navbar">
      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="#jogo">Jogo</a></li>
          <li><a href="#curriculo">Curriculo</a></li>
          
      </ul>
    </nav>

  </header>

 <!-- MENU BURGUER -->
 <div id="menu" class="fas fa-bars"></div>


  <!-- HOME -->

  <section class="home" id="home">

    <h3>Olá</h3>
    <h1>Eu sou <span>Thiago</span></h1>
    <p> tem um grande orgulho em dizer que eu sou um DESENVOLVEDOR e me coloco à disposição para uma vaga de emprego
    no setor de TI da empresa. Participei de cursos de Linguagem de Programação recentemente,clique no Curriculo e verá 
    mais informacões, então tenho muita vontade de 
    colocar em prática os conhecimentos que aprendi.
    Possuo facilidade para aprender e entusiasmo para crescer junto com a empresa. </p>

      <a href="#sobre"><button class="btn">Saiba Mais <i class="fas fa-user"></i></button></a>


  </section>

    <!--  SOBRE  -->

  <section class="sobre" id="sobre">

      <h1 class="heading"><span>Quem sou </span>Eu?</h1>
    
      <div class="row">
        <div class="info">
          
          <h3><span>Nome:</span>Thiago</h3>
          <h3><span>Idade:</span>11/06/1988</h3>
          <h3><span>Formação:</span>Developer</h3>
          <h3><span>Job:</span> ? </h3>

          <a href="https://imgur.com/a/9zv4nQv/"><button class="btn"> Download CV <i class="fas fa-download"></i></button></a>
        
        </div>
          <div class="habilidades">

            <div class="box">
                <span>+1</span>
                <h3>Ano de Projeto Pessoal</h3>
            </div>

            <div class="box">
              <span>+8</span>
              <h3>Projetos Completos</h3>
          </div>

          <div class="box">
            <span>+6</span>
            <h3>Linguagem de Programção</h3>
        </div>

        <div class="box">
          <span>+2</span>
          <h3>Ano de Estudos</h3>
      </div>

          </div>
      </div>

  </section>


      <!--  CONTATO  -->

      <section class="contato" id="contato">

        <h1 class="heading"><span>Onde me </span>Encontrar?</h1>
      
        <div class="row">

          <div class="conteudo">

            <h3 class="title"> Meus Contatos</h3>

            <div class="info">

              <h3><i class="fas fa-envelope"></i>thiagobarcos@yahoo.com.br</h3>
              <h3><i class="fas fa-phone"></i>+55 (21) 22042528</h3>
              <h3><i class="fas fa-cellphone"></i>+55 (21) 9 7312-7502</h3>
              <h3><i class="fas fa-map-marker-alt"></i>Campo Grande - RJ</h3>

            </div><br><br>

             <div style="color: red; font-size: 2rem; list-style: none" class="preencha">
            <ul id="preencha-container" class="preencha-container songs"></ul>
            </div>

          </div>

              <form id="form" action="formulario.php" method="POST">

                <input type="text" name="nome" id='nome' placeholder="Seu nome" class="box" required>
                <input type="email" id='email' name="email" placeholder="Seu e-mail" class="box" required>
                <input type="text" id='projeto' name="projeto" placeholder="Projeto desejado " class="box" required>
                <textarea name="detalhes" id="detalhes" cols="30" class="box message" placeholder="Detalhes" required></textarea>
                <button type="submit" name="submit" class="btn"> Enviar Mensagem <i class="fas fa-paper-plane"></i></button>

              </form>

        </div>
    
          </section>

    <!--  PORTFOLIO  -->

  <section class="portfolio" id="portfolio">

    <h1 class="heading">Meu <span>Portfolio</span></h1>

    <div class="box-conteudo">

      <div class="box">
        <img src="./img/img1-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img2-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img3-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img4-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img5-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img6-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img7-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img8-js.jpg" alt="">
      </div>

      <div class="box">
        <img src="./img/img9-js.jpg" alt="">
      </div>

    </div>

  </section>


    <!--  JOGO DA VELHA  -->

    <section class="jogo" id="jogo">

      <h1 class="heading"><span>Jogo </span> da Velha</h1>
      <br><br>
  <div class="box-conteudo">

  <div class="stage">
    <div>
    <div id="0" class="square"></div>
    <div id="1" class="square"></div>
    <div id="2" class="square"></div>
  </div>
  <div>
    <div id="3" class="square"></div>
    <div id="4" class="square"></div>
    <div id="5" class="square"></div>
  </div>
  <div>
    <div id="6" class="square"></div>
    <div id="7" class="square"></div>
    <div id="8" class="square"></div>
  </div>
</div>
<br />

<div>
  <button id="reset">Reset</button>
</div>

</div>

</section>




    <!--  CURRICULO -->

    <section class="curriculo" id="curriculo">

      <h1 class="heading"><span>Currículo </span>Th</h1>
  <br><br>

  <div class="box-conteudo">

      <div class="box">
        <img src="./img/curriculo-dev.jpeg" alt="">
      </div>
    

</div>

</section>

      <!--  JQUERY CDN LINK  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ARQUIVO JS-->
<script src="js/script.js"></script>
<script src="js/interface.js"></script>
</body>
</html>