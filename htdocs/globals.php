<?php 

// cria ou  retorna arquivos

function get_id_med_tamanho(){
    $id_med_tamanho = 'id_med_tamanho.txt';
    if (file_exists($id_med_tamanho)){
        $handle = fopen($id_med_tamanho, "r");
        $contents = fread($handle, filesize($id_med_tamanho));
        fclose($handle);
    
        return $contents;
    } else return '?';
}

function set_id_med_tamanho($id){
    $fp = fopen('id_med_tamanho.txt', 'w');
    fwrite($fp, $id);
    fclose($fp);
}


function get_id_med_tempo(){
    $id_med_tempo = 'id_med_tempo.txt';
    if (file_exists($id_med_tempo)){
        $handle = fopen($id_med_tempo, "r");
        $contents = fread($handle, filesize($id_med_tempo));
        fclose($handle);
    
        return $contents;
    } else return '?';
}

function set_id_med_tempo($id){
    $fp = fopen('id_med_tempo.txt', 'w');
    fwrite($fp, $id);
    fclose($fp);
}


function get_id_email(){
    $id_email = 'id_email.txt';
    if (file_exists($id_email)){
        $handle = fopen($id_email, "r");
        $contents = fread($handle, filesize($id_email));
        fclose($handle);
    
        return $contents;
    } else return '?';
}

function set_id_email($id){
    file_put_contents('id_email.txt', $id, FILE_APPEND);
}

function get_id_log(){
    $id_log = 'id_log.txt';
    if (file_exists($id_log)){
        $handle = fopen($id_log, "r");
        $contents = fread($handle, filesize($id_log));
        fclose($handle);
    
        return $contents;
    } else return '?';
}

function set_id_log($id){
    $fp = fopen('id_log.txt', 'w');
    fwrite($fp, $id);
    fclose($fp);
}
?>