<?php 
    include_once('../funcoesPHP.php');
    include 'conexao.php';

    if(isset($_POST['btnenviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $comentario = $_POST['comentario'];
        $captcha = $_POST['g-recaptcha-response'];
    }

    if($captcha != ''){
        $secreto = '6LdRZbkUAAAAACmx4NJTbxevHDXRfyAUc19AACHh';
        $ip      = $_SERVER['REMOTE_ADDR'];
        $var     = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
        $resposta = json_decode($var, true);
        if($resposta['success']){
            
            if(empty($nome) || empty($email) || empty($comentario)){
                header('location:../index.php?comentario=erro');
            }else{

                // Check connection 
                if (!$con) { 
                    header('location:../index.php?comentario=erro&bd'); 
                }
                // SQL query to insert table 
                $sql = "INSERT INTO comentarios VALUES(null, '{$nome}', '{$email}', '{$comentario}', NOW(), 0)";
                if (mysqli_query($con, $sql)){ 
                    echo "Comentário inserido com sucesso"; 
                }else{ 
                    echo "Erro ao inserir comentário. " . mysqli_error($con); 
                } 

                // Close connection 
                mysqli_close($con); 
            }
            
        }else{
            echo 'A verificação não foi autenticada, gentileza tentar novamente';
        }
     }else{
        echo 'Você não selecionou o recaptcha';
     }

?>