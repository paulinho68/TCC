<?php
    session_start();
    if(isset($_SESSION['perfil'])):
       header('Location: adm.php');
       exit;
    endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/LoginEstilo.css">

    <title>Maurício Luminárias</title>

</head>
  
<style>
  body,html{
      background-image: url('imagens/Foto10.png');
  }
</style>
  
<body>
    
    <?php include 'topo_adm.php'; ?>

    <div class="container-fluid">

      <div class="container-fluid float-left" id="main">

        <!------ Início Conteúdo ----->
        <div class="d-flex justify-content-center h-100">
          <div class="card">
            <div class="card-header">
              <h3><img src="imagens/logo.png" style="width: 150px;" alt=""></h3>
              <div class="d-flex justify-content-end social_icon">
                <span><i class="fab fa-facebook"></i></span>
                <span><i class="fab fa-instagram"></i></span>
              </div>
            </div>

            <div class="card-body">
           <!-- <form id="formentrar" action="bd/logar.php">-->
               <form id="" action="bd/logar.php" method="post">
                <?php if(isset($_SESSION['resposta'])):
                ?>
                    <div>
                        <p>Erro: <?php echo $_SESSION['resposta']; ?></p>
                    </div>
                <?php
                    endif;
                    unset($_SESSION['resposta']);
                ?>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input name="email" type="email" class="form-control" placeholder="Email" value="" required>
                </div>

                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha" autocomplete="off">
                  <button type="button" id="show_senha" name="show_senha" class="fa fa-eye-slash"></button>
                </div>

                <div class="row align-items-center remember">
                  <input type="checkbox" id="autoSizingCheck">Lembrar-me
                </div>

                <div class="form-group">
                  <input id="btnlogar" name="btnlogar" type="submit" value="Entrar" class="btn float-right login_btn">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!------ Fim Conteúdo ----->

      </div>

    </div>

    <!------ Modal Esqueceu senha ----->
    <div id="pwdModal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="d-flex justify-content-center h-100">
          <div class="card">
            <div class="card-body" style="background-color:#363636;">
              <form id="formesqueceusenha" action="bd/envianovasenha.php">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <br><br>
                <label class="text-center" style="color:white">Digite seu email abaixo e nós enviaremos um link para redefinir sua senha </label>
                <br><br><br>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input name="email" type="text" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required oninvalid="setCustomValidity('Por favor, preencha seu email no formato example@example.com')" onchange="try{setCustomValidity('')}catch(e){}">
                </div>
                <br><br><br>
                <div class="form-group">
                  <input id="btnenviaremail" name ="btnenviaremail" type="submit" value="Enviar" class="btn float-right login_btn">
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!------ Fim Modal Esqueceu senha ----->



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="funcoesScript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>