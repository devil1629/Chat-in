<html>
<head>
    <link rel="stylesheet" type="text/css" href="boot.css" media="screen"/>
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
    <li><a href="">My Room</a></li>
    <li><a href="">About-Us</a></li>
    <li><a href="">Report Chat</a></li>

    </ul>


        
        <div id="container">
            <form method="post" action="signup.php">
            <table id="table-back">
                
       
                <tr>   
                    <td class="lead">  Username:  </td><td>  <input class="form-control" id="inputEmail" type="text" name="uname" size="30"/></td></tr>
                <tr><td class="lead">  Password:  </td> <td>  <input class="form-control" id="inputEmail" type="password" name="password" size="30"/> </td></tr>
                <tr><td class="lead">  Chatroom name:  </td> <td>  <input class="form-control" id="inputEmail" type="text" name="Room" size="30"/> </td></tr>
              <tr> <td  class="btn btn-primary btn-lg"> <input id="snbutton" type="submit" value="Sign-Up"/></td></tr>    
        
            
           
            </table>
            </form>
        
        </div>




</body>
</html>