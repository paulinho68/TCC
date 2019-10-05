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
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("input[name='status']").click(function(){
			var $this = $( this );//guardando o ponteiro em uma variavel, por performance


			var status = $(this).prop('checked') ? 1 : 0;
			var id = $(this).val();


			$.ajax({
				url: 'bd/atualizarRelevancia.php',
				type: 'GET',
				data: 'status='+status+'&id='+id,
				success: function( data ){
					$("#resposta_ajax").html(data);
				}
			});
		});
	});
	</script>
    
    <title>Maurício Luminárias</title>    
</head>

<body>
    
    <?php include 'topo_adm.php'; ?>

    <div class="container">
        <br>
        <h3>Gerenciar Usuários</h3>
        <hr>
        
        <?php
                
        include_once 'bd/conexao.php';

        $sql = "SELECT * FROM usuarios";

        $result = mysqli_query($con, $sql); 

        $totalRegistros = mysqli_num_rows($result);

        if($totalRegistros > 0){?>
            <br>
            <div id="resposta_ajax" style="color: red;"></div>
            <br>
            <form action="" method="post">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Perfil</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        <?php
                        while($row = mysqli_fetch_array($result)){
                            $id = $row['id_usuario'];
                        ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $row['nome'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['perfil'] ?></td>
                                <td><a href='editarUsuario.php?id=<?php echo $row[0] ?>'><i class='fas fa-user-edit'></i></a></td>
                                <td><i class='fas fa-trash-alt'></i></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </form>
        <?php
        }else{
            echo "Nenhum registro encontrado!";
        }  
        mysqli_close($con);
        ?>
    </div>
    

    
    <!-- JavaScript (Opcional)  -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
