<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        #main{
            background-color: gainsboro;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            text-align: justify;
        }
        label{
            width: 300px;
            display: block;
        }
        select{
            margin-top: 8px ;
            padding: 5px;
        }
        input[type="submit"]{
            margin-top: 10px;
            background-color: blue;
            padding:8px 20px ;
            font-size: 20px;
            border-radius: 15px;
            border: none;
            color: wheat;
        }
    </style>
</head>
<body>
    <div id='main'>
    <h2>Simple Calculator</h2> 
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="text" name="num1" required><br>
        <label for="num2">Enter second number:</label>
        <input type="text" name="num2" required><br>
        <label for="operation">Select operation:</label>
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br>
        
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['calculate'])) {
        // Get user inputs
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Initialize the result variable
        $result = 0;

        // Perform the selected operation using if-else conditions
        if ($operation == "add") {
            $result = $num1 + $num2;
            $operationSymbol = "+";
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
            $operationSymbol = "-";
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
            $operationSymbol = "*";
        } elseif ($operation == "divide") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $operationSymbol = "/";
            } else {
                $result = "Cannot divide by zero";
            }
        } else {
            $result = "Invalid operation";
            $operationSymbol = "";
        }

        // Display the result
        echo "<p>Result: $num1 $operationSymbol $num2 = $result</p>";
    }
    ?>
    </div>
</body>
</html>
