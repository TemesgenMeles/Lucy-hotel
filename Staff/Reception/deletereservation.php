<?php

include ('connection.php');
if(isset($_POST['drop'])){
    $reserv_id = $_POST['reserv_id'];

    $sql = "DELETE from room_reservation where ID = '$reserv_id'";
    $result = mysqli_query($db,$sql);
    header("Location:  ../../Staff/Reception/reservaationRoom.php");
}

?>