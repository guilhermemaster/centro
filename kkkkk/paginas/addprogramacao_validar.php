<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<p align="center"><img src="../img/carregando_azul.gif" alt="" ></p>
<meta http-equiv="refresh" content="3;url=../home.php">
<?php
include_once "../conexao_pagina/conexao_pagina.php";
$primeiro = $_GET['data'];
$segundo = $_GET['horario'];
$terceiro =  $_GET['descricao'];





$sql = "INSERT INTO Programacao (horario, data, Descricao) 
VALUES ('$segundo', '$primeiro', '$terceiro')";
$sql = mysql_query($sql) or die ("Houve erro na gravação");





?>

</body>
</html>


