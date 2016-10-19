<?php
include('C:\wamp64\www\Sportsm8\Test\config.php');

$con = mysqli_connect('localhost', 'root', 'QWERT1234', 'Sportsm8');

if(isset($_POST['ID'])){
    $ID = $_POST['ID'];
    $sql = "Select * from woche WHERE ID=$ID;";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $availability = array_slice($row, 1);
    
    $occupancy = 0;
    foreach($availability as $person){
        $occupancy = $occupancy+$person;
    }
    echo($occupancy);
}
else{
    echo (' no ID found');
}
mysqli_close($con);
?>