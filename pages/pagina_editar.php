<?php 

include '../php/conexao.php';
require_once('../php/verificaçao.php');
verification('/pages/pagina_login.html');

$result = $conn ->query("select * from clientes where id = ".$_GET['cliente_id']);
$cliente = $result ->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/9e50940400.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/paginaInicial.css">
    <link rel="stylesheet" href="../css/paginaregistro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/funcoes.js"></script>
    <script>
    var status = "<?=$cliente['status']?>"
    var genero = "<?=$cliente['genero']?>"
    var email = "<?=$cliente['email']?>"
    </script>
    <title>Editar</title>
</head>
<body  onLoad="checkradio(status,genero)">
    <section>
    <div class="left_bar">
        <div class="logo">
            <img src="../imgs/img1.png" width="50px" alt="">
        </div>
        <div class="menu_content">
        <i id="icon_clientes" class="fas fa-user"></i><a id="text_clientes" href="">Clientes</a>
        </div>
    </div>
    <div  class="right_content">
        <div class="usuario">
            <a href=""><?php echo $_SESSION['nome']; ?></a> 
            <a href=""><img id="icon_user" src="do-utilizador.png" alt=""></a>
        </div>
        <div class="clientes">
            <div class="topo_clientes">
            <h1>Clientes</h1>
            <a href="../pages/pagina_inicial.php" class="criarBtn" ><</a>
            </div>
            <div>


    <form class="formulario" action="../php/validar_editar.php" method="post">
    
    <table class="tabela1">
        <div class="topoTabela1">
        <tr class="topo">
            <td>Editar</td>
          
        </tr>
        </div>
        <div class="conteudoTabela1">
        <tr class="conteudoTabela2">
            <td><label for="nome">Nome completo</label><br>
                <input id="campoName" onblur ="validarnome(this)" type="text" value="<?php echo $cliente['nome'];?>" name="nome" required>
            </td>
            <td><label for="data">Data de nascimento</label><br>
                <input type="date" name="data" id="" value="<?php echo $cliente['nascimento'];?>" required>
            </td>
            <td><label for="cpf">CPF</label><br>
                <input id="campocpf" type="text" autocomplete="off" value="<?php echo $cliente['cpf'];?>" name="cpf" maxlength="11" autocomplete="off" onblur="validarCPF(this)" required >
            </td>
            <td> <label for="telefone">Telefone</label><br>
                 <input id="campotelefone" type="text" value="<?php echo $cliente['celular'];?>" name="celular" maxlength="11" autocomplete="off" onblur="mascaraDeTelefone(this)" required >
            </td>
        </tr>
        <tr class="conteudoTabela3">
        <td> 
                 <label for="email">E-mail</label><br>
                 <input id="campoemail" type="email" onblur="validaremail(this)" name="email" id="" value="<?php echo $cliente['email'];?>" required>
                </td>
            <td id="radio">
                <div>
                <label for="status">Ativo  </label>
                <input type="radio" name="status" id="ativo" value="Ativo" required>
                </div>
                <div>
                 <label for="status">Inativo</label>
                 <input type="radio" name="status" id="inativo" value="Inativo" required>
                </div>
                </td>
            <td id="radio">
                <div>
                <label for="genero">Masculino</label>
                <input type="radio" name="genero" id="masculino" value="Masculino" required>
                 </div>
                 <div>
                <label for="genero">Feminino</label>
                <input type="radio" name="genero" id="feminino" value="Feminino" required>
                </div>
                </td>
                <td>
                  <label for="senha">Senha</label>
                  <input type="password" name="senha" id="" value="" required>
            </td>
        </tr>
        <tr class="btnAlterar">
            <td></td>
            <td></td>
            <td></td>
            <td class="btns">
                <input type="hidden" name="id" value="<?php echo $cliente['id'];?>">
                <input class="inputAlterar" type="submit" value="alterar">
                
            </td>
            </tr>
            </div>
</form>
                <form class="deletarForm" action="../php/deletar.php" method="post">
                <input type="hidden" name="id" value="<?php echo $cliente['id'];?>">
                <input id="deletar" type="submit" value="deletar">
                </form>

            </div>
        </div>
</div>
</section>
</body>
</html>