<?php
    $host="localhost";
    $dbuser="root";
    $pass="";
    $dbname="miniproject";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        die("Connection Failed!".mysqli_connect_errno());
    }
    else
    {
        echo ("CONNECTED TO DATABASE");
    }
    
    $result="SELECT * 
    FROM hod";
   
    //echo $result;
    
    $records=mysqli_query($conn,$result) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  user-select: none;
  text-decoration: none;
  font-family: Goudy Old Style;
}
body{
 background: #9e81af;
 background-image: url(image2.jpg);
}
.parnt{
    display: flex;
    position: relative;
}
.parnt .sb{
    position: fixed;
    width: 250px;
    height: 100%;
    left: 0;
    
   background: #201831;
   padding: 30px 0;
}
.parnt .sb h2{
    color:#fff;
   font-size: 25px;
   text-transform: uppercase;
   font-weight: 600;
   cursor: pointer;
   line-height: 25px;
   text-align: center;
   margin-bottom: 30px;
}
.sb ul li{
    padding: 20px;
    border-bottom: 2px solid  rgba(225,225,225,0.05);
    line-height: 30px;
    border-left: 3px solid transparent;
}
.parnt .sb ul li a{
    color: #bdb8d7;
   display: block;
   text-decoration: none;
   font-size: 18px;
   padding-left: 25px;
   width: 100%;
   position: relative;
}
.parnt .sb ul li a .fas{
   width: 30px;
}
.parnt .sb ul li:hover{
    background:#7e769c;
    border-left-color: white;
}
.parnt .sb ul li:hover a{
    color: #fff;
    background: #7e769c;
 }
.parnt .cont{
   width: 100%;
   margin-left: 250px;
}
.parnt .cont .headr{
  padding: 20px;
  background: thistle;
  cursor: pointer;
    color: #201831;
    font-size: 30px;
    border-bottom: 3px solid #201831;
}
.bx{
        position: relative;
        width: 70%;
        padding: 50px;
        background: thistle;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        font-size: 25px;
        margin: 50px;
        border: 3px solid #201831;
        overflow: hidden;
        text-align: center;
}
.are{
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 24px;
        text-decoration: none;
        color: #000;
        border: 1px solid black;
        margin-right: 40px;
        font-weight: 500;
        margin-top: 20px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.are:hover{
    background-color: thistle;
    color: #201831;
}
.para {
   
   margin-left: 180px;
}
.area{
    
    display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 24px;
        text-decoration: none;
        color: #000;
        border: 1px solid black;
        font-weight: 500;
        margin-top: 20px;
        
        box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.icon{
        position: relative;
        width: 70px;
        height: 70px;
        color: #fff;
        background: #201831;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        border-radius: 50%;
        font-size: 40px;
        font-weight: 700;
        transition: 1s;
}
table
		{
			border-collapse: collapse;
			width:100%;
			background-color: thistle;
            float: right;
		}
		
		th,td
		{
			padding: 10px;
			text-align:center;
			border-bottom: 2px solid #201831;
			border-left: 4px solid #201831;
            width:40px;
            color: black;
		}
    </style>
    <meta charset="utf-8">
    <title >SIZO TELECOMMUNICATIONS</title>
    <script src="https://kit.fontawesome.com/f04db26bb7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="parnt">
        <div class="sb">
                <h2>My Account</h2>
                <ul>
                    <li><a href="companyhome.html"><i class="fas fa-home"></i>HOME</a></li>
                    <li><a href="s1.php"><i class="fas fa-search"></i>SEARCH</a></li>
                    <li><a href="afterlogout.html"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>
                    
                </ul>
        </div>
            <div class="cont">
                <div class="headr">WELCOME</div>
                <center><table>
                    <tr> 	
                            <th>HOD Name </th>
                            <th>Experience In Field</th>
                            <th>No of Employee</th>
                            
                            
                           <!-- <th>Status</th>
                            <th>Service Mode</th>   -->
                    
                    
                                  </tr>
                    <?php
                              
                              while($row=mysqli_fetch_assoc($records))
                               {	echo"<tr>";
                                   echo"<td>".$row['h_name']."</td>";
                                   echo"<td>".$row['exp_in_field']."</td>";
                                   echo"<td>".$row['no_of_emp']."</td>";
                                    
                                   
                                  
                    
                                   
                                    echo"<tr>"; 
                               }
                    ?>
                    </table>
                    <div class="para">
                        <div class="bx">
                            <div class="icon">01</div><br>
                            <h4>INSERT NEW SERVICES</h4>
                            <p></p>
                            <a href="services.php" class="are">Insert</a>
                            <a href="companyinsertion.php" class="area">Delete</a>
                        </div>
                       <!-- <div class="bx">
                            <div class="icon">02</div><br>
                            <h4>APPOINT HOD</h4>
                            <p></p>
                            <a href="dep.php" class="are">Select</a>  -->
    
                        </div>
                        
                    </div>
                       
     
    
    </div>
    
    
                </div>
    
        </div>
    
    
    </body>
    </html>