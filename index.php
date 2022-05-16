<?php
require_once 'sql.php';
$u = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>JOKENPO</title>
</head>
<body>
    <header>
        <div class="cab">
        <ul>
        <button><li><a href="#sobre">Sobre o jogo</a></li></button>
        <button><li><a href="cadastra.php">Cadastro</a></li></button>
        <button><li><a href="#contato">Contato</a></li></button>
        </ul>
        </div>
    </header>
    <main>
            <div class="container">
            <div class="box">
            <form method="post">
                <fieldset>
                <label>Usuário</label><br><br><br>
                <input type="text" maxlength="30" size="20" name="email" placeholder="Email" id="usuario" required>
                <label>Senha</label><br><br><br>
                <input type="password" maxlength="30"  size="16"  name="senha" placeholder="*********" id="senha" required>
                <input type="submit" value="Entrar" id="submit" name="acao"><br><br>
                <label id="cont">Não tem uma conta?</label><br><br>
                <a href="cadastra.php" id="registro">Registre-se</a>
            </div>
        </div>
        <?php
        if(isset($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $u->conectar("projeto","localhost","root","");
        if($u->logar($email,$senha)){
            header("location:bem_vindo.php");

        }else{
            echo "email ou senha incorretos";
        }

        }
    
        ?>
            </fieldset>
            </form>
           
        <div class="container">
            <div class="sobre">
            
            <h2 id="sobre">Sobre o Jogo</h2>
            <p>Olá jogador!!!</p>  
            <p>Seja bem vindo ao Pedra, Papel e Tesoura ou Jokenpô.  O jogo funciona com 3 possibilidades, sendo elas Pedra, Papel e Tesoura. A Pedra vence a Tesoura, mas perde para o papel. O Papel por sua vez vence a Pedra, mas perde para a Tesoura e a Tesoura vence o Papel, mas perde para a Pedra. Assim sendo um ciclo.</p> 
            <p>Nosso sistema funciona com tres varias sendo respectivas a cada uma delas (Tesoura = 1/Papel = 2/Pedra = 3) e após isso criamos uma aleatoria para o computador, assim tendo a chance de vencer, empatar ou perder o jogo. Acima tambem temos um Score indicando quantas vezes o usuario ganhou consecutivamente.</p>
            <p>Caso voce não saiba como funciona vamos as instruções:</p>  
            <p>1 - Primeiro coloque suas informações.</p>
            <p>2 - Escolha um modo de jogo e a dificuldade.</p> 
            <p>3 - Escolha Pedra, Papel ou Tesoura.</p> 
            <p>4 - Veja o resultado e seu Score.</p> 
            <p>5 - Decida se quer jogar novamente ou sair do jogo.</p>
            </div>
        </div>
    </main>
    
    <hr>
    <footer>

            <div class="contato">
            <h2 id="contato">Contato</h2>
            <p>Projeto realizado no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos</p>
            <p>Guilherme Alves Pereira (GU) e Davi Lima da Silva (GU3020371)</p>
            <p>Orientadora: Marcia Pereira</p>
            </div>
            
    </footer>
</body>
</html>
