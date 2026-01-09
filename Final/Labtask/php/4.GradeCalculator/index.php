<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        form { border: 1px solid #ccc; background:beige; padding: 20px; width: 400px; border-radius: 5px; }
        nav { margin-bottom: 20px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Home</a> | <a href="result.php">View All Results</a>
    </nav>

    <h2>Student Grade Calculator</h2>
    <form method="post" action="calculate.php">
        Student Name: <br>
        <input type="text" name="name" required><br><br>

        Subject 1 Marks: <br>
        <input type="number" name="m1" min="0" max="100" required><br><br>

        Subject 2 Marks: <br>
        <input type="number" name="m2" min="0" max="100" required><br><br>

        Subject 3 Marks: <br>
        <input type="number" name="m3" min="0" max="100" required><br><br>

        Subject 4 Marks: <br>
        <input type="number" name="m4" min="0" max="100" required><br><br>

        Subject 5 Marks: <br>
        <input type="number" name="m5" min="0" max="100" required><br><br>

        <button type="submit" name="submit">Calculate Grade</button>
    </form>
</body>
</html>