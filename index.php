
<form method="get">
	Nickname: <input type="text" name="naam">
    	<input type="submit" value="Ik heb gekozen!">
</form>

<?php
setcookie("gebruikersnaam", $_GET[nickname], time() + (86400 * 30)); // 86400 = 1 day
?>
<html>
<body>

</body>
</html> 