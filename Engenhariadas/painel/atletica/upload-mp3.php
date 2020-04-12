<?php

    if (isset($_POST['submit'])){

        $arquivo = $_FILES['arquivo'];

        $arquivoNome = $_FILES['arquivo']['name'];
        $arquivoTmpNome = $_FILES['arquivo']['tmp_name'];
        $arquivoSize = $_FILES['arquivo']['size'];
        $arquivoError = $_FILES['arquivo']['error'];
        $arquivoType = $_FILES['arquivo']['type'];

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
                    echo "Seu arquivo é muito grande";
                }
            }else{ 
                echo "Há algum erro com o seu enviado do mp3";
            }
        }else{
            echo "Você deve escolher arquivos de outro tipo!";
        }
    }
        

?>