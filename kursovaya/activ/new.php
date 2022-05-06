<?php
  $database_host = 'localhost';
  $database_login = 'root';
  $database_password = '';
  $database_name = 'dawdaw';
  $charset = 'utf8';

require_once '../dbconnect.php';

$id_zayavka_r = $_POST['ID_Заявителя'];
$data_zayavki = $_POST['Дата_Заявки'];
$poisk_specialista = $_POST['specialnost'];

mysqli_query($connect,"UPDATE `zayavka_rabotodatel` SET `data` = '$data_zayavki', `Специальность` = '$poisk_specialista' WHERE `zayavka_rabotodatel`.`id_zayavka_r` = '$id_zayavka_r'");

header('Location:/kursovaya/control.php');
?>