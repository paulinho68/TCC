<?php
    session_start();
    if(!isset($_SESSION['perfil'])){
        header('Location: login.php');
        exit;
    }
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

    <!-- Folha de Estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/LoginEstilo.css">

    <title>Maurício Luminárias</title>    
</head>

<style>
    html, body{
        height: 100%;
    }
    #corpo{
        background-image: url('imagens/Foto1.png');
    }
    #teste{
        height: 100%;
        background-color: rgba(255, 255, 255, 0.42);
    }
</style>
  
<body id="corpo">
    
    <?php include 'topo_adm.php'; ?>

    <div id="teste" class="container-fluid">

        <div class="container-fluid float-left" id="main">

            <!------ Início Conteúdo ----->
            <div class="d-flex justify-content-center h-100">

                  <div class="card h-50">

                    <div class="card-header">
                        <!-- <h3><img src="imagens/logo.png" style="width: 150px;" alt=""></h3> -->
                        <div class="d-flex justify-content-center social_icon">
                            <span><i class="fas fa-user-circle"></i></span>
                        </div>
                    </div>

                    <div class="card-body">
                      <form id="" action="bd/gravar.php" method="post">
                        <?php 
                            if(isset($_SESSION['resposta'])):
                        ?>
                        <div>
                            <p><?php echo $_SESSION['resposta']; ?></p>
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['resposta']);
                        ?>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" minlength="6" maxlength="8" required autocomplete="off">
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="confirmasenha" class="form-control" placeholder="Confirmar Senha" minlength="6" maxlength="8" required autocomplete="off">
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                            </div>
                            <select class="form-control" name="perfil" id="" required>
                                <option value="" disabled selected>- Selecione -</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Funcionário">Funcionário</option>
                            </select>
                        </div>

                        <div class="card-footers mb-2">
                            <div class="d-flex justify-content-end links">
                              <input name="cadastro" type="submit" style="font-weight: bold;" class="nav-link btn btn-outline-light text-success">
                            </div>
                        </div>
                      </form>

                    </div>

                </div>

            <!------ Fim Conteúdo ----->
            </div>
        </div>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="funcoesScript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>