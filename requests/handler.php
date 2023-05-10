<?php
session_start();
require_once('../database.php');

$db = new Database();

if(isset($_POST['book'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $success = $db->saveBooking($date, $time, $name, $email);
    
    if($success){
        $_SESSION["success"] = "Success: Saved Successfully.";
        header("location: ../success.php");
        die;
    }
    else{
        $_SESSION["error"] = "Error: Error Occurred while inserting records.";
        header("location: book.php");
        die;
    }

}

