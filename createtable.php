<html>
<body>
<?php  
       echo '<style>
table {border-collapse: collapse;}
tr, th, td {border: 1px solid black;} 
</style>';
    
    if(isset($_POST['show'])) {
        $servername = "localhost";
        $username = "imorales2016";
        $password = "Pb2488603856197";
        $conn = new PDO("mysql:host=$servername;dbname=imorales2016", trim($username), trim($password));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // query the db
        $stmt = $conn->prepare("SELECT username, password, city, state, country FROM customerinfo7;");
        $stmt->execute();
        $flag = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
      // var_dump($result);
       
       if(count($result) > 0) {
           echo "<br> Favorite cities are:<br>";
          echo "<table><tr><th>Username</th><th>Password</th><th>City</th><th>State</th><th>Country</th></tr>";
           for($i=0;$i<count($result);$i++) {
               $row = $result[$i];
               echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["country"]."</td></tr>";
    
           }
           echo "</table>";
       } else {
            echo "0 results";
        
    }
    }

    echo "<br><br>";
?>
    </body>
</html>


<!DOCTYPE html>
<html>
<body>
    <a href="Connd.php">Back To Form</a>
    </body>
</html>
