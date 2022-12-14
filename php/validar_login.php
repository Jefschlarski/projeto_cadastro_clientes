
<?php 

require_once('conexao.php');

$email = ($_POST['email']);
$senha = md5($_POST['senha']);

$sql = 'SELECT * FROM projeto_final.clientes WHERE email=:email AND senha=:senha';
$result = $conn->prepare($sql);
$result->execute(['email'=> $email,'senha' => $senha]);
$user = $result->fetch();


if(!empty($user)){
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['email'] = $user['email'];
    
    header('location:/pages/pagina_inicial.php');
} else{
    header('location:/pages/pagina_login.html');
}
?>