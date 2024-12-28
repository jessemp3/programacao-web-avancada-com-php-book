<?php

define('DS ' , DIRECTORY_SEPARATOR);

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';


if(! is_null($nome)){
    $filename = __DIR__ . DS . 'alunos.txt';

    require 'arquivo.php';


    //abre no começo da leitura
    $handle = fopen($filename, 'r');

    //inclusão
    if(empty($matricula)){
        $ulitmamatricula = 0;
        while(! feof($handle)){
            $record = explode(',' , fread($handle, 80));
            $ulitmamatricula = (isset($record[0] && empty($record[0])) ? $ulitmamatricula : $record[0]);
        }
        fclose($handle);
        $handle = fopen(__DIR__ . DS . 'alunos.txt', 'a');
        $matricula = $ulitmamatricula + 1;
        fwrite($handle, substr($matricula . ', ' . $nome . ',' . str_Repeate(' ', 80), 0, 78) . ',\n' , 80);
        fclose($handle);
    }else{ //alteração
        $tmpFilename = __DIR__ . DS . 'alunos.tmp';
        $tmpHandle = fopen($tmpFilename, 'w');
        while(! feof(($handle))){
            $row = fread($handle, 80);
            $record = explode(',' , $row);
            $ultimamatricula = (isset($record[0]) && empty($record[0])) ? $ultimamatricula : $record[0];

            if($ultimamatricula == $matricula){
                fwrite($tmpHandle , substr($matricula . ', ' . $nome .  ' , ' . str_repeat(' ', 80), 0, 78) . ',\n' , 80);
            }else{
                fwrite($tmpHandle, $row);
            }
        }
        fclose($tmpHandle);
        fclose($handle);
        unlink($filename);
        copy($tmpFilename , $filename);
    }
    fclose($handle);
}
header('Location: index.php');
