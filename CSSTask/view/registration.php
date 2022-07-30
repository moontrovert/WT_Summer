<?php
//require("../control/registrationcontrol.php") 
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    <div class=companyname>
        <h1>ABC Management System</h1>
        <h3 id=slogan>We Create Future<h3>
    </div>
</head>
<body>
    <div class=sticky>
        <div class=navbar>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Shop</a>
        </div>
    </div>

    <div>
        <div class="back">
        <h2>Registration Form</h2>
</div>
    </div>
    <hr>

    <form action="" method="post" enctype="multipart/form" id="myform">
    <table>
        <tr>
            <td>First Name:</td><td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Last Name:</td><td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Age:</td><td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Designation:</td>
            <td>
                
                <div id="red"><input type="radio" name="designation" value="juniorprogrammer">Junior Programmer </div> 
                <div id="yellow"><input type="radio" name="designation" value="seniorprogrammer">Senior Programmer</div>
                <div id="green"><input type="radio" name="designation" value="projectlead">Project Lead</div>
                
            </td>
        </tr>  
        <tr>
            <td>Preferred Language:</td>
            <td>
                <input type="checkbox" name="planguage" value="java">JAVA
                <input type="checkbox" name="planguage" value="php">PHP
                <input type="checkbox" name="planguage" value="c++">C++
            </td>
        </tr> 
        
        <tr>
            <td>Email:</td><td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td><td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Please choose a file:</td>
            <td><input type="file" name="picture"></td>
        </tr>
        
    </table>
    
        <input type="submit" name="submit" class="button submit" value="Submit">
        <input type="reset" name="reset" class="button reset" value="Reset">
        
</form> 
</body>
