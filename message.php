<html>
<head>
    <link rel="stylesheet" type="text/css" href="boot.css" media="screen"/>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("#invite").click(function(){
 $("#invite_view").toggle()
 
 });    
 
});
</script>
</head>
<body>
<style>
ul{
        padding-left: 38%;
        
    }

ul li{
        border-top-right-radius:4px; 
        border-top-left-radius:4px; 
        padding: 5px;
        background: #FF5050;
        display: inline-block;
        position: relative;
       
    }
    
   
#dropdown table{
        display: none;
            }
 
#dropdown table td{
        padding: 20px;
    }
        
#dropdown:hover>table{
      
      margin-top: 5px;
        border-radius: 10px;         
        min-width: inherit;
        display: block;
        position: absolute;
        background: inherit;
        z-index: +100;
        
    }        
    
    
    #invite{
        position: absolute;
        
        right: 30%;
        
        
    }
    
  
</style>


<h1>Chat-in</h1>


    <ul>
    <li><a href="Index.php">Home</a></li>

    <li id="dropdown"><a href="">Rooms</a><table>
    <tr><td><a>Teens</a></td></tr>
    <tr><td><a>Adults</a></td></tr>
    </table>
    </li>
    <li><a href="myRoom.php">My Room</a></li>
    <li><a href="">About-Us</a></li>
    <li><a href="">Report Chat</a></li>

    </ul>


<div style="margin: 20px;">

</div>



<div id="container">
    <form action="logout.php">
        <input class="btn btn-danger" type="submit" id="signOut" value="Sign Out" />
        </form>
 
    <form action="invite.php">
        <input class="btn btn-info" type="button" id="invite" value="Invite" />
<div id="invite_form">
  <table id="invite_view">
    <tr><td><b>Email:</b> </td><td><input  type="text" id="email" name="send_mail" size="30"/></td></tr>
    <tr><td><b>Room Key:</b></td><td><input  type="text" id="room_key" name="send_key" size="30"/></td></tr>
     <tr><td><input class="btn btn-default" type="submit" id="request_send" value="Invite" /> </td></tr>
    </table>
</div>
        </form>

      
   

    <form method="post" action="display_msg.php">
    
        <p style="color:red;"><?php session_start();
                                   $_SESSION['User']= $_GET["name"]; 
           echo "Welcome: ". $_SESSION['User']; ?> </p> 
        </br></br>

    
        <textarea rows="20" cols="50" class="form-control" rows="3" id="textArea" name="display" readonly="readonly" style="resize:none "><?php  

echo   file_get_contents($_SESSION['filename']);
   
?></textarea></br>
    <input  type="text" id="inputMsg" name="send_msg" autofocus="true" size="50"/>
    <input type="submit" class="btn btn-success" value="Send" />
    </form>

</div>

</body>


</html>