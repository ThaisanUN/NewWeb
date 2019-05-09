<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql="select*from student where username='"username"' AND password='"password"'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["ID"]. " Name: ". $row["username"]. " - password: " . $row["password"]."<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <link rel="stylesheet" href="STYLE.CSS">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script>
        $(Document).ready(function(){
            $(".welcom").show();
            $(".signup-form").hide();
            $(".signup").css("backgorund","rgbargba(0, 0, 0, 0.842)");
            
            $(".login-form").hide();
            $(".login").css("backgorund","rgba(51, 51, 0, 0.519)");
            
           
            $(".login").click(function(){
                $(".signup-form").hide();
                $(".welcom").hide();
                $(".login-form").show();
                $(".signup").css("background","rgba(51, 51, 0, 0.519)")
                $(".login").css("background","rgba(0, 0, 0, 0.842)")
                $(".signup").css("color","#ffffff")
                $(".login").css("color","yellow");
            });
            $(".signup").click(function(){
                $(".signup-form").show();
                $(".welcom").hide();
                $(".login-form").hide();
                $(".signup").css("background","rgba(0, 0, 0, 0.842)")
                $(".login").css("background","rgba(51, 51, 0, 0.519)")
                $(".login").css("color","#ffffff")
                $(".signup").css("color","yellow");
            });
            $(".welcom").click(function(){
                $(".welcom").show();
                $(".signup-form").hide();
                $(".login-form").hide();
                $(".signup").css("background","rgba(0, 0, 0, 0.842)")
                $(".login").css("background","rgba(51, 51, 0, 0.519)");
            });

            $(".btn").click(function() {
                $(".input").val("");
            });
        }); 
    </script> 
</head>
<body>
    <header>
        <h1 class="name">
            NIPTICT
        </h1>
        <h1 class="stitute">
            Institute
        </h1>
    </header>
   <main>
       
    <div class="container">
        <div class="login">sign in</div>
        <div class="signup">sign up</div>
        <div class="welcom">
          <span class="text1">Welcome</span>
          <span class="text2">To</span>
          <span class="text3">N</span>
          <span class="text4">I</span>
          <span class="text5">P</span>
          <span class="text6">T</span>
          <span class="text7">I</span>
          <span class="text8">C</span>
          <span class="text9">T</span>
        </div>
        <form method="POST" action="create.php"  class="input">
            <div class="login-form">
                <label for="name">USER_NAME</label>
                <input type="text" placeholder="input your email address" name="uname" id="uname" class="input" required>
                <label for="password">PASSWORD</label>
                <input type="password" placeholder="input Your Password" name="password" id="password" class="input" required>
                <input type="submit" class="btn" value="login"> 
                <input type="hidden" name="form_submitted" value="1" />
                <input type="submit" class="btn" value="login">
                <span><a href="http://www.facebook.com">I forgot my password or username.</a></span>
        </div>
        <div class="signup-form">
                <input type="text" placeholder="Your email address" name="email" id="" class="input" required><br>
                <input type="text" placeholder="Your username" name="fname" id="" class="input" required><br>
                <input type="password" placeholder="Your Password" name="fpass" id="" class="input" required><br>
                <input type="submit" class="btn" value="signup"></div>
    </form>
    </div>
    <footer>


    </footer>
</main> 
</body>
</html>  -->