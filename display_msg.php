<html>
<body>
    a moment please..................
<?php
session_start();
$data = "";
if($_SERVER['REQUEST_METHOD']=='POST')
$data = $_POST["send_msg"]  ;  

$User = $_SESSION['User'];
$filename;

$connection = mysqli_connect("localhost","root","Zain","employees");

if(!$connection)
{
    echo "Error";
}

$sql = "Select Message from chatin where Username='$User'";
$result= mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0)
{

while($row = $result->fetch_assoc()){
    $filename = $row["Message"];
}
}

else{ echo "Nthing found";}

//* next assingment: If filename doesnt exist create a new file.

if(!empty($data)){
if(!file_exists($filename)){
    fopen("$filename","w") or die("Not Created");
}

$myfile = fopen("$filename","a") ;
fwrite($myfile,"$User: "."$data"."\r\n");
fclose($myfile);
}
$_SESSION['filename']=$filename;

header("Location:http://localhost:81/chat-in/message.php?name=$User");

//echo "Username:". $User;

?>    



</body>
</html>