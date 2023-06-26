<?php
session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbclient';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $title = $_POST['title'];
        $skills = $_POST['skills'];
        $scope = $_POST['scope'];
        $budget = $_POST['budget'];
        $description = $_POST['description'];

        // Add the validated inputs to the database
        $sql = "SELECT * FROM jobpost";
        if (mysqli_query($conn, $sql)) {
            echo "Data successfully selected.";
        }
}

// Retrieve data title 1
$sql = "SELECT * FROM jobpost WHERE id = 1";
$result = mysqli_query($conn, $sql);

// Retrieve data title 2
$sql2 = "SELECT * FROM jobpost WHERE id = 2";
$result2 = mysqli_query($conn, $sql2);

// Retrieve data title3 3
$sql3 = "SELECT * FROM jobpost WHERE id = 3";
$result3 = mysqli_query($conn, $sql3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="clientdash.css">
</head>
<body>
    <div class="container">
        <nav>
            <img src="images/logo.png" width="80vw" name="home" height="80vh" alt="">
            <di class="inner_nav">
       <div class="div1"><img class="home" src="images/home_icon.png" width="50vw" height="50vh" alt=""><br>Home</div>
       <div class="div1"><img class="home" src="images/account_icon.png" width="50vw" height="50vh" alt=""><br>Account</div>
       <div class="div1"><img class="home" src="images/messenger.png" width="50vw" height="50vh" alt=""><br>Message</div>
       <div class="div1"><img class="home" src="images/notif_icon.png" width="50vw" height="50vh" alt=""><br>Notification</div>
       <div class="div1"><img class="home" src="images/logout_icon.png" width="50vw" height="50vh" alt=""><br>Log out</div>
              
        </nav>
      </div>
      <div class="inner-body">
        <div class="inner-body1">
           
            <img src="images/homepage.png" width="100%" height="400px" alt="">
          <div class="i">
            <h1>Looking for a job?</h1>
            <div class="o">
              <input type="text" placeholder="What are you Looking for?">
              <button>Search</button>
            <div class="L">
                <button>POST A JOB</button>
              </div>
            </div>
          
          </div>
           
        </div>
      </div><br><br>
      <div class="inner-body2">
        <div class="box">

              <?php 
               while ($row = mysqli_fetch_assoc($result)) {
                echo '<h2 class="box-h1">' . $row['title'] . '</h2>'; 
               }
              ?>             

            <div class="bb">
                <p>$1000 per-month</p>
                <button>lorem</button>
            </div>
            <p>We are currently looking for a talented and passionate for CALL CENTER
                to join our team.As a CALL CENTER Agent,your primary requirements and skills must have strong
                phone and verbal communication skills,along with active listening.h</p><br>
                <h3>PART-TIME</h3><br>
                <div class="a">
             <a href="">Non Voice</a>&nbsp;
             <a href="">Csr/Tsr</a>
                </div><br><br>
                <a href="">Voice Account</a><br><br><br>
                <div class="v">
                    <a class="b" href="">More</a>
                </div>

        </div>
        <div class="box">
            <?php 
               while ($row = mysqli_fetch_assoc($result2)) {
                echo '<h2 class="box-h1">' . $row['title'] . '</h2>'; 
               }
              ?>  
            <div class="bb">
                <p>₱30,000 per month</p>
                <button>lorem</button>
            </div>
            <p>We are currently looking for a talented and passionate Web Designer to join our team.As a Web Designer. your primary requirements and skills must have patiece, creativity, and imagination.
            </p><br>
                <h3>FULL-TIME</h3><br>
                <div class="a">
             <a href="">Data Specialist</a>&nbsp;
             <a href="">IT Product Specialist</a>
                </div><br><br>
                <a href="">Data Entry Personnel</a>
                <div class="v"><br><br><br><br>
                    <a class="b" href="">More</a>
                </div>

        </div>
        <div class="box">
            <?php 
               while ($row = mysqli_fetch_assoc($result3)) {
                echo '<h2 class="box-h1">' . $row['title'] . '</h2>'; 
               }
              ?> 
          <div class="bb">
            <p>₱50,000 per month </p>
            <button>lorem</button>
          </div>
           
            <p>We are currently looking for a talented and passionate Web Developers to join our team. As a Web Developers,your primary requirements and skills must be knowing how to use HTML/CSS,javascript and Design Sense</p>
            <br>
                <h3>FULL-TIME</h3>  <br>
                <div class="a">
             <a href="">Frontend Developer</a>&nbsp;
             <a href="">Full Stack Developer</a>
                </div><br>  <br>
                <a href="">Backend Developer</a><br><br><br>
                <div class="v">
                    <a class="b" href="">More</a>
                </div>

        </div>
       
      </div><br><br>
   <center>
    <div class="inner-footer">
        <img src="images/LOCATION.jpg" width="50vw" height="50vh" alt="">&nbsp;CITY of Imus,Cavite&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="images/PHONE NO..png" width="30vw" height="30vh" alt="">&nbsp;(046)&nbsp;471&nbsp;670&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="images/EMAIL.png" width="30vw" height="30vh" alt="">&nbsp;jobhiring@gmail.com
        
     </div>
   </center>
    </div>
</body>
</html>