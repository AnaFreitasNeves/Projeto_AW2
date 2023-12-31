<html class="pt" lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Força do bem</title>
  <link rel="icon" type="imagem/png" href="https://uploaddeimagens.com.br/images/004/457/464/full/imagem_2023-05-08_113702062.png?1683556624"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="/CSS/Elementos.css">
  <link rel="stylesheet" href="/CSS/Principais.css">
  <link rel="stylesheet" href="CSS/Carousel.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap"
    rel="stylesheet">

  <link href="CSS/tooplate-clean-work.css" rel="stylesheet">

  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

  <!-- Script menu-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <script src="/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

  <header id="headerContainer"></header>

  <div class="overlay">
    <div class="loader"></div>
  </div>

  <div class="carousel">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
      <div class="progress-bar__fill"></div>
    </div>

    <div class="main-post-wrapper">
      <div class="slides">
        <article class="main-post main-post--active">
          <div class="main-post__image">
            <img
              src="https://uploaddeimagens.com.br/images/004/550/177/full/imagem_2023-07-19_150140670.png?1689789702"
              alt="Imagem de pessoa com caixa de doação. Feita através do Canva"/>
          </div>
          <div class="main-post__content">
            <div class="main-post__tag-wrapper">
              <span class="main-post__tag">O que é uma ONG?</span>
            </div>
            <h1 class="main-post__title" id="Slide1"></h1>
          </div>
        </article>

        <article class="main-post main-post--not-active">
          <div class="main-post__image">
            <img
              src="https://uploaddeimagens.com.br/images/004/550/191/full/imagem_2023-07-19_150526456.png?1689789929"
              alt="Imagem de pessoa servindo comida. Feita através do Canva"/>
          </div>
          <div class="main-post__content">
            <div class="main-post__tag-wrapper">
              <span class="main-post__tag">O que elas fazem?</span>
            </div>
            <h1 class="main-post__title" id="Slide2"></h1>
          </div>
        </article>

        <article class="main-post main-post--not-active">
          <div class="main-post__image">
            <img
              src="https://uploaddeimagens.com.br/images/004/550/184/full/imagem_2023-07-19_150320618.png?1689789802"
              alt="Imagem de pessoa com caixa de doação. Feita através do Canva"/>
          </div>
          <div class="main-post__content">
            <div class="main-post__tag-wrapper">
              <span class="main-post__tag">Formas de ajudar</span>
            </div>
            <h1 class="main-post__title" id="Slide3"></h1>
          </div>
        </article>
      </div>
    </div>

    <div class="posts-wrapper hide-on-mobile">

      <article class="post post--active">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
      </article>

      <article class="post">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
      </article>

      <article class="post">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
      </article>

    </div>
  </div>

  <br>
  <div class="container">
    <h2 class="my-3">Conheça algumas ONGs</h2>
  </div><br>

  <div class="Ex_ONGs">
    <div class="Ex_ONGs-item">
      <img src="https://uploaddeimagens.com.br/images/004/544/842/full/imagem_2023-07-14_115108453.png?1689346280"
        alt="Icone ONG Mara Gabrilli">
      <h4><a href="/ONGs.html">Instituto Mara Gabrilli</a></h4>
      <p id="Ong_MG"></p>
    </div>

    <div class="Ex_ONGs-item">
      <img src="https://uploaddeimagens.com.br/images/004/456/692/thumb/imagem_2023-05-07_131637551.png?1683476201"
        alt="Icone ONG Themis Furigo">
      <h4><a href="/ONGs.html">Themis Furigo</a></h4>
      <p id="Ong_TH"></p>

    </div>

    <div class="Ex_ONGs-item">
      <img src="https://uploaddeimagens.com.br/images/004/544/840/full/imagem_2023-07-14_114824488.png?1689346147"
        alt="Icone ONG Caminha Down">
      <h4><a href="/ONGs.html">Caminha Down</a></h4>
      <p id="Ong_CD"></p>
    </div>

    <div class="Ex_ONGs-item">
      <img src="https://uploaddeimagens.com.br/images/004/464/576/full/imagem_2023-05-12_231228956.png?1683943994"
        alt="Icone ONG a gente ajuda" height="30%">
      <h4><a href="/ONGs.html">A gente ajuda</a></h4>
      <p id="Ong_AGJ"></p>

    </div>

    <div class="Ex_ONGs-item">
      <img src="https://uploaddeimagens.com.br/images/004/456/690/full/imagem_2023-05-07_131347971.png?1683476032"
        alt="Icone ONG Hamburgada" height="30%">
      <h4><a href="/ONGs.html">Hamburgada do bem</a></h4>
      <p id="Ong_HB"></p>
    </div>

  </div>

  <br>
  <section class="services-section section-padding section-bg">
    <div class="container">

      <div class="services-info mt-4 mt-lg-0 mt-md-0">

        <div class="desktop-only">
          <p id="textoDescricao" style="font-size: 1.1rem;"></p>
        </div>

        <div class="mobile-only">
          <p style="font-size: 1.1rem;">Está com dúvidas sobre qual ONG apoiar? Não se preocupe, nós podemos te ajudar! Basta preencher um breve checklist de opções de atividades que nos ajudará a compreender suas preferências e princípios.</p>
        </div>

          <button id="testButton" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Fazer teste
          </button>
          <br>
          <p id="message" style="display: none;"></p>

            <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eu posso ajudar:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <ul class="list-group list-group">
                <ul class="list-group">
                    <li class="list-group-item ">
                        <input class="form-check-input me-1" type="checkbox" value="Financeira" id="forma1">
                        <label class="form-check-label" for="forma1">Ajuda Financeira</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Roupa" id="forma2">
                        <label class="form-check-label" for="forma2">Doação de Roupa</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Alimento" id="forma3">
                        <label class="form-check-label" for="forma3">Doação de Alimento não perecível</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Brinquedo" id="forma4">
                        <label class="form-check-label" for="forma4">Doação de Brinquedo</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Cobertor" id="forma5">
                        <label class="form-check-label" for="forma5">Doação de Cobertor</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Higiene" id="forma6">
                        <label class="form-check-label" for="forma6">Doação de Itens de Higiene Pessoal</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Animais" id="forma7">
                        <label class="form-check-label" for="forma7">Doação de Ração para Animais</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Voluntario" id="forma8">
                        <label class="form-check-label" for="forma8">Ser Voluntário(a)</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Campanha" id="forma9">
                        <label class="form-check-label" for="forma9">Apoiar Campanhas</label>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button onclick="showRelatedONGs()">Descobrir</button>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
  </section>

  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="toastNoOptions" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="https://uploaddeimagens.com.br/images/004/457/464/full/imagem_2023-05-08_113702062.png?1683556624" alt="Icone do sistema" height="20em">
        <strong class="me-auto">Força do Bem</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Por favor, selecione pelo menos uma opção para descobrir o resultado!
      </div>
    </div>
  </div>

  <section class="contact-section section-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
          <h2 class="my-3">Ficou com alguma dúvida?</h2>

          <p style="font-size: 1.1rem;">Utilize os nossos meios de contato abaixo e permita-nos guiá-lo rumo a uma compreensão completa e satisfatória. Responderemos o mais breve possível! </p>

          <div class="contact-info bg-white shadow-lg">
            <h3 class="mb-4">Nossos canais</h3>

              <ul class="social-icon mt-4">
                <li class="social-icon-item">
                    <a href="https://www.instagram.com/forcadobem2023/" target="_blank" class="#">
                        <img src="https://cdn-icons-png.flaticon.com/128/3670/3670274.png" alt="">
                    </a>
                </li>

                <li class="social-icon-item">
                    <a href="https://agilitytech.blogspot.com" target="_blank" class="#">
                        <img src="https://cdn-icons-png.flaticon.com/128/4494/4494512.png" alt="">
                    </a>
                </li>

            </ul>
            <h5 class="d-flex mb-3"></h5>

            <p class="text-white d-flex">
              <a href="mailto:equipe5.agiltytech@gmail.com" target="_blank" class="site-footer-link">
                 Email: equipe5.agiltytech@gmail.com
              </a>
            </p>
            </h5>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0"
            action="equipe5.agilitytech@gmail.com" method="post" role="form">
            <div class="consulting-form-header d-flex align-items-center">
              <h3 class="mb-4">Envie sua mensagem</h3>
            </div>

            <div class="consulting-form-body">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <label for="">Nome<input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                      required></label>
                </div>

                <div class="col-lg-6 col-12">
        <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" action="scripts/processar-formulario.php" method="post" role="form">
          <div class="consulting-form-header d-flex align-items-center">
            <h3 class="mb-4">Envie sua mensagem</h3>
          </div>

          <div class="consulting-form-body">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="volunteer-name">Nome<input type="text" name="volunteer-name" id="volunteer-name" class="form-control" required></label>
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="volunteer-email">E-mail<input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" required></label>
              </div>
            </div>

            <select class="form-select form-control" name="job-salary" id="job-salary" aria-label="Default select example">
              <option selected>Você é um(a)</option>
              <option value="1">ONG</option>
              <option value="2">Voluntário(a)</option>
            </select>
<textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Mensagem"></textarea>

            <div class="col-lg-6 col-md-10 col-8 mx-auto">
              <button type="submit" class="form-control">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


    <footer class="footerContainer"></footer>

  <script src="/AcessoUser/firebase-init.js"></script>
  <script src="/AcessoUser/Auth.js"></script>
  <script src="/JS/checklist.js"></script>
  <script src="/JS/script.js"></script>
  <script src="/JS/CadUser.js"></script>
  <script src="/JS/carrossel.js"></script>
  <script src="/JS/text-database.js"></script>

?>
  </body>
</html>