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
?>
		<?php

$terceiro =  $_GET['descricao'];



$db = mysql_select_db("Centroespi") or die ("Erro na seleção da tabela");

$sql = "INSERT INTO Novidades (Descricao) 
VALUES ('$terceiro')";
$sql = mysql_query($sql) or die ("Houve erro na gravação");





?>
</body>
</html>