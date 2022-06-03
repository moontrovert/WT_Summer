<?php
$first_name = $_REQUEST["first_name"];
$last_name = $_REQUEST["last_name"];
$age = $_REQUEST["age"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

/*if(first_name== "" )
{
    echo "This fild is required";
}
else
{
    echo "Your first name is " . $first_name;
}

if(last_name== "" )
{
    echo "This fild is required";
}
else
{
    echo "Your last name is " . $last_name;
}*/




if(isset($_REQUEST["Designation"]))
{
    
    echo "Designation must be selected" ."<br>";
    
}
else
{
    ;
    echo "Designation is " . $_REQUEST["Designation"]. "<br>";
}


if(isset($_REQUEST["Java"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"])){
    if(isset($_REQUEST["Java"]) && isset($_REQUEST["PHP"])){
        echo "Preferred language is " . $_REQUEST["Java"] . " and " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"])){
        echo "Preferred language is " . $_REQUEST["PHP"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["Java"]) && isset($_REQUEST["C++"])){
        echo "Preferred language is " . $_REQUEST["Java"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["Java"])){
        echo "Preferred language is " . $_REQUEST["Java"];
    }
    elseif(isset($_REQUEST["PHP"])){
        echo "Preferred language is " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["C++"])){
        echo "Preferred language is " . $_REQUEST["C++"];
    }

}
else
{
    echo "Preferred language must be selected" . "<br>";
}

if($email == "")
{
    echo "Email should not be empty"."<br>";
}
else
{
    echo "Email is " . $email."<br>";
}

if(strlen($password) <6)
{
    echo "Password should be more than 6 characters" ."<br>";
}
else
{
    echo "Password correct" ."<br>";
}
?>