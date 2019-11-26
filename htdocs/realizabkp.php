<?php 

include "callapi.php";
include "globals.php";
include "nlistmanager.php";
include "urls.php";

$json = $_POST['json_post'];

// chama a api de log
$log = "Antes de criar backup";
gravar_log($log);


// chama a api de monitoramento
$monitore_post     = array("name" => "backup", "description" => "start");
$call_monitore     = callAPI('POST', $romulo.'/monitore/start', json_encode($monitore_post));
$response_monitore = json_decode($call_monitore, true);
$id_monitore       = $response_monitore['id'];

//chama api de backup
$json_post = array("arquivo" => $json);
$make_call = callAPI('POST', $tais.'/backup', json_encode($json_post));
$response  = json_decode($make_call, true);


$call_monitore_fin     = callAPI('POST', $romulo.'/monitore'.'/'. $id_monitore .'/finish', json_encode($monitore_post));
$response_monitore_fin = json_decode($call_monitore_fin, true);
$total                 = $response_monitore_fin['total'];
$total                 = $total / 1000; //converte para segundos

$id_med_tempo = get_id_med_tempo(); //verifica se arquivo existe

gravar_com_valor($id_med_tempo, $total); //Se receber id inválido realiza post se não put

echo 'O arquivo eh: ' . implode(',',$response) . "<br><br>";
echo 'Tempo total: ' . $total;

//log
$log = "Depois de realizar backup";
gravar_log($log);

?>