<?php 

include "callapi.php";

$id = $_POST['id'];

//$json_post = array("arquivo" => $json);
$make_call = callAPI('PUT', $tais.'/backup/desfazer/put/'.$id, false);

$lista = callAPI('GET', $tais. '/backup'.'/'.$id, false);
$lista = json_decode($lista, true);
$lista = implode(',', $lista);

echo '<h1>Arquivo: </h1>';
echo $lista;

?>