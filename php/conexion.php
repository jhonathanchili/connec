<?
function conectiar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "reserva.php";
    $con = mysql_connect($server,$user,$pass) or die("error al conestar a la base de datos ".mysql_error());
    mysql_select_db($db,$con);
    return $con;
} 
?>