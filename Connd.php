<html>
<body>
<?php
//session_start();

if(isset($_POST['username'])) {
echo "<br>Welcome <strong>".$_POST['username']."</strong><br/>";
} else {
}
?>
    
    </body>
</html>
<!DOCTYPE html>
<html>
<body>

<form action="Connt2.php" method="post">
Please enter old username: <input type="text" name="username" placeholder="username" required> 
 <br/><br/>
Please enter old password: <input type="password" name="password" placeholder="password" required>

<br/><br/>
 Enter New City: <input type="text" name="city" placeholder="enter city" required>

<br/><br/>
Enter New State: <input type="text" name="state" placeholder="enter state" required>

<br/><br/>
Enter New Country: <input type="text" name="country" placeholder="enter country" required>

<br/><br/>
<input type="submit" name="login" value="Submit">
</form>  
    <form action="createtable.php" method="post">
    <input type="submit" name="show" value="List of old and new accounts made">
    </form>
    <a href="out.php">Logout of Account</a>
   
</body>
</html>