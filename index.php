<?php
include 'nav.html';
?>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" herf="http://localhost/DAY9/style.css"></link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./image/img1.jpg" alt="Los Angeles" style="width:100%; height:10%">
      </div>

      <div class="item">
        <img src="./image/img2.jpg" alt="Chicago" style="width:100%; height:10%">
      </div>
    
      <div class="item">
        <img src="./image/img3.jpg" alt="New york" style="width:100%; height:10%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div id="formcontainer1">
<div class="container">
  <h2 style="color: red; margin: 30px; margin-left: 130px">Registration-form</h2>
  <form action="registrationData.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="abc@email.com" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="" name="password">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="999999999" name="phone">
    </div>

    <div class="form-group">
    <p><strong>Gender:<strong></p>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other</label>
    </div>

    <div class="form-group">
    <label for="month">Subscribe for:</label>
    <select name="duration" id="month">
    <option value="1">1-Month</option>
    <option value="3">3-Month</option>
    <option value="6">6-Month</option>
    <option value="12">1-Year</option>
  </select>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Agreed</label>
    </div>
    <button type="submit" class="btn btn-info" style="margin-left: 206px">Submit</button>
  </form>
</div>
</div>