<?php

$mysqli = new mysqli("localhost","root","","tienda", "3307");

if ($mysqli -> connect_errno) {
    echo "Ha ocurrido un error: ". $mysqli->connect_error;
    exit();
}