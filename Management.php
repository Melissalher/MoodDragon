<!DOCTYPE html>
<html>

<head>
  <title>Management</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="mystyle-management.css">  
</head>

<body>

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="https://i.imgur.com/JdMI35J.png" style="width:100%"><BR><BR><BR><BR>
  <a href="#create" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user-circle-o w3-xxlarge"></i>
    <p>CREATE</p>
  </a>
  <a href="#reset" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-exclamation-circle w3-xxlarge"></i>
    <p>RESET</p>
  </a>
  <a href="#delete" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-window-close w3-xxlarge"></i>
    <p>DELETE</p>
  </a>
  <a href="#list" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-book w3-xxlarge"></i>
    <p>USERS LIST</p>
  </a>
</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#create" class="w3-bar-item w3-button" style="width:25% !important">CREATE</a>
    <a href="#reset" class="w3-bar-item w3-button" style="width:25% !important">RESET</a>
    <a href="#delete" class="w3-bar-item w3-button" style="width:25% !important">DELETE</a>
    <a href="#list" class="w3-bar-item w3-button" style="width:25% !important">USERS LIST</a>
  </div>
</div>

<div class="w3-padding-large" id="main">
  
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Mood</span> Dragon</h1>
    <p>User's Management Portal </p>
  </header>

  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="create">       
  <SECTION id="create">
    <FORM method="POST">
        <i class="fa fa-user-circle-o w3-xxlarge"></i>
        <H2>CREATE NEW USER</H2> 
        <LABEL for="username"><STRONG>Set a username</STRONG><br></LABEL>
        <INPUT type="text" name="username"><br><BR>
        <LABEL for="password"><STRONG>Set a password</STRONG><br></LABEL>
        <INPUT type="password" name="password"><br><BR>
        <BUTTON type="submit" name="create">CREATE</BUTTON>
    </FORM>
    <?php
     $servername = "localhost:3306";
     $db = "users";
     $dbuser = "ro_user";
     $dbpassword = "Isabella1!";

        if(isset($_POST['create'])) {
          $userid = $_POST['username'];
          $password = $_POST['password'];
            try {
                $con = "mysql:host=$servername;dbname=$db"; 
                $pdo = new PDO ($con, $dbuser, $dbpassword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              if($pdo) {
                 $sql = "INSERT INTO credentials (userid, password) VALUES('".$userid."', '".$password."')";

             if($pdo->exec($sql)) {
                 echo "<script type='text/javascript'> window.onload=function() { alert('Succesfully'); } </script>";
             }
            else {
                echo "<script type='text/javascript'> window.onload=function() { alert('Failed'); } </script>";
             }
            }
          } catch(Exception $e) {
                    echo "$e";
            }
        }
        ?>
</SECTION>
    </div>

    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="create">
<SECTION id="reset">
    <FORM method="POST">
        <i class="fa fa-exclamation-circle w3-xxlarge"></i>
        <H2>RESET PASSWORD</H2>
        <LABEL for="username"><STRONG>Type Username</STRONG><br></LABEL>
        <INPUT type="text" name="username"><br><BR>
        <LABEL for="password"><STRONG>Set a new password</STRONG><br></LABEL>
        <INPUT type="password" name="password"><br><BR>
        <BUTTON type="submit" name="reset">RESET</BUTTON>
    </FORM>

    <?php
      $servername = "localhost:3306";
      $db = "users";
      $dbuser = "ro_user";
      $dbpassword = "Isabella1!";

        if(isset($_POST['reset'])) {
           $userid = $_POST['username'];
           $password = $_POST['password'];
            try {
              $con = "mysql:host=$servername;dbname=$db"; 
              $pdo = new PDO ($con, $dbuser, $dbpassword);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              if($pdo) {
                $sql = "UPDATE credentials SET password = '".$password."' WHERE userid = '".$userid."'";

                $stmt = $pdo->prepare($sql);
            if($stmt->exec()) {
                echo "<script type='text/javascript'> window.onload=function() { alert('Succesfully'); } </script>";
            }
            else {
                echo "<script type='text/javascript'> window.onload=function() { alert('Failed'); } </script>";
            }
           }
          } catch(Exception $e) {
                    echo "$e";
            }
       }
        ?>
</SECTION>
    </div>

    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="create">
<SECTION id="delete">
    <FORM method="POST">
        <i class="fa fa-window-close w3-xxlarge"></i>
        <H2>DELETE USER</H2>
        <LABEL for="username"><STRONG>Username</STRONG><br></LABEL>
        <INPUT type="text" name="username"><br><BR>
        <BUTTON type="submit" name="delete">DELETE</BUTTON>
    </FORM>

    <?php
     $servername = "localhost:3306";
     $db = "users";
     $dbuser = "ro_user";
     $dbpassword = "Isabella1!";

        if(isset($_POST['delete'])) {
           $userid = $_POST['username'];
              $con = "mysql:host=$servername;dbname=$db"; 
              $pdo = new PDO ($con, $dbuser, $dbpassword);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            if($pdo) {
               $sql = "DELETE FROM credentials WHERE userid = '".$userid."'";
               $result = $pdo->exec($sql);

            if($result) {
                echo "<script type='text/javascript'> window.onload=function() { alert('Successfully'); } </script>";
            }
            else {
                echo "<script type='text/javascript'> window.onload=function() { alert('Failed'); } </script>";
            }
           }
          }
        ?>
</SECTION>
        </div>

    <div class="w3-content w3-justify w3-text-grey w3-padding-64">
<SECTION id="list">
    <FORM method="POST">
        <i class="fa fa-book w3-xxlarge"></i>
        <H2>USER'S LIST</H2>
        <BUTTON type="submit" name="list">LIST</BUTTON>
    </FORM>
        
    <?php
        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }
            
            function current() {
                return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
            }
            
            function beginChildren() {
                echo "<tr>";
            }
            
            function endChildren() {
                echo "</tr>" . "\n";
            }
        }
        
        $servername = "localhost:3306";
        $db = "users";
        $dbuser = "ro_user";
        $dbpassword = "Isabella1!";

        if(isset($_POST['list'])) {
            try {
              $con = "mysql:host=$servername;dbname=$db";
              $pdo = new PDO($con, $dbuser, $dbpassword);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $pdo->prepare("SELECT * FROM credentials");
                $stmt->execute();

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo "<p>".$v."</p>";
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
        }
    ?>
</SECTION>
</div>

</SECTION>

<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <p class="w3-medium">MoodDragon &copy; <a href="https://www.linkedin.com/in/melissaalher/" target="_blank" class="w3-hover-text-green">Todos los derechos reservados 2022</a></p>
  <!-- End footer -->
  </footer>

    </div>
    </body>
    </html>


    

    
    
    