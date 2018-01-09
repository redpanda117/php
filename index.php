<?php
//get person name from URL parameter from the address bar
//the name will be in the varible
//use to get name if it is after url main
//ex localhost:8888/?name=Tina  the varible name will now print Tina in the string.
$name = htmlspecialchars($_GET['name']);

$greeting = "Hello $name";

require 'index.view.php'

?>



