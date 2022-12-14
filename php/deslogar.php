<?php 

include '../php/conexao.php';
unset($_SESSION['id']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
header('location:/pages/pagina_login.html');

?>