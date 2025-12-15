<!DOCTYPE html>
<html>
<head><title>PHP Validation</title></head>
<body>
<h1>This is 2nd lab task </h1>    

<?php
 
$name= "";
$nameerror= "";
$email= "";
$emailerror= "";
$dob = "";
$doberror = "";
$gender = "";
$gendererror = "";
$degree = [];
$degreeerror = "";
$bloodgroup = "";
$bloodgrouperror = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //NAME
    if (empty($_POST["name"]))
    {
        $nameerror="Name is required";
    }
    else 
    {
        $name = test_input($_POST["name"]); 
        $words = explode(' ', $name);
        $wordCount = count(array_filter($words));
        
        if($wordCount < 2)
        {
            $nameerror = "must contain at least two words";
        }
        else if (!preg_match("/^[a-zA-Z]/", $name))
        {
            $nameerror = "must start with a letter";
        }
        else if (!preg_match("/^[a-zA-Z .-]+$/", $name))
        {
            $nameerror = "only letters, period, dash and space allowed";
        }
    }

    //EMAIL
    if(empty($_POST["email"]))
    {
        $emailerror = "email is required";
    }
    else
    {
        $email = test_input($_POST["email"]); 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailerror = "must be a valid email address";
        }
    }

    //DOB
    if(empty($_POST["dob"]))
    {
        $doberror = "date of birth is required";
    }
    else
    {
        $dob = test_input($_POST["dob"]); 
        if(!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $dob))
        {
            $doberror = "Date must be in dd/mm/yyyy";
        }
    }

    //GENDER
    if(empty($_POST["gender"]))
    {
        $gendererror = "gender must be selected";
    }
    else
    {
        $gender = test_input($_POST["gender"]);
    }

    //degree
    if(empty($_POST["degree"]))
    {
        $degreeerror = "At least two degrees must be selected";
    }
    else
    {
        $degree = $_POST["degree"];
        if(count($degree) < 2)
        {
            $degreeerror = "At least two degrees must be selected";
        }
        else
        {
            foreach($degree as $key => $value)
            {
                $degree[$key] = test_input($value);
            }
        }
    }
    
    //blodd group
    if(empty($_POST["bloodgroup"]))
    {
        $bloodgrouperror = "Blood Group must be selected";
    }
    else
    {
        $bloodgroup = test_input($_POST["bloodgroup"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    return $data;
}
?>
 
<form method="post" action="">
 
Name: 
<input type="text" name="name" value="<?php echo $name; ?>">
<?php echo $nameerror; ?>
<br><br>

Email: 
<input type="text" name="email" value="<?php echo $email; ?>">
<?php echo $emailerror; ?>
<br><br>

DOB:
<input type="date" name="date" value="<?php echo $dob; ?>">
<?php echo $doberror; ?>
<br><br>

Gender:
<br>
<input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male <br>
<input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female <br>
<input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>> Other <br>
<?php echo $gendererror; ?>
<br><br>

Degree: 
<br>
<input type="checkbox" name="degree[]" value="O Level" <?php if(in_array("O Level", $degree)) echo "checked"; ?>> O Level <br>
<input type="checkbox" name="degree[]" value="A Level" <?php if(in_array("A Level", $degree)) echo "checked"; ?>> A Level <br>
<input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc", $degree)) echo "checked"; ?>> BSc <br>
<input type="checkbox" name="degree[]" value="MSc" <?php if(in_array("MSc", $degree)) echo "checked"; ?>> MSc <br>
<?php echo $degreeerror; ?>
<br><br>

Blood Group: 
<select name="bloodgroup">
    <option value="">Select Blood Group</option>
    <option value="A+" <?php if($bloodgroup=="A+") echo "selected"; ?>>A+</option>
    <option value="A-" <?php if($bloodgroup=="A-") echo "selected"; ?>>A-</option>
    <option value="B+" <?php if($bloodgroup=="B+") echo "selected"; ?>>B+</option>
    <option value="B-" <?php if($bloodgroup=="B-") echo "selected"; ?>>B-</option>
    <option value="O+" <?php if($bloodgroup=="O+") echo "selected"; ?>>O+</option>
    <option value="O-" <?php if($bloodgroup=="O-") echo "selected"; ?>>O-</option>
    <option value="AB+" <?php if($bloodgroup=="AB+") echo "selected"; ?>>AB+</option>
    <option value="AB-" <?php if($bloodgroup=="AB-") echo "selected"; ?>>AB-</option>
</select>
<?php echo $bloodgrouperror; ?>
<br><br>

<input type="submit" name="submit" value="Submit">
</form>
 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameerror) && empty($emailerror) && empty($doberror) && empty($gendererror))
{
    echo "<h3> Your Input: </h3>";
    echo "Name: ".$name. "<br>";
    echo "Email: ".$email. "<br>";
    echo "Date of Birth: " .$dob. "<br>";
    echo "Gender: " .$gender. "<br>";
    echo "Degree: " .implode(", ", $degree). "<br>";
    echo "Blood Group: " . $bloodgroup . "<br>";
} 
?>
</body>
</html>