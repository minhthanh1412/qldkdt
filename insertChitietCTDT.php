<?php

    include("connectDB.php");

    /* Get data from Client side using $_POST array */
    $maCT  = $_POST["maCT"];
    $maMH  = $_POST["maMH"];
    $Hocki  = $_POST["Hocki"];
    $batbuoc = $_POST["batbuoc"];
    //SQL query to get results from database
    $sql    = "INSERT INTO tblchitietctdt (maCT, maMH, soTTHK, batbuoc) VALUES (?, ?, ?, ?) ";
    $stmt   = $conn->prepare($sql);
    $stmt->bind_param('iiii', $maCT, $maMH, $Hocki, $batbuoc);
    if($stmt->execute()){
         $result = 1;
    }

    echo $result;
    $conn->close();

?>

