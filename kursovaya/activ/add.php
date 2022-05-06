<?php
  $database_host = 'localhost';
  $database_login = 'root';
  $database_password = '';
  $database_name = 'dawdaw';
  $charset = 'utf8';

require_once '../dbconnect.php';

$Фамилия = $_POST['Фамилия'];
$Имя = $_POST['Имя'];
$Отчество = $_POST['Отчество'];
$Опыт = $_POST['Опыт'];
$Пол = $_POST['Пол'];
$Возраст = $_POST['Возраст'];
$Телефон = $_POST['Телефон'];
$Специальность = $_POST['Специальность'];

//var_dump($_POST);
//exit();

mysqli_query($connect,"INSERT INTO `soiskatel` (`ID_Соискателя`, `Фамилия`, `Имя`, `Отчество`, `Опыт`, `Пол`, `Возраст`, `Телефон`,`Специальность`) VALUES (NULL, '$Фамилия', '$Имя', '$Отчество', '$Опыт', '$Пол' ,'$Возраст', '$Телефон', '$Специальность' )");
//var_dump($s);

header('Location:../control.php');
?>