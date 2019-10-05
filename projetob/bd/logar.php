<?php
    
    session_start();
    include 'conexao.php';

    if(isset($_POST['btnlogar'])){
        
        $email = $_POST['email'];
        $senha = sha1($_POST['senha']);

        if(empty($email) || empty($senha)){
            $status = "Verifique se todos os campos obrigatórios foram preenchidos";
        } else{
            $sql = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

            if(mysqli_num_rows($sql) == 1){
                $dados = mysqli_fetch_array($sql);
                $_SESSION['perfil'] = $dados['perfil'];
                $_SESSION['id'] = $dados['id_usuario'];
                header('Location: ../adm.php');
            }else{
                $status = "Login incorreto";
            }
        }

        $_SESSION['resposta'] = $status;
        header('Location: ../login.php');
        exit();

    } else {
        header('Location: ../login.php');
        exit();
    }

?>