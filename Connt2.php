<html>
<body>
<?php
    $servername = "localhost";
    echo '<style>
table {border-collapse: collapse;}
tr, th, td {border: 1px solid black;} 
</style>';
    try {
        $username = "imorales2016";
        $password = "Pb2488603856197";
        $conn = new PDO("mysql:host=$servername;dbname=imorales2016", trim($username), trim($password));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

   try{

            //inserting a record
        $sql = "insert into customerinfo7 values ";
        $sql.= "('".$_POST["username"]."',";
        $sql.= "'".$_POST["password"]."',";
        $sql.= "'".$_POST["city"]."',";
        $sql.= "'".$_POST["state"]."',";
        $sql.= "'".$_POST["country"]."');";
    
            $conn->exec($sql);
        echo "<br> The record has been updated! <br>";
        }
           catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
}
   include("Connd.php");
     
?>
    </body>
</html>