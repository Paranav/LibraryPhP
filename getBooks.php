  <?php 
  session_start();
  $bookCount = $_GET['bookCount'];
  $catagory = $_GET['catagory'];  
  include "dbConnection.php";
  $conn = new connection("localhost", "paranav", "12345678", "laboratory");
  $conn1=$conn->createConnection();
  mysqli_select_db($conn1, "laboratory");
  $sql = "SELECT * FROM books WHERE catagory = 'fiction' limit ".$bookCount.", 3";
  $result = mysqli_query($conn1, $sql);
  
  while($row = mysqli_fetch_row($result)){
    echo ' <div class="bookFrame" id="fiction_book_C1"><strong>BookName :</strong>' . $row[0]. '<br><strong>Catagory: </strong>' . $row[1]. '<br><strong>Author: </strong>' . $row[2]. '<br></div>';
  }
  $conn1->close();
  ?>