

<form action="groet.php"><input type="submit" value="Klik hier voor een groet!"/>

<?php
echo "Bedankt!";
setcookie("name",$_GET["name"],time() +(86400*30),"/");
?>