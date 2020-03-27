<?php
    
    class Usuario{
        public function login($email, $senha){
            global $conn;

            $sql = "SELECT * FROM usuario_admin WHERE email = :email AND senha = :senha";
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

            $sql = "SELECT nome FROM usuario_admin WHERE id = :idusuario";
            $sql = $conn->prepare($sql);
            $sql->bindValue("idusuario", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
                 
            }

            return $array;
        }
        public function cadastrar($email, $senha, $nome){
            global $conn;
            global $result;

            $sql = "SELECT * FROM usuario_admin WHERE email = :email";
            $sql = $conn->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                $result = true;
                header('Location: cadastro-admin.php');
            }else{
                $result = false;
            }

            if($result == false){

                $sql = "INSERT INTO usuario_admin (email, senha, nome, adm) VALUES ('$email', MD5('$senha'), '$nome', '1')";
                $sql = $conn->prepare($sql);
                $sql->bindValue("email", $email);
                $sql->bindValue("senha", md5($senha));
                $sql->bindValue("nome", $nome);
                $sql->execute();

                return true;

            }else{
                return false;
            }
        }
    }
?>