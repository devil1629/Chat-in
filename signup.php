<html>
<body>

<?php
    session_start();
 $pass  = $_POST["password"];
 $user = ucwords( $_POST["uname"]);
 $chatroom = $_POST["Room"].".txt";

 

 //Connect to the sql database
 $connection =  mysqli_connect("localhost","root","Zain","employees");
 if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
    echo "yes"."<br>";}

//Create the querry and the result set.
$sql = "SELECT * FROM chatin where Username='$user'";   
$result = mysqli_query($connection,$sql); 



if(mysqli_num_rows($result) > 0) 
{
    //If user already exists
    echo "Username already exists";
} 
  

//Create the querry and the result set.
$sql2 = "SELECT * FROM chatin where Message='$chatroom'";   
$result2 = mysqli_query($connection,$sql2); 



if(mysqli_num_rows($result2) > 0) 
{
    //If Chatroom already exists
    echo "Chatroom already exist.";
} 

else {
//Add the user to the database    
$addUser = "Insert Into chatin(Username,Passwd,Message) values('$user','$pass','$chatroom')";   
$result = mysqli_query($connection,$addUser);

if($result){
// After user is sucessfully added. redirect him to the main page.
header("Location: http://localhost:81/chat-in/myRoom.php?name=$user" );
}
    
else{echo "Error".$user.$pass.$chatroom;}
}


?>



</body>
</html>