<?php 
    session_start();

    if((isset($_POST['temail'])) && (isset($_POST['tsenha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['temail']);
        $senha = mysqli_real_escape_string($conn, $_POST['tsenha']);
        $senha = md5($senha);
    }else(
         $_SESSION("loginError") == "Usuário ou senha inválido";
         header("Location: login.php")
    )
            
?>