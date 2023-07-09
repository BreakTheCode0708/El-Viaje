<?php
$HOSTNAME= 'localhost:3307';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='travel';

$con= mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

if($con)
{
    echo "connection successful";
}else{
    die(mysqli_error($con));
}

?>