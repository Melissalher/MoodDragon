<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href= "login-mystyle.css">  
</head>

<body>
<div class="form">
  <section id="login">
  <form action="" method="post">
    <div class="imgcontainer">
          <img src="https://i.imgur.com/JdMI35J.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required> 
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit" name="login" value="login">Login</button><BR>
    </div>
  </form>

 <?php
          $servername = "localhost:3306";
          $db = "users";
          $dbuser = "ro_user";
          $dbpassword = "Isabella1!";

            if(isset($_POST['login'])) {
                $usrnm = $_POST['uname'];
                $psswrd = $_POST['psw'];
              try {
              $con = "mysql:host=$servername;dbname=$db"; 
              $pdo = new PDO ($con, $dbuser, $dbpassword);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if($pdo) {
                  $sql = "SELECT * FROM credentials WHERE userid = '".$usrnm."' AND password = '".$psswrd."'";
                  // $stmt = $pdo->prepare('some query here');
                  $result = $pdo->query($sql);
                

                if($result && $result->rowCount() == 1) {
                   header('Location: http://localhost/DevOps/management.php');
                }
              }
                // else {
                    // echo "Invalid Username or Password";
                          //  }
               }
               catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                }
              }
              
            ?>

    </section>
  </div>
</body>