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
    <title>Maurício Luminárias</title>
</head>

<body>
    
    <?php include 'topo_adm.php'; ?>

    <div class="container">
        <br>
        <h3>Comentários</h3>
        <hr>
        <?php
                
            include_once 'bd/conexao.php';

            $sql = "SELECT * FROM comentarios";

            $result = mysqli_query($con, $sql); 

            $totalRegistros = mysqli_num_rows($result);

            if($totalRegistros > 0){?>
                <table class="table table-hover">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Comentário</th>
                        <th>Data de criação</th>
                        <th>Relevante</th>
                    </tr>
                    <?php
                       while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>{$row['nome']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['comentario']}</td>";
                            echo "<td>{$row['data_criacao']}</td>";
                            echo 
                            "<td>
                                <input id='toggle-demo' type='checkbox' data-toggle='toggle' data-on='Sim' data-off='Não' data-onstyle='success' data-size='xs'>
                                
                            </td>";
                           echo "</tr>";
                       }     
                    ?>
                </table>
            <?php
            }else{
                echo "Nenhum registro encontrado!";
            }  
            mysqli_close($con);          
        ?>
    </div>
    
    <script>
      $(function() {
        $('#toggle-demo').bootstrapToggle('Sim'){
            <?php 
                include_once 'bd/conexao.php';
                $sql = "UPDATE comentarios SET relevante = 1 WHERE id = id";
                mysqli_close($con);
            ?>
        });
      })
    </script>

    
    <!-- JavaScript (Opcional)  -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>
</body>

</html>
