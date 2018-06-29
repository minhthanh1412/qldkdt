<?php

    include("connectDB.php");
    /* Get data from Client side using $_POST array */
    $maCT  = $_POST['maCT'];
    $maMH  = $_POST['maMH'];
    $Hocki  = $_POST['Hocki'];
    //SQL query to get results from database
    $sql    = "insert into a (first_name, last_name, email, bb) values (?, ?, ?)  ";
    $stmt   = $conn->prepare($sql);
    $stmt->bind_param('sss', $maCT, $maMH, $Hocki);
    if($stmt->execute()){
         $result = 1;
    }

    echo $result;
    $conn->close();

?>
