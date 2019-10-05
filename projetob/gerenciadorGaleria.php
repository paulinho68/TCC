<?php 
    //session_start(); 
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
    <link rel="stylesheet" type="text/css" href="css/admStyle.css">
    
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    
    <title>Maurício Luminárias</title>    
</head>

<body>
    
    <?php include 'topo_adm.php'; ?>
    <div class="container">
    <?php
      
      if(empty($_GET['status']) != 1 && $_GET['status'] == 'sucesso'){
    ?>
        <div class="alert alert-success" role="alert">
          Sua foto foi inserida com sucesso!
        </div>
    <?php
      }elseif(empty($_GET['status']) != 1 && $_GET['status'] == 'erro'){
    ?> 
        <div class="alert alert-danger" role="alert">
          Ops, houve um problema ao inserir a imagem (tamanho não suportado)
        </div>
    <?php
      }
    ?>
      <div class="card mt-5 grow" style="width: 100%;">
      
          <div class="card-header">
            <div class="d-flex justify-content-center social_icon">
              <span><i class="fas fa-images fa-3x"></i></span>
              <h5 class="mt-2 ml-2">Adicionar Foto em sua Galeria</h5>
            </div>
          </div>

          <div class="card-body">
            <form id="formcadastro" enctype="multipart/form-data" class="form-group" action="bd/inserirFotosGaleria.php" method="post">
                
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" style="height: 30px;"><i class="far fa-folder-open"></i></span>
                </div>
                <input type="file" name="imagem" class="upload" >
              </div>

              <div class="input-group d-flex">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                </div>
                <input type="text" class="form-control" disabled placeholder="Descrição da Imagem">
                <textarea class="form-control z-depth-1" name="descricao" id="exampleFormControlTextarea6" style="border: solid 1px; opacity: 0.5; border-radius: 5px;" rows="1"></textarea>
              </div>

              <div class="card-footers mb-2">
                <div class="d-flex justify-content-end links">
                  <input type="submit" style="font-weight: bold;" class="nav-link btn btn-outline-dark mt-2">
                </div>
              </div>

            </form>  
          </div>
        </div>
      </div>
      
      <div class="container mt-5">
            <table class="table border">
                <thead class="text-center thead-dark">
                    <tr style="font-size:20px;">
                    <th scope="col">Imagem</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    
                    <?php
                        include 'bd/conexao.php';
                        $sql = "select * from fotos order by id desc";
                        $busca = mysqli_query($con, $sql);
                        while ($array = mysqli_fetch_array($busca)) {
                            
                            $id = $array['id'];
                            $imagem = $array['imagem'];
                            $descricao = $array['descricao'];
                            $teste = strlen($imagem) - 3;
                            $imagem = substr($imagem,'-' . $teste);
                    ?> 

                            <tr>
                                <td><img src="<?php echo $imagem ?>" style="width:100px;" alt=""></td>
                                <td><?php echo $descricao ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a href="bd/deletarFoto.php?id=<?php echo $id ?>"><i class="fas fa-trash-alt text-dark"></i></a>
                                        </div>
                                    </div>
                                </td>
                    
                            </tr>     
                        
                        <?php } ?>
                    
                </tbody>

            </table>
        </div>


    </div>
    
    <!-- JavaScript (Opcional)  -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
