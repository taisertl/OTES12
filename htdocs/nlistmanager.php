<?php 
/*
!!! REQUER ESTAS INCLUDES !!!
include "callapi.php";
include "globals.php";
*/

function gravar_com_valor($id, $val){
    include "urls.php";
    if($id == '?'){
        $numeros = array();
        
        array_push($numeros, $val);    
    
        $post_number     = array("numberList" => $numeros);
        $call_number     = callAPI('POST', $anthony.'/numberlist', json_encode($post_number));
        $response_number = json_decode($call_number, true);
        $id_number       = $response_number['id'];
    
        set_id_med_tempo($id_number);
        
    } else {
        $lista = callAPI('GET', $anthony. '/numberlist'.'/'.$id, false);
        $lista = json_decode($lista, true);
    
        $numeros = array();
    
        foreach ($lista['numberList'] as &$value) {
            array_push($numeros, $value);
        }
    
        array_push($numeros, $val);
        
        $post_number     = array("numberList" => $val);
        $call_number     = callAPI('PUT', $anthony. '/numberlist'.'/'.$id, json_encode($post_number));
        $response_number = json_decode($call_number, true);    
    }
}

function gravar_com_nova_lista($id, $val){
    include "urls.php";

    if($id == '?'){
        $post_number     = array("numberList" => $val);
        $call_number     = callAPI('POST', $anthony. '/numberlist', json_encode($post_number));
        $response_number = json_decode($call_number, true);
        $id_number       = $response_number['id'];
    
        set_id_med_tamanho($id_number);
        
    } else {
        $post_number     = array("numberList" => $val);
        $call_number     = callAPI('PUT', $anthony. '/numberlist'.'/'.$id, json_encode($post_number));
        $response_number = json_decode($call_number, true);    
    }
}

function gravar_email($val){
    include "urls.php";
    $post_email     = array("email" => $val);
    $call_email     = callAPI('POST', $pedro.'/people', json_encode($post_email));
    $id_email = substr($call_email,11);

    set_id_email($id_email);
}

function gravar_log($log){
    include "urls.php";
    
    $log_post = array("description" => $log);
    $call     = callAPI('POST', $vinicius. '/logging/2', json_encode($log_post));
    $response = json_decode($call, true);

    $id = $log_id = get_id_log();
    if ($id == "?")
        set_id_email($response['id']);
}


?>