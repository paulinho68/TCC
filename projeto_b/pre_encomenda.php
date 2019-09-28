<?php
    session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MaurícioLuminárias</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Folha de Estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="bg-dark">

  <?php include 'topo.php'; ?>
  
  <div id="container6" class="box">
    <div class="d-flex justify-content-center">
     
      <div class="card mt-5 grow" style="width: 50%;">
        <div class="card-header">
          <div class="d-flex justify-content-center social_icon">
            <span><i class="fas fa-clipboard fa-3x"></i></span>
            <h5 class="mt-2 ml-2">Formulário de Pré-Encomenda</h5>
            
          </div>
        </div>

        <div class="card-body">
          <form id="formcadastro" enctype="multipart/form-data" class="form-group" action="bd/gravarPre_encomenda.php" method="post">
            <div class="input-group form-group d-flex">

              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-clipboard"></i></span>
              </div>
              <input type="text" class="form-control" disabled placeholder="Descrição do Ambiente" required>
              <textarea class="form-control z-depth-1" name="descricao" id="exampleFormControlTextarea6" style="border: solid 1px; opacity: 0.5; border-radius: 5px;" placeholder="ex: Empresa, Universidade, Museu, Restaurante, etc.&#10 No ambiente possuímos móveis com cores em madeira..."  rows="2" required></textarea>

            </div>
            <div class="form-group d-flex row">
              
             <div class="col input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" style="height: 38px;"><i class="fas fa-list-ol"></i></span>
                </div>
                <input type="text" name="medida" class="form-control" placeholder="Medidas Desejadas. Ex: 1,5 x 2,0 m" required>
              </div>
              
              <div class="col input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" style="height: 38px;"><i class="fas fa-list-ol"></i></span>
                </div>
                <input type="number" name="quantidade" class="form-control" min="1" placeholder="Quantidade" required>
              </div>
            </div>
            
            <label for="">Envie uma foto do ambiente para obtermos mais detalhes</label>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text" style="height: 30px;"><i class="far fa-folder-open"></i></span>
              </div>
              <input type="file" name="imagem" class="upload" >
            </div>

            <div class="card-footers mb-2">
              <div class="d-flex justify-content-end links">
                <input type="submit" style="font-weight: bold;" class="nav-link btn btn-outline-dark">
              </div>
            </div>

          </form>  
        </div>
      </div>
    </div>
  </div>

</body>
</html>