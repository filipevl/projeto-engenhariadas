<?php
    
    if(isset($_POST['email']) && !empty($_POST['email']) && $_POST['senha'] && !empty($_POST['senha'])){
    
        require 'conectar.php';
        require 'Usuario.class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        
        if($u->login($email, $senha) == true){
            if(isset($_SESSION['idusuario'])){
                header("Location: painel/index.php");
                
            }else{
                header("location: login.php");
            }
        }else{
        header("location: login.php");
        }
    }
    
?>