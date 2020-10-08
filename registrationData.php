<?php
   session_start();
   include "dbConnection.php";
   
   $conn = new connection("localhost", "paranav", "12345678", "laboratory");
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $phone = $_POST['phone'];
   $gender = $_POST['gender'];
   $duration = $_POST['duration'];
   $sub_start_date = new DateTime();
   $sub_end_date = new DateTime();
   $sub_end_date->add(new DateInterval('P'.$duration.'M'));
   $sub_end_date = $sub_end_date->format('Y-m-d');
   $sub_start_date=$sub_start_date->format('Y-m-d');
   $conn->insertRegistrationData($name,$email,$password,$phone,$gender,$sub_start_date,$sub_end_date);
?>