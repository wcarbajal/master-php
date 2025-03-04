<?php 
$servidor = 'localhost';
$usuario= 'root';
$contraseña = '';
$basededatos ='blog_master';
$db = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

