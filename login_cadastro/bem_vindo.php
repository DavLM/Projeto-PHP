<?php
require_once 'sql.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../imagens/pedra_e_papel.png" rel="icon" type="icon">
    <link href="../estilo/style.css" rel="stylesheet"  type="text/css">
    <title>JOKENPO</title>
</head>
<body>
<header>
        <div class="cab">
        <ul>
        <li><a href="../index.php">sair</a></li>
        </ul>
        </div>
    </header>
    <main>
        <div class="container">
        <form method="post" >
            <fieldset>
            <label>Selecione o nivel de jogo</label><br><br>
            <input type="radio" name="op" value="facil" cheked>Facil<br>
            <input type="radio" name="op" value="medio">Médio<br>
            <input type="radio" name="op" value="dificil">Dificil<br>
            <input type="submit" value="escolher" name="acao">
        </fieldset>
        </form>
    <?php 
    session_start();
    if(!isset($_SESSION['id_use'])){
        header("location:index.php");
        exit;
    }

    
    if(isset($_POST['op'])){
        $op= $_POST['op'];
        
        switch($op){
            case 'facil':
                header("location:facil.php");
            break;

            case 'medio':
                header("location:medio.php");
            break;

            case 'dificil':
                header("location:dificil.php");
            break;
        }
    }
    
?>
           
        </div>
    </main>
    
</body>
</html>
