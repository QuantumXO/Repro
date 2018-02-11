<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div class="wrapper">
<?php include_once "moduls/header.html"; ?>	
		<div class="conteiner row">
<?php include_once "moduls/main.html"; ?>		
<?php include_once "moduls/aside.html"; ?>			
		</div>
	</div>
<?php include_once "moduls/footer.html"; ?>	
<script src="js/jquery-1.11.3.min.js"></script>	
<script>
$(document).ready(function() {
	$("#tabber-post div").hide(); // Скрываем содержание
	$("#tabs li:first").attr("id","current"); // Активируем первую закладку
	$("#tabber-post div:first").fadeIn(); // Выводим содержание
    $('#tabs a').click(function(e) {
        e.preventDefault();        
        $("#tabber-post div").hide(); //Скрыть все сожержание
        $("#tabs li").attr("id",""); //Сброс ID
        $(this).parent().attr("id","current"); // Активируем закладку
        $('#' + $(this).attr('title')).fadeIn(); // Выводим содержание текущей закладки
    });
})();
</script>	
</body>
</html>