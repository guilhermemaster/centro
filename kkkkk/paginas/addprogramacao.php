﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="../style_paginas/addprogramacao.css" type="text/css" />
</head>
<body>
<a href="menu.php" >Menu Volta</a>
<form action="addprogramacao_validar.php" method="get">
<p>Data:<input type="date" name="data" /></p>
<p>Horário:<input type="time" name="horario" /></p>
<p>Descrição:<textarea name="descricao" rows="10" cols="30" /></textarea></p>
<input type="submit" value="Enviar" /><input type="reset" value="Limpa" />
</form>
</body>
</html>