<?php
$p = $_GET['p'];
if(isset($p))
{
if(is_file("./src/views/".$p.".php"))
{
 include "./src/views/".$p.".php";
}
}
?>