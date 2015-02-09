<html>
<head>
    <link rel="stylesheet" type="text/css" href="boot.css" media="screen"/>
    <?php session_start();
  error_reporting(0);
  $_SESSION['active'];
    if(empty($_SESSION['active'])){ $_SESSION['active']="notactive";}

     ?>
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



    <div id="container">

    <p><b><i>A different kind of Chat Room</i></b></p><br/> <br/>
    <img src="chat.png" alt="image">

        <p>How it works: </p>
    <p><b>Rooms :- </b> Click on any of the above rooms and pick a username.</p>
     <p><b>MyRoom :-</b> Create a user id and a Key. This Key will allow other users to access you room and talk to you privately. </p>
        
        
       
    
    </div>






    <div id="adv">
    
       <div id="anime1" onclick="location.href='http://yahoo.com'"></div>

        <div id="astro"></div>

    </div>






</body>
</html>
