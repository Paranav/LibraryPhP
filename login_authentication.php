<?php
    session_start();
    include "dbConnection.php";
    if(empty($_POST['username'])){
        echo "in 1";
        echo $_POST['username'];
        header('location:login.html');
    }
    else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        header('locaiton:login.html');
    }
    else{
        $password = $_POST['password'];
    }
     
    $conn = new connection("localhost", "paranav", "12345678", "laboratory");
    $conn->selectUserData($username, $password);

//     //echo "<script>console.log('userData')</script>";
//     $conn1 = $conn->createConnection();
//     $sql = "SELECT * FROM subscriber where email = '".$username."' and password = '".$password."'";
//     $result = mysqli_query($conn1, $sql);
//     $row = mysqli_fetch_row($result);
//    // echo "".mysqli_num_rows($result)."";
//     $check = mysqli_num_rows($result);
//     //echo "".mysqli_num_rows($row)."";
//     //   echo "<ul><li>Id: ".$row[0]."</li><li>Name: ".$row[1]."</li><li>Email: ".$row[2]."</li><li>Gender: ".$row[3]."</li></ul>";     
//     if($check === 1){
//         $_SESSION['userData']= $row;
//       //  header('location:home.php');
//     }
//     else{
//         echo "erro".mysqli_error($conn1)."";
//     }
//     $conn1->close();
?>