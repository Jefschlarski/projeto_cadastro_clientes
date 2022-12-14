<?php   
 function verificaSessao(){
    if($_SESSION['usuario_logado'] == ''){
        header('location:/pages/pagina_login.html');
    }
 };

?>