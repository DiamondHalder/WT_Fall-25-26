<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
        <style>
            body { font-family: sans-serif; margin: 50px; }
            .error { color: red; font-weight: bold; }
            form { border: 1px solid #ccc; padding: 20px; width: 400px; border-radius: 5px; }
            .result-box { margin-top: 20px; padding: 10px; background-color: #f0f0f0; border: 1px solid #ddd; width: 380px; }
        </style>
    </head>
    <body>

        <?php
        $num1 = ""; 
        $num2 = "";
        $operation = "";
        $error = "";
        $result = "";

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $num1 = $_POST["num1"]; 
            $num2 = $_POST["num2"]; 
            $operation = $_POST["operation"]; 

           
            if ($num1 === "" || $num2 === "") { 
                $error = "Please enter both numbers."; 
            } elseif (!is_numeric($num1) || !is_numeric($num2)) { 
                $error = "Input values must be numeric."; 
            } else {
               
                if ($operation == "add") { 
                    $result = $num1 + $num2;
                    //clear inputs after calculation
                $num1 = $num2 = $operation = "";
                } elseif ($operation == "subtract") { 
                    $result = $num1 - $num2;
                    //clear inputs after calculation
                $num1 = $num2 = $operation = "";
                } elseif ($operation == "multiply") { 
                    $result = $num1 * $num2;
                    //clear inputs after calculation
                $num1 = $num2 = $operation = "";
                } elseif ($operation == "divide") { 
                    if ($num2 == 0) { 
                        $error = "Cannot divide by zero!"; 
                    } else {
                        $result = $num1 / $num2;
                        //clear inputs after calculation
                $num1 = $num2 = $operation = "";
                    }
                }
            }
        }
        ?>

        <h2>Simple Calculator</h2>

        <form method="post" action="">
            Number 1: <br>
            <input type="text" name="num1" value="<?php echo $num1; ?>"><br><br> 

            Number 2: <br>
            <input type="text" name="num2" value="<?php echo $num2; ?>"><br><br> 

            Select Operation: <br>
            <select name="operation"> 
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (x)</option>
                <option value="divide">Division (÷)</option>
            </select><br><br>

            <button type="submit" name="submit">Calculate</button> 
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?> 
            <div class="display-area">
                <?php
                
                if($error != "") { 
                    echo "<p class='error'>" . $error . "</p>";
                }

              
                if ($result !== "" && $error == "") { 
                    echo "<div class='result-box'>";
                    echo "<strong>Result:</strong> " . $result;
                    echo "</div>";
                }
                
                ?>
            </div>
        <?php endif; ?>

    </body>
</html>