<?php
  $name = "BillGates";
  $hashed = password_hash($name, PASSWORD_DEFAULT);
  echo $hashed, strlen($hashed);
?>
