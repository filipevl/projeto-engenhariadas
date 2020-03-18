<?php
    
    class Usuario{
        public function login($email, $senha){
            global $conn;

            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
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
    }
?>