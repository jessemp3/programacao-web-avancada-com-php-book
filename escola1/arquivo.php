<?php
//cria o arquivo se não exisitir
if(! file_exists($filename)){
    if(! is_writeable(__DIR__)){
        echo "Não é possível criar o arquivo alunos.txt";
//        goto EOF;
        exit;
    }
    $handle = fopen($filename, 'a');
    fclose($handle);
    chmod($filename, 0777);
}
exit;

