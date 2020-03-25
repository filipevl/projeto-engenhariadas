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

    }
?>