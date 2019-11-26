<?php 

include 'callapi.php';
include 'urls.php';

$id = $_POST['id'];

//log
$log = "Antes de restaurar backup";
gravar_log($log);

$backup = callAPI('GET', $tais. '/backup'.'/'.$id, false);
$backup = json_decode($backup, true);
$backup = implode(',', $backup);

echo '<h1>Arquivo: </h1>';
echo $backup;

//log
$log = "Depois de restaurar backup";
gravar_log($log);

?>