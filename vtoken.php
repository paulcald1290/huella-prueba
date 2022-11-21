<?php
session_start();

$resp = false;
if(crypt(session_id(), $_GET['SToken']) == $_GET['SToken']) {
  $resp = true;
}

echo  $resp;
?>
