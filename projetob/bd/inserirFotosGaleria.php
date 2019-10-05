<?php 
    session_start();
    $id = $_SESSION['id'];
    echo $id ."<br>" ;
    include_once('../funcoesPHP.php');
    include 'conexao.php';

    if(isset($_FILES['imagem'])){
        $imagem = $_FILES["imagem"];
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;

        $destino = '../galeria/' . $_FILES['imagem']['name'];
        $nome = $_FILES['imagem'][ 'name' ];
        $tipo = $_FILES['imagem']['type'];
        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            // Concatena a pasta com o nome
            $destino = '../galeria/' . $nome;
            echo $destino;
            // tenta mover o arquivo para o destino
            if (move_uploaded_file($imagem['tmp_name'], $destino)) {
                if($descricao == null){
                    $sql = "INSERT INTO fotos (id,imagem,tipo,usuario_id) values (null,'{$destino}','{$tipo}','{$id}')";
                }else{
                    $sql = "INSERT INTO fotos (id,imagem,tipo,descricao,usuario_id) values (null,'{$destino}','{$tipo}','{$descricao}','{$id}')";
                }
                if (mysqli_query($con, $sql)){ 
                    header('location: ../gerenciadorGaleria.php?status=sucesso');
                }else{ 
                    header('location: ../gerenciadorGaleria.php?status=erro');
                } 
            }
            else
                header('location: ../gerenciadorGaleria.php?status=erro');
        }else{
            header('location: ../gerenciadorGaleria.php?status=erro');
        }
    }else{
        header('location:../gerenciadorGaleria.php?erro=imagem');
    }



?>