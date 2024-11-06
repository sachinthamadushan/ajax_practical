<?php
include_once 'connection.php';
if (isset($_POST['nic']) &&
    isset($_POST['name']) && isset($_POST['psw'])) {
    $customerNIC =  $_POST['nic'];
    $customerName = $_POST['name'];
    $customerPassword = $_POST['psw'];

    $sql = "INSERT INTO customer (nic, `name`, `password`,`status`) 
    VALUES ('$customerNIC', '$customerName', '$customerPassword',1)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    echo 'No parameters found';
}
?>