<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>



    <?php

    $name = "";
    $nameerror = "";
    $email = "";
    $emailerror = "";
    $dob = "";
    $doberror = "";
    $gender = "";
    $gendererror = "";
    $degree = [];
    $degreeerror = "";
    $blood = "";
    $blooderror = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameerror = "Name is Required";
        } else {
            $name = ($_POST["name"]);
            if (!preg_match("/^[A-Za-z][A-Za-z .-]*$/", $name)) {
                $nameerror = "Name must start with a letter";
            } elseif (str_word_count($name) < 2) {
                $nameerror = "Name must contain at least 2 letters";
            }
        }

        if (empty($_POST["email"])) {
            $emailerror = "Email is Required";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailerror = "Invalid email format! (must contain @ and .)";
            }
        }


        if (empty($_POST["dob"])) {
            $doberror = "Date of Birth is Required";
        } else {
            $dob = $_POST["dob"];
        }


        if (empty($_POST["gender"])) {
            $gendererror = "Please Select a Gender";
        } else {
            $gender = $_POST["gender"];
        }

        if (empty($_POST["degree"]) || count($_POST['degree']) < 2) {
            $degreeerror = "Please Select at least two degrees";
        } else {
            $degree = $_POST["degree"];
        }


        if (empty($_POST["blood"])) {
            $blooderror = "Please Select a blood group";
        } else {
            $blood = $_POST["blood"];
        }
    }


    ?>


    <form method="post" action="">
        Name:
        <input type="text" name="name" value="<?php echo $name ?>">
        <?php echo $nameerror ?><br><br>


        <input type="text" name="email" value="<?php echo $email ?>">
        <?php echo $emailerror ?><br><br>

        Date of Birth:
        <input type="date" name="dob" value="<?php echo $dob ?>">
        <?php echo $doberror ?><br><br>

        Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        <?php echo $gendererror ?><br><br>

        Degree:
        <input type="checkbox" name="degree[]" value="SSC">SSC
        <input type="checkbox" name="degree[]" value="HSC">HSC
        <input type="checkbox" name="degree[]" value="BSc">BSc
        <input type="checkbox" name="degree[]" value="MSc">MSc
        <?php echo $degreeerror ?><br><br>

        Blood Group:
        <select name="blood">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <?php echo $blooderror ?><br><br>

        <button type="submit">Submit</button>




    </form>
    <?php

    if (empty($nameerror) && empty($emailerror) && empty($doberror) && empty($gendererror) && empty($degreeerror) && empty($blooderror)) {
        echo "<h3>Your Input:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Date of Birth: " . $dob . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Degree: " . implode(", ", $degree) . "<br>";
        echo "Blood Group: " . $blood . "<br>";
    }

    ?>
</body>

</html>