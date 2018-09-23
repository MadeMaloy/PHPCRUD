<?php
  $servername = "localhost";
  $conexInfo= array("Database"=>'cw', "UID" => 'madi', "PWD" => '1234', "CharacterSet"=>'UTF-8');
  $conn = sqlsrv_connect($servername, $conexInfo);+
  if ($conn) {
    echo "conexion pulenta";
  }else {
    echo "dont works";
  }



?>
