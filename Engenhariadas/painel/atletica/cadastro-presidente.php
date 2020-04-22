<?php 

    if(isset($_POST['email']) && !empty($_POST['email']) && ($_POST['senha']) && !empty($_POST['senha']) && ($_POST['nome']) && !empty($_POST['nome']) && 
    ($_POST['telefone']) && !empty($_POST['telefone']) && ($_POST['cnpj']) && !empty($_POST['cnpj'])
    && ($_POST['instituicao']) && !empty($_POST['instituicao']) && ($_POST['cidade']) && !empty($_POST['cidade'])
    && ($_POST['atletica']) && !empty($_POST['atletica'])){
    
        require '../../conectar.php';
        require '../../login/user-atletica/Usuario.class.php';

        $u = new Usuario();

        $instituicao = addslashes($_POST['instituicao']);
        $nome = addslashes($_POST['nome']);
        $atletica = addslashes($_POST['atletica']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $cnpj = addslashes($_POST['cnpj']);
        $cidade = addslashes($_POST['cidade']);
        $telefone = addslashes($_POST['telefone']);
        

        if($u->cadastrar($nome, $atletica, $email, $senha, $telefone, $instituicao, $cnpj, $cidade) == true){
            if(isset($_SESSION['cadastro'])){
                header("Location: ../../index.php");
                echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
                echo "javascript:window.location='../../index.php';</script>";
                //javascript:alert('Solicitação de cadastro enviada com sucesso!');
                //javascript:window.location.assign("../../index.php");
            }else{
                header("location: solicitar-cadastro.php");
                //javascript:alert('Solicitação de cadastro com erro!');
                //javascript:window.location.assign(" solicitar-cadastro.php");
            }
        }else{
            header("location: solicitar-cadastro.php");
            //javascript:alert('Solicitação de cadastro com erro!');
            //javascript:window.location.assign("solicitar-cadastro.php");
        }
    }

?>