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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ProjetoCrud</title>
</head>
<body>

    <?php include 'topo_adm.php'; ?> 

    <center><h1 class="mt-5">Administração</h1></center>

    <div class="container p-10 " style="margin-top: 40px">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clientes &amp; Usuários </h5>
              <p class="card-text">Adicionar um funcionário  <span style="color: red;">(O funcionário adicionado terá acesso a parte de administração e todas as suas funcionalidades).</span></p>
              <p class="card-text">Tabela com todos os seus clientes e suas devidas informações.</p>
              <div class="d-flex justify-content-end">
                <a href="cadastro_adm.php" class="btn btn-primary mr-5">Adicionar Usuário</a>
                <a href="listaUsuario.php" class="btn btn-primary">Listar Usuários</a>
              </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title">Suas Encomendas:</h5>
              <p class="card-text"></p>
              <div class="d-flex justify-content-end">
                <a href="EncomendasResp.php" class="btn btn-success mr-5">Visulizar encomendas Respondidas</a>
                <a href="EncomendasNaoResp.php" class="btn btn-primary ">Visualizar encomendas Pendentes <span class="badge badge-light ml-2">4</span></a>
              </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title">Comentários</h5>
              <p class="card-text">Responda comentários dos sues clientes. </p>
              <p class="card-text">Classifique os comentários que são ou não são relevantes <span style="color: red;">(Esses comentários serão exibidos na página principal).</span></p>
              <div class="d-flex justify-content-end">
                <a href="listaComentarios.php" class="btn btn-primary">Listar Comentários</a>
              </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">Gerenciando sua galeria</h5>
                <p class="card-text">Excluir ou adicionar fotos da página de galeria.</p>
                <div class="d-flex justify-content-end">
                    <a href="gerenciadorGaleria.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>