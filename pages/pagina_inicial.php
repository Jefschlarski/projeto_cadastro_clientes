<?php
include '../php/conexao.php';
include '../php/funçoes.php';
require_once('../php/verificaçao.php');
verification('/pages/pagina_login.html');



$result = $conn->query("select * from clientes");


while ($cliente = $result->fetch()) {
         //print_r($cliente);
         $listadeclientes .= 
         '<tr class="conteudo_tabela" >
         <td>'.$cliente['nome'].'</td>
         <td>'.$cliente['cpf'].'</td>
         <td>'.$cliente['celular'].'</td>
         <td>'.$cliente['email'].'</td>
         <td>'.$cliente['status'].'</td>
         <td><a class="btnEditar" href="/pages/pagina_editar.php?cliente_id='.$cliente['id'].'">Editar</a></td>
         </tr>';
    };

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/9e50940400.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/paginaInicial.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <section>
    <div class="left_bar">
        <div class="logo">
            <img src="../imgs/img1.png" width="50px" alt="">
        </div>
        <div class="menu_content">
        <i id="icon_clientes" class="fas fa-user"></i><a id="text_clientes" href="">Clientes</a>
        </div>
    </div>
    <div class="right_content">
        <div class="usuario">
            <a href="../php/deslogar.php">deslogar</a>
            <a href=""><?php echo $_SESSION['nome']; ?></a> 
            <a href=""><img id="icon_user" src="/imgs/do-utilizador.png" alt=""></a>
        </div>
        <div class="clientes">
            <div class="topo_clientes">
            <h1>Clientes</h1>
            <a class="criarBtn" href="/pages/pagina_registro.php">+</a>
            </div>
            <div class="tabela_clientes">
                <table class="tabela">
                    
                    <tr class="topo_tabela">
                        <td>NOME COMPLETO</td>
                        <td>CPF</td>
                        <td>CELULAR</td>
                        <td>E-MAIL</td>
                        <td>STATUS</td>
                        <td>AÇÃO</td>
                    </tr>

                    <?php echo $listadeclientes; ?>
                </table>
            </div>
        </div>
</div>
</section>
</body>
</html>