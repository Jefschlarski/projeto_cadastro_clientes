<?php 
include '../php/conexao.php';

$conn->query("delete from projeto_final.clientes where id =".$_POST['id']);
header('location:/pages/pagina_inicial.php');
?>
