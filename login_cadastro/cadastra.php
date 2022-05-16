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
    <link href="pedra_e_papel.png" rel="icon" type="icon">
    <link href="stylecad.css" rel="stylesheet"  type="text/css">
    <title>JOKENPO</title>
</head>
<body>
    <div class = "info">
        <form method="post" action="">
        <fieldset>
        <legend>Cadastrar</legend>
        <label>Nome:</label><br>
        <input type="text" size="15" maxlength="30" placeholder="João da Silva" required name="nome"><br>
        <label>Email:</label><br>
        <input type="email" size="15" maxlength="30" placeholder="joao@gmail.com" required name="email"><br>
        <label>Prontuario:</label><br>
        <input type="text" size="8" maxlength="30" placeholder="GU3022021" required name="gu"><br>
        <label>Senha:</label><br>
        <input type="password" size="8" maxlength="30" placeholder="senha" required name="senha"><br>
        <label>Confirmar Senha:</label><br>
        <input type="password" size="8" maxlength="30" placeholder="senha" required name="senha1"><br>
        <input type="submit" value="Cadastrar" id="bt">
        <input type="reset" value="Limpar" id="bt"><br>
        <a href="index.php" id="vt">Voltar</a>
    </div>
</fieldset>

</form>

<?php

if(isset($_POST['nome'])){
    global $u;
    $nome = $_POST['nome'];
    $email = $_POST['email'];   
    $gu = $_POST['gu'];
    $senha  = $_POST['senha'];
    $csenha = $_POST['senha1'];

    setcookie('nome',$nome, time()+262974383);
    setcookie('gu',$gu, time()+262974383);
    setcookie('jogo','JOKENPO', time()+262974383);


    $u->conectar("projeto","localhost","root","");
   

        
        if($u->cadastrar($nome,$email,$gu,$senha)){
            echo "Cadastrado com sucesso!";
        }else{
            echo "Este email ja esta cadastrado!";
        }
    
    
}

?>
    
</body>
</html>
