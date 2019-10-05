<?php

    include_once 'conexao.php';

    $sql = 'SELECT nome, comentario, DATEDIFF(NOW(), data_criacao) AS data FROM comentarios WHERE relevante = 1 ORDER BY RAND() LIMIT 1';

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1){
        $comentario = mysqli_fetch_assoc($result);
        echo json_encode($comentario);
        
    } else{
        echo "Nenhum registro encontrado";
    }

?>