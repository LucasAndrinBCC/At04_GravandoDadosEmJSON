<?php

$caminhoArquivo = '../../data/contatos.json';
$valid = true;
foreach ($_POST as $key => $param) {
    if (trim($_POST[$key]) == null) {
        $valid = false;
    }
}


if ($valid) {
    $arquivoContent = json_decode(file_get_contents($caminhoArquivo));

    $arquivo = fopen($caminhoArquivo, 'w+');

    
    if ($arquivoContent === null) {
        $arquivoContent = [];
    }
    
    $arquivoContent[] = $_POST;

    fwrite($arquivo, json_encode($arquivoContent));
    fclose($arquivo);
}

header('location: ../../resources/views/salvar-contato.php');

?>