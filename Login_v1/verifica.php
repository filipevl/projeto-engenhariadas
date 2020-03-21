<?php 
    require 'conectar.php';

    if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])){
        require_once 'Usuario.class.php';
        
        $u = new Usuario();

        $listLogged = $u->Logged($_SESSION['idusuario']);

        $nomeUser = $listLogged['nome'];
        
    }else{
        header("location: login.php");
    }

?>