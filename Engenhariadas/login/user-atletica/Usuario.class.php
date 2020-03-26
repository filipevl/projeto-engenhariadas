<?php
    
    class Usuario{
        public function login($email, $senha){
            global $conn;

            $sql = "SELECT * FROM usuario_atletica WHERE email = :email AND senha = :senha";
            $sql = $conn->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                
                $_SESSION['idusuario'] = $dado['id'];

                return true;
            }else{
                return false;
            }
        }
        public function logged($id){
            global $conn;
 
            $array = array();

            $sql = "SELECT nome FROM usuario_atletica WHERE id = :idusuario";
            $sql = $conn->prepare($sql);
            $sql->bindValue("idusuario", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
                 
            }

            return $array;
        }
        public function cadastrar($nome, $email, $senha, $telefone, $instituicao, $cnpj, $cidade){
            global $conn;
            global $result;

            $sql = "SELECT * FROM usuario_atletica WHERE email = :email";
            $sql = $conn->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                $result = true;
                header('Location: solicitar-cadastro.php');
            }else{
                $result = false;
            }

            if($result == false){
                $sql = "INSERT INTO usuario_atletica (nome, email, senha, telefone, instituicao, cnpj, cidade) VALUES ('$nome', '$email', MD5('$senha'), '$telefone', '$instituicao', '$cnpj', '$cidade')";
                $sql = $conn->prepare($sql);
                $sql->bindValue("nome", $nome);
                $sql->bindValue("email", $email);
                $sql->bindValue("senha", md5($senha));
                $sql->bindValue("telefone", $telefone);
                $sql->bindValue("instituicao", $instituicao);
                $sql->bindValue("cnpj", $cnpj);
                $sql->bindValue("cidade", $cidade);
                $sql->execute();

                $_SESSION['cadastro'] = true;
                return true;

            }else{
                return false;
            }
        }

    }
?>