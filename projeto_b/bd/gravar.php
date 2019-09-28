<?php
    
    session_start();
    include_once('../funcoesPHP.php');
    include 'conexao.php';

    if(isset($_POST['cadastro'])){
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = sha1($_POST['senha']);
        $confirmasenha = sha1($_POST['confirmasenha']);
        $perfil = $_POST['perfil'];

        if(empty($nome) || empty($email) || empty($senha) || empty($confirmasenha) || empty($perfil)){
            $status = "Verifique se todos os campos obrigatórios foram preenchidos";
        } else{
            $sql_verificaemail = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email'");

            if(mysqli_num_rows($sql_verificaemail)!=1){
                //Verifica se as senhas são iguais
                if($senha == $confirmasenha){

                    //Insere no banco todos os dados informados
                    $sql_cadastro = "INSERT INTO usuarios VALUES(null, '{$nome}', '{$email}', '{$senha}', '{$perfil}')";

                    $status = (mysqli_query($con, $sql_cadastro)) ? "Usuário cadastrado com sucesso" : "Erro ao conectar com o banco.";

                }else{
                    $status = "Senhas diferentes";
                } 
            }else{
                $status = "Email já existe. Tente outro.";
            }
        }

        $_SESSION['resposta'] = $status;
        header('Location: ../cadastro_adm.php');
        exit();

    } else {
        header('Location: ../cadastro_adm.php');
        exit();
    }

?>