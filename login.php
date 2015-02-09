<html>
<body>

    hey
<?php
    
session_start();
 $pass  = $_POST["password"];
 $user = ucwords( $_POST["uname"]);
 $_SESSION['User'] = $user;

 $_SESSION['active'];

 //Connect to the sql database
 $connection =  mysqli_connect("localhost","root","Zain","employees");
 if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
    echo "yes"."<br>";}

//Create the querry and the result set.
$sql = "SELECT username FROM chatin where Username='$user' and passwd='$pass'";   
$result = mysqli_query($connection,$sql); 

if(mysqli_num_rows($result)>0){
    header("Location:http://localhost:81/chat-in/display_msg.php?name=$user");
    $_SESSION['active'] = "active";
}

else{
    echo "Error";
}


?>


</body>
</html>