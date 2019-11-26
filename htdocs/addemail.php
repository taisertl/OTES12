<?php 

include "callapi.php";
include "globals.php";
include "nlistmanager.php";

$email = $_POST['email'];

gravar_email($email);

header( 'Location: http://localhost' ) ;

?>