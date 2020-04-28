<?php 

    if(isset($_POST['email']) && !empty($_POST['email']) && $_POST['senha'] && !empty($_POST['senha']) && $_POST['nome'] && !empty($_POST['nome'])){
    
        require '../../conectar.php';
        require '../../login/user-admin/Usuario.class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $nome = addslashes($_POST['nome']);

        if($u->cadastrar($email, $senha, $nome) == true){
            if(isset($_SESSION['idusuario'])){
                header("Location: index.php");
                
            }else{
                header("location: cadastro-admin.php");
            }
        }else{
        header("location: cadastro-admin.php");
        }
    }

?>