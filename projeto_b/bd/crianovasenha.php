<?php

    include 'conexao.php';
    
    $senha = sha1($_POST['senha']);
    $confirmasenha = sha1($_POST['confirmasenha']);
    $chave_senha = $_POST["chave"];

    if(empty($senha) || empty($confirmasenha)){
        $status = "Verifique se todos os campos obrigatórios foram preenchidos";
    } else{
    
        //Verifica se as senhas são iguais
        if($senhanova == $confirmasenhanova){

            //Grava a nova senha no banco de dados
            $alterasenha = "UPDATE cliente SET senha = '$senhanova' WHERE chave_senha = '$chave_senha'";

            $status = (mysqli_query($con, $alterasenha)) ? "Sua senha foi redefinida com sucesso" : "Erro ao connectar com o banco";

        } else{
            $status = "Confira se suas senhas são iguais";
        }
    }
        
    echo json_encode(
        array(
            "status" => $status
        )
    )


?>