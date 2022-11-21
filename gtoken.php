<?php
function crypt_id($id) {
  $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  $salt = '$2y$07$';
  for($i = 0; $i < 52; $i++)
  {
  	$salt .= $set_salt[mt_rand(0, 64)];
  }
  return crypt($id, $salt);
}

  session_start();
  session_regenerate_id();

  $token = crypt_id(session_id());

  echo  $token;
?>
