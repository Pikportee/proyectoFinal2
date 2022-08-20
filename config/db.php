<?php
$conn = new mysqli("localhost", "root", "", "proyectienda");
if($conn->connect_errno){
    echo 'No hay conexion: (' . $conn->connect_errno . ')' . $conn->connect_error;
}
date_default_timezone_set ('America/Argentina/Buenos_Aires');
