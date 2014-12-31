<?php

$exp = time() + 86400;
$exp_unset = time() - 84600;

//setcookie("age", 19, $exp);

//echo $_COOKIE["age"] . " is " . $_COOKIE["name"] . "<br>";

setcookie("age","",$exp_unset);

if (isset($_COOKIE["age"])) {
	echo "Cookie is set";
}
else {
	echo "Cookie is not set";
}
?>