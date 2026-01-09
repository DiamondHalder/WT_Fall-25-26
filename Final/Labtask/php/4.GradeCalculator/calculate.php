<?php
session_start();

$name = "";
$total = 0;
$average = 0;
$grade = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $m1 = $_POST["m1"];
    $m2 = $_POST["m2"];
    $m3 = $_POST["m3"];
    $m4 = $_POST["m4"];
    $m5 = $_POST["m5"];

    // Validation: Check all fields filled and marks between 0-100 
    if (empty($name) || $m1 === "" || $m2 === "" || $m3 === "" || $m4 === "" || $m5 === "") {
        $error = "All fields are required.";
    } elseif ($m1 < 0 || $m1 > 100 || $m2 < 0 || $m2 > 100 || $m3 < 0 || $m3 > 100 || $m4 < 0 || $m4 > 100 || $m5 < 0 || $m5 > 100) {
        $error = "Marks must be between 0 and 100.";
    } else {
        // Calculate total and average 
        $total = $m1 + $m2 + $m3 + $m4 + $m5;
        $average = $total / 5;

        // Determine grade 
        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        // Store in session 
        $student_data = [
            "name" => htmlspecialchars($name),
            "total" => $total,
            "average" => $average,
            "grade" => $grade
        ];
        $_SESSION["student_results"][] = $student_data;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculation Result</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 30px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th,
        td {
            border: 5px solid #55fabbff;
            padding: 10px;
            text-align: left;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php">Back to Form</a> | <a href="result.php">View All Results</a>
    </nav>

    <h2>Calculation Result</h2>

    <?php if ($error != ""): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php elseif ($name != ""): ?>
        <table>
            <tr>
                <th>Name</th>
                <td><?php echo htmlspecialchars($name); ?></td>
            </tr>
            <tr>
                <th>Total Marks</th>
                <td><?php echo $total; ?></td>
            </tr>
            <tr>
                <th>Average Marks</th>
                <td><?php echo $average; ?></td>
            </tr>
            <tr>
                <th>Grade</th>
                <td><strong><?php echo $grade; ?></strong></td>
            </tr>
        </table>
    <?php endif; ?>
</body>

</html>