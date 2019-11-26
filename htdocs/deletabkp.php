<?php 

include 'callapi.php';

$id = $_POST['id'];

$lista = curl_del($tais.'/backup'.'/'. $id);
//$lista = json_decode($lista, true);

echo '<h1>Retorno: </h1>';
echo $lista;

?>