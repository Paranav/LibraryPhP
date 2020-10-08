<?php
   session_start();
   include "dbConnection.php";
   $conn = new connection("localhost", "paranav", "12345678", "laboratory");
          $conn1=$conn->createConnection();
          mysqli_select_db($conn1, "laboratory");
   if(!isset($_SESSION['username'])){
       header('location:login.html');
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homeStyle.css">
    <script>
        var bookCount = 0
      function showNextData(catagory){
        console.log(catagory);
            bookCount = bookCount +3;
            window.sessionStorage.setItem("bookCount", bookCount);
            window.sessionStorage.setItem("catagory", catagory);
        var xhttp;
        xhttp= new XMLHttpRequest();
        xhttp.onreadystatechange = function (){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById("fiction").innerHTML = this.responseText;
          } 
        }
        var url = "getBooks.php?bookCount="+bookCount+ "&catagory=" + catagory;
        xhttp.open("GET", url, true);
        xhttp.send();
      }


    </script>
    <title>Document</title>
</head>
<body>
    <div id="navi">
    <?php
      include 'cnav.php';
      ?>
      </div>
      <div class="userDetail">
    <h1>Welcometohomepage</h1>
    
    <?php
      
      $row = $_SESSION['username'];
      echo "<ul><li>Id: ".$row[0]."</li><li>Name: ".$row[1]."</li><li>Email: ".$row[2]."</li><li>Gender: ".$row[3]."</li></ul>";     
      
    ?>
    </div>
    <div class="info">
      <div class="upperContainer">
        <div id="fiction" class="bookContainer">
          <?php       
          $sql = "SELECT * FROM books WHERE catagory = 'fiction' limit 3";
          $result = mysqli_query($conn1, $sql);
          
          while($row = mysqli_fetch_row($result)){
            echo ' <div class="bookFrame" id="fiction_book_C1"><strong>BookName :</strong>' . $row[0]. '<br><strong>Catagory: </strong>' . $row[1]. '<br><strong>Author: </strong>' . $row[2]. '<br></div>';
          }
          $conn1->close();
          ?>
        </div>
        <br>
        <!-- <div class="nextButton"> -->
        <button onclick="showNextData('fiction')">next</button>
        <!-- </div> -->
        </div>


        <div class="upperContainer">
        <div id="science" class="bookContainer">
          <?php       
          // // include "dbConnection.php";
          // // $conn = new connection("localhost", "paranav", "12345678", "laboratory");
          $conn1=$conn->createConnection();
          mysqli_select_db($conn1, "laboratory");
          $sql = "SELECT * FROM books WHERE catagory = 'science' limit 3";
          $result = mysqli_query($conn1, $sql);
          
          while($row = mysqli_fetch_row($result)){
            echo ' <div class="bookFrame" id="fiction_book_C1"><strong>BookName :</strong>' . $row[0]. '<br><strong>Catagory: </strong>' . $row[1]. '<br><strong>Author: </strong>' . $row[2]. '<br></div>';
          }
          $conn1->close();
          ?>
        </div>
        <br>
        <!-- <div class="nextButton"> -->
        <button onclick="showNextData('science')">next</button>
        <!-- </div> -->
        </div>



        <div class="upperContainer">
        <div id="mystry" class="bookContainer">
          <?php       
          // include "dbConnection.php";
          // $conn = new connection("localhost", "paranav", "12345678", "laboratory");
          $conn1=$conn->createConnection();
          mysqli_select_db($conn1, "laboratory");
          $sql = "SELECT * FROM books WHERE catagory = 'mystry' limit 3";
          $result = mysqli_query($conn1, $sql);
          
          while($row = mysqli_fetch_row($result)){
            echo ' <div class="bookFrame" id="fiction_book_C1"><strong>BookName :</strong>' . $row[0]. '<br><strong>Catagory: </strong>' . $row[1]. '<br><strong>Author: </strong>' . $row[2]. '<br></div>';
          }
          $conn1->close();
          ?>
        </div>
        <br>
        <!-- <div class="nextButton"> -->
        <button onclick="showNextData('mystry')">next</button>
        <!-- </div> -->
        </div>
    </div>
</body>
</html>