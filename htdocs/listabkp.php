<?php 

include "callapi.php";
include "urls.php";

$lista = callAPI('GET', $tais.'/backups', false);

echo '<h1>Lista: </h1><p>' . $lista . '</p>';

?>