<html>
<body>
    <?php
//session_start();
    $servername = "localhost";
        $username = "imorales2016";
        $password = "Pb2488603856197";
        $conn = new PDO("mysql:host=$servername;dbname=imorales2016", trim($username), trim($password));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "drop table customerinfo7;";
    $conn->exec($sql);
header('location: account.html');
?>
    </body></html>