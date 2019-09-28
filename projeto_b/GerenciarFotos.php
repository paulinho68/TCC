<?php
  //session_start();
  //if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
  //  header('Location: login.php?login=erro2');
  //}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ProjetoCrud</title>
  </head>
  <body>
     <?php include 'topoADM.php' ?> 
    
    <center><h1 class="mt-5">Gerenciador de Galeria</h1></center>
    <div class="container mt-5 border border-secondary p-5" style="max-width:500px;border-radius: 5px;">
       
        <form class="container" enctype="multipart/form-data" action="bd/_adicionarFotos_.php" method="post">
            <div>
               <label for="">Descrição da imagem (opcional):</label>
                <input class="form-control" name="descricao" type="text"/>
            </div>
               <br>
                <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
            <div>
                <input name="imagem" type="file"/>
            </div>
                <br>
            <div class="d-flex justify-content-end">
                <input class="btn btn-primary" type="submit" value="Salvar"/>
            </div>
        </form>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>