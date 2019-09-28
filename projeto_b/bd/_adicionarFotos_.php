<?php
include 'conexao.php';

//if($con){
//    $baseSelecionada = mysql_select_db("MauricioLuminarias");
//    if (!$baseSelecionada){
//        die ('Não foi possível conectar a base de dados: ' . mysql_error());
//    }   
//}else{
//    die('Não conectado : ' . mysql_error());
//}

//$descricao = $_POST['descricao'];
//$imagem = $_FILES['imagem']['tmp_name'];
//$tamanho = $_FILES['imagem']['size'];
//$tipo = $_FILES['imagem']['type'];
//$nome = $_FILES['imagem']['name'];


//$uploaddir = '../upload/';
//$uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
//
//echo $_FILES['imagem']['error'];
//echo '<pre>';
//if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
//    echo "Arquivo válido e enviado com sucesso.\n";
//} else {
//    echo "Possível ataque de upload de arquivo!\n";
//}
//
//echo 'Aqui está mais informações de debug:';
//print_r($_FILES);
//
//print "</pre>";




//if ($imagem != "none"){
//    $fp = fopen($imagem, "rb");
//    $conteudo = fread($fp, $tamanho);
//    $conteudo = addslashes($conteudo);
//    fclose($fp);
//
//    $sql = "INSERT INTO tabela_imagens (null, descricao, nome_imagem, 
//    tamanho_imagem, tipo_imagem, imagem) VALUES(null, 
//    '$descricao','$nome','$tamanho', '$tipo','$conteudo')";
//
//    //mysql_query($sql) or die("Algo deu errado ao inserir o registro. Tente novamente.");
//    
//    echo 'Registro inserido com sucesso!';
//    
//    header('Location: index.php');
//    
//    if(mysql_affected_rows($con) > 0){
//        print "A imagem foi salva na base de dados.";
//    }else{
//        print "Não foi possível salvar a imagem na base de dados.";
//    }
//    
//}else{
//        print "Não foi possível carregar a imagem.";
//}
?>