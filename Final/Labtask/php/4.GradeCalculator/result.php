<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <title>All Student Results</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        .clear-btn { color: red; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
    </nav>

    <h2>All Student Grade Records</h2>

    <?php if (isset($_SESSION["student_results"]) && count($_SESSION["student_results"]) > 0): ?>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Total Marks</th>
                <th>Average</th>
                <th>Grade</th>
            </tr>
            <?php foreach ($_SESSION["student_results"] as $res): ?>
                <tr>
                    <td><?php echo $res["name"]; ?></td>
                    <td><?php echo $res["total"]; ?></td>
                    <td><?php echo $res["average"]; ?></td>
                    <td><?php echo $res["grade"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>
</body>
</html>