
<?php
if(!isset($_COOKIE["name"])) {
     echo "Hallo!";
} else {
     echo "Hallo, " . $_COOKIE["name"];
}
?>