<?php 

include "callapi.php";

$id = $_POST['id'];

$make_call = callAPI('POST', $tais.'/backup/desfazer/delete/'.$id, false);
$response  = json_decode($make_call, true);

echo 'O arquivo eh: ' . implode(',',$response) . "<br><br>";
?>