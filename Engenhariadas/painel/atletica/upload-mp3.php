<?php

    /*echo "Upload sucessully!";

    if (isset($_POST["save"]) && $_POST["save"]=="Enviar Arquivo") {
        
        
        
        echo "Upload sucessully!";

        $dir = 'uploads/';
        $audio_path = $dir.basename($_FILES['audioFile']['name']);


        if(move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)){
            
            echo "Upload sucessully!";
            header("Location: enviar-mp3.php");
        }else{
            header("Location: enviar-mp3.php");
        }
    }else{
        header("Location: index.php");
    }
    */
    
     if (isset($_POST['save'])){

        $arquivo = $_FILES['audioFile'];

        $arquivoNome = $_FILES['audioFile']['name'];
        $arquivoTmpNome = $_FILES['audioFile']['tmp_name'];
        $arquivoSize = $_FILES['audioFile']['size'];
        $arquivoError = $_FILES['audioFile']['error'];
        $arquivoType = $_FILES['audioFile']['type'];

        $arquivoExt = explode('.', $arquivoNome);
        $arquivoAtualExt = strtolower(end($arquivoExt));

        $permitido = array('mp3','mp4');

        if(in_array($arquivoAtualExt, $permitido)) {
            if($arquivoError == 0){
                if($arquivoSize < 100000){
                    $arquivoNomeNovo = uniqid('', true).".".$arquivoAtualExt;
                    $arquivoDestino = 'uploads/'.$arquivoNomeNovo;
                    move_uploaded_file($arquivoTmpNome, $arquivoDestino);
                    header("Location: index.php");
                }else{
                    header("Location: enviar-mp3.php");
                    echo "Seu arquivo é muito grande";
                }
            }else{ 
                echo "Há algum erro com o seu enviado do mp3";
            }
        }else{
            echo "Você deve escolher arquivos de outro tipo!";
        }
    }else{
        header("Location: index.php");
    }

?>