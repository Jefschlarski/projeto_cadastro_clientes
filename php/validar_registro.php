<?php 
include '../php/conexao.php';

$senhacodificada = md5($_POST['senha']);

$conn->query("insert into projeto_final.clientes 
(`nome`,`cpf`,`celular`,`email`,`status`,`genero`,`senha`,`nascimento`)
values('".$_POST['nome']."','".$_POST['cpf']."','".$_POST['celular']."','".$_POST['email']."','".$_POST['status']."','".$_POST['genero']."','".$senhacodificada."','".$_POST['data']."')");
header('location:/pages/pagina_inicial.php');
?>