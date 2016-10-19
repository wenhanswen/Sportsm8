<?php

include('C:\wamp64\www\Sportsm8\Test\config.php');
session_start();
$con = mysqli_connect('localhost', 'root', 'QWERT1234', 'Sportsm8');

if(isset($_POST['ID'])){
    $ID = $_POST['ID'];
    $myusername = $_SESSION['myusername'];
    $sql = "UPDATE woche SET $myusername=1 WHERE ID=$ID";
    $result = mysqli_query($db, $sql);
    echo($ID);
}
else{
}
mysqli_close($con);

?>