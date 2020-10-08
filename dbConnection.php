<?php

//session_start();
class connection{
 private  $servername ;
 private  $username ;
 private  $password ;
 private  $database;
 private  $conn ;

 function __construct($servername, $username, $password, $database) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
 }


 function createConnection(){
    $this->conn =new mysqli($this->servername, $this->username, $this->password, $this->database);
   // mysqli_select_db($this->conn, $this->database);
    if (!$this->conn) {
    die("Connection failed: " .mysqli_connect_error());
    }
//    echo "Connected successfully";
    return $this->conn;
}

function insertRegistrationData($name,$email,$password,$phone,$gender,$start_date,$end_date){
    $this->createConnection();
    mysqli_select_db($this->conn, $this->database);
    // $sql = "use laboratory";
    // $this->conn->query($sql);
    $sql = "INSERT INTO subscriber (name, email, password,phone,gender,start_date,end_date) VALUES ('".$name."','" .$email."','".$password."',".$phone.",'".$gender."','".$start_date."','".$end_date."')";
    if(mysqli_query($this->conn, $sql) === true){
        echo "new record created successfully";
        header('location:index.php');
    }
    else {
        echo "error".mysqli_error($this->conn);
        header('location:index.php');
    }

    $this->conn->close();
}

function selectUserData($email, $password){
    echo "<script>console.log('userData')</script>";
    $this->createConnection();
   // mysqli_select_db($this->conn, $this->database);
    $sql = "SELECT * FROM subscriber where email = '".$email."' and password = '".$password."'";
    $result = mysqli_query($this->conn, $sql);
    $row = mysqli_fetch_row($result);
   // echo "".mysqli_num_rows($result)."";
    $check = mysqli_num_rows($result);
    //echo "".mysqli_num_rows($row)."";
    //   echo "<ul><li>Id: ".$row[0]."</li><li>Name: ".$row[1]."</li><li>Email: ".$row[2]."</li><li>Gender: ".$row[3]."</li></ul>";     
    if($check === 1){
        $_SESSION['username']= $row;
        header('location: home.php');
    }
    else{
        echo "erro".mysqli_error($this->conn)."";
    }
    $this->conn->close();
}
}
?>
