<?php 

include "callapi.php";

$id = $_POST['id'];
$json = $_POST['json_post'];

$json_post = array("arquivo" => $json);
$make_call = callAPI('PUT', $tais.'/backup'.'/'.$id, json_encode($json_post));
$response  = json_decode($make_call, true);

$lista = callAPI('GET', $tais. '/backup'.'/'.$id, false);
$lista = json_decode($lista, true);
$lista = implode(',', $lista);

echo '<h1>Arquivo: </h1>';
echo $lista;

?>

