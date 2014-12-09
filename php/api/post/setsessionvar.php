<?php
session_start();

$sesh_var = $_POST['var'];
$sesh_val = $_POST['val'];

$_SESSION[$sesh_var] = $sesh_val;
?>