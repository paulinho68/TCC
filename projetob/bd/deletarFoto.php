<?php 
include 'conexao.php';
$id = $_GET['id'];
$deletar = "DELETE FROM fotos WHERE id = $id";
$fila = mysqli_query($con,$deletar);
echo" <script> alert('Usuário deletado com sucesso'); </script>";
header("location: ../gerenciadorGaleria.php");
?>