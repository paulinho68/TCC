<?php

	if( isset( $_GET['status'] ) )
	{   
        include_once 'conexao.php';
        
		$id = $_GET['id'];
        $status = $_GET['status'];
		$sql = "UPDATE comentarios SET relevante = $status WHERE id = $id";

		if(mysqli_query($con, $sql)){
            if($status == 1){
                echo "O comentário de código $id agora é relevante e aparecerá na tela incial";
            }else{
                echo "O comentário de código $id deixou de ser relevante e desaparecerá da tela incial";
            }
        } else{
            echo "Houve um erro ao gravar no banco. Tente novamente.";
        }
	}

?>