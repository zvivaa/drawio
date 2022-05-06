<?php
  $database_host = 'localhost';
  $database_login = 'root';
  $database_password = '';
  $database_name = 'dawdaw';
  $charset = 'utf8';

require_once '../dbconnect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `zayavka_soiskatel` WHERE `zayavka_soiskatel`.`id_zayavki` = '$id'");
header('Location: control.php');