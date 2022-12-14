<?php 

include '../php/conexao.php';
$senhacodificada = md5($_POST['senha']);

$conn->query("update projeto_final.clientes set nome = '".$_POST['nome']."', cpf = '".$_POST['cpf']."', genero = '".$_POST['genero']."', celular = '".$_POST['celular']."', email = '".$_POST['email']."', status = '".$_POST['status']."', senha = '".$senhacodificada ."', nascimento = '".$_POST['data']."' where id = ".$_POST['id']);
header('location:/pages/pagina_inicial.php');
?>