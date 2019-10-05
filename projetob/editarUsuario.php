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
    
    <title>Maurício Luminárias</title>    
</head>

<body>
    
    <?php
    include 'topo_adm.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        include 'bd/conexao.php';
        $sql = "SELECT * FROM usuarios WHERE id_usuario=".$id;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);   
    }
    ?>
    <div class="container">
        <h3>Edição de Usuários</h3>
        <hr>
        <form action="editarUsuario.php" method="post">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control col-md-4" value="<?php echo $row['nome'];?>">
            <label>E-mail: </label>
            <input type="email" name="email" class="form-control col-md-4" value="<?php echo $row['email'];?>">
            <label>Perfil: </label>
            <select class="form-control" name="perfil" id="" required>
                <option value="" disabled selected>- Selecione -</option>
                <option value="Administrador">Administrador</option>
                <option value="Funcionário">Funcionário</option>
            </select><br>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form><br>
        <a href="gerenciarUsuario.php">Voltar</a>
    </div>
    

    
    <!-- JavaScript (Opcional)  -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>