<?php session_start()?>
<?php
if(!isset($_SESSION['login'])){
    if(isset($_POST['acao'])){
        echo 'formulario enviado';
        $login = 'guilherme';
        $senha = 'gui1234';
        $loginF = $_POST['login'];
        $senhaF = $_POST['senha'];
        
        if($login == $loginF && $senha == $senhaF){
            $_SESSION['login'] = true;
            header('location: bem_vindo.php');
        }else{
            echo "Dados inválidos";
          
        }
    }
    include('bem_vindo.php');
}else{
    if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        session_destroy();
        header('Location: index.html');
    }
}
?>
