<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Folha de Estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Maurício Luminárias</title>

</head>

<body>

    <!-- ===========1º Container - Principal =========== -->
    <div class="box" id="container1">
      <?php include 'topo.php'; ?>
      <div class="d-flex justify-content-end" style="height: 70%;">
        <div class="d-flex align-items-center" id="C1main" style="width:50%;">
          <div>
            <h1 class="h1-principal display-3 ">Encomende já o seu!</h1>
            <div id="cliqueAqui">
              <a class="btn btn-md border border-dark" href="pre_encomenda.php" style="font-weight: bold;">Clique Aqui</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===========2º Container - Fotos =========== -->   
    <div class="container box2 pb-4" id="container2">
      <section class="container" id="carousel1">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

          <!--Controls-->
          <div class="controls-top d-flex justify-content-center">
            <a class="text-dark" href="#multi-item-example" data-slide="prev"><i class="fas fa-arrow-circle-left fa-2x p-3"></i></a>
            <a class="text-dark" href="#multi-item-example" data-slide="next"><i class="fas fa-arrow-circle-right fa-2x p-3"></i></a>
          </div>
          <!--/.Controls-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini3.png"
                    alt="Card image cap"></a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini4.png"
                    alt="Card image cap"></a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini6.png"
                    alt="Card image cap"></a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini7.png"
                    alt="Card image cap"></a>
                </div>
              </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini8.png"
                    alt="Card image cap"></a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini9.png"
                    alt="Card image cap"></a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini10.png"
                    alt="Card image cap"></a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <a href="galeria.php"><img class="img-fluid" src="imagens/Low/Mini15.png"
                    alt="Card image cap"></a>
                </div>
              </div>

            </div>
            <!--/.Second slide-->

          </div>
          <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
      </section>
    </div>

    <div class="container box2 pb-4" id="container2">
      <section class="container"id="carousel2" >
        <!--Carousel Wrapper-->
        <div id="multi-item-example2" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

          <!--Controls-->
          <div class="controls-top d-flex justify-content-center">
            <a class="text-dark" href="#multi-item-example2" data-slide="prev"><i class="fas fa-arrow-circle-left fa-2x p-3"></i></a>
            <a class="text-dark" href="#multi-item-example2" data-slide="next"><i class="fas fa-arrow-circle-right fa-2x p-3"></i></a>
          </div>
          <!--/.Controls-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <img class="img-fluid" src="imagens/Low/Mini3.png"
                    alt="Card image cap">
                </div>
              </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <img class="img-fluid" src="imagens/Low/Mini4.png"
                    alt="Card image cap">
                </div>
              </div>
            </div>
            <!--/.Second slide-->
            <!--third slide-->
            <div class="carousel-item">

              <div class="col-md-3 mb-3">
                <div class="card" id="zoom">
                  <img class="img-fluid" src="imagens/Low/Mini6.png"
                    alt="Card image cap">
                </div>
              </div>
            </div>
            <!--/.third slide-->

          </div>
          <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
      </section>
    </div>

    <!-- ===========3º Container - Comentários =========== -->
    <div class="box d-flex justify-content-end" id="container3">
      <div class="d-flex align-items-center justify-content-center" id="center" style="width:50%;">
        <div id="center">
          <div class="ml-4">
            <h4>Comentários mais relevantes:</h4>
          </div>

          <div class="card mr-4 ml-4 d-block" style="background-color: rgba(0,0,0, 0.2);">
              <div class="card-body container">
                  <div class="row">
                      <div class="col-2" id="ocultar">
                          <img src="imagens/capaprofile.jpg" id="ocultar" class="imagens" />
                          <p id="ocultar" class="text-dark text-center">15 Minutes Ago</p>
                      </div>
                      <div class="col-10">
                          <p>
                              <a class="float-left text-light" href="#"><strong>Fulano de Tal</strong></a>
                              <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                              <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                              <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                              <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                          </p>
                          <div class="clearfix"></div>
                          <p class="text-justify" style="opacity: 0.9;">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged...</p>
                          <p>
                              <a style="cursor: pointer;" class="float-right btn btn-outline-light text-light ml-2"> <i class="fa fa-reply"></i> Responder</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>



          <form class="form form-group mt-5 mr-4 ml-4" method="post" action="bd/_enviarComentario_.php">

            <label for="exampleFormControlTextarea6" class="d-block">Digite Seu Nome: *</label>
            <input type="text" class=" form-control z-depth-1" style="border: solid 1px; opacity: 0.5;" rows="3" name="nome" required placeholder="João de Souza">

            <label for="exampleFormControlTextarea6" class="d-block">Digite Seu Email: *</label>
            <input type="email" class=" form-control z-depth-1" name="email" id="exampleFormControlTextarea6" style="border: solid 1px; opacity: 0.5;" rows="3" required placeholder="Seuemail@email.com">

            <div class="form-group shadow-textarea">
              <label for="exampleFormControlTextarea6">Deixe seu feedback abaixo: *</label>
              <textarea class="form-control z-depth-1" name="comentario" id="exampleFormControlTextarea6" style="border: solid 1px; opacity: 0.5;" rows="3" required placeholder="Deixe seu elogio, ou faça uma crítica construtiva.."></textarea>
            </div>

            <div id="recaptcha" class="g-recaptcha" data-sitekey="6LdRZbkUAAAAAFyCswFfcqRFRtnsgUngiKhaOrPw"></div>
            <span class="msg-error error"></span>

            <div class="form-group">
                <button id="btnenviar" name="btnenviar" type="submit" class="btn bg-light float-right login_btn">Enviar</button>
            </div>

          </form>
        </div>
      </div>

    </div>

    <!-- ===========4º Container - Sobre Maurício=========== -->   
    <div class="container box2 pt-5" id="container4">
        <section class="container" >

            <div class="accordion" id="accordionExample">
             <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header bg-info" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link text-light nav-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                     <i class="fas fa-hand-point-up mr-3"></i>Saiba mais sobre o Maurício:
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="d-flex">
                      <img width="186" height="186" id="ocultar" src="imagens/Foto5.png" class="d-flex justify-content-center pt-2"/>
                      <div class="card-body font-italic text-justify float-right">
                       A empresa Maurício Luminárias foi criada em 1994, tendo como fundador, José Maurício Perciliano. Iniciou seus trabalhos com carpete e marchetaria. Logo depois, entrou no negócio de luminárias artesanais tendo como público alvo turistas que visitam a sua cidade, Casimiro de Abreu - RJ. Atualmente seus produtos são fábricados em sua casa que fica em Cabo Frio - RJ e sua loja física localiza-se na Av. Amaral Peixoto 395 - Barra de São João. Mais de 25 anos no mercado o seu Maurício se tornou um grande artista se tornando referência em sua região.
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-3"> 
                <div>
                  <!-- Carousel -->
                </div>
            </div>

        </section>
    </div>

    <!-- ===========5º Container - Indefinido=========== -->
    <!-- <div class="box" id="container5">

    <div class="d-flex justify-content-end" style="height: 70%;">
        <div class="d-flex align-items-center" style="width:50%;">
          <div>
            <h1 class="display-4">Encomende já o seu!</h1>
            <div id="cliqueAqui">
              <a class="btn border border-dark" href="#" style="font-weight: bold;">Clique Aqui</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- ===========6º Container - Rodapé =========== -->   
    <footer class="container box2 pt-3 pb-3" id="container2">
        <div class="row">

          <div class="col-8" id="DIVMaps">
            <div class="d-flex justify-content-center">
                <div>
                  <h1 class="text-center">Visite minha loja <i class="fas fa-map-marked-alt ml-2"></i></h1>    
                </div>
            </div>
            <div class="col d-flex justify-content-center">
              <a href="">Av. Amaral Peixoto 395, Barra de São João - RJ <i class="fas fa-hand-point-up"></i></a>
            </div>
          </div>

          <div class="col d-flex justify-content-center mt-2">
            <a href="#"><i href="#" class="fab fa-facebook mr-2 fa-2x"></i></a>
            <a href="#"><i class="fab fa-instagram mr-2 fa-2x"></i></a>
            <a href="#"><i class="fas fa-envelope mr-2 fa-2x"></i></a>
            <a href="#"><i class="fab fa-whatsapp fa-2x"></i></a>
            <a href="#" id="up"><i class="fas fa-map-marked-alt ml-2 fa-2x"></i></a>

          </div>
        </div>

        <div class="d-flex justify-content-end fixed-buttom" >
            <a href="#" id="up"> 
              <i  style="width: 50px;" alt="Volte ao topo" class="fas fa-arrow-up"></i>
            </a> 
        </div>
    </footer>

    <!-- JavaScript (Opcional)  -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
