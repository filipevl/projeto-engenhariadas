<?php

    $arquivo = $_FILES['arquivo']['name'];

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo);


?>