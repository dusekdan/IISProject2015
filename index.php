<?php
/// Auto-loading function that ensures that I will never have to manually add classes from AppData
function __autoload($className)
{
    include_once("AppData/" . $className . ".class.php");
}



$db = new MySQLDriver();



$data = $db->query("select * from testtable");

if($data != -1)
{
    while($r = mysql_fetch_assoc($data))
    {
        echo $r["name"] . "<br>";
    }
}


?>