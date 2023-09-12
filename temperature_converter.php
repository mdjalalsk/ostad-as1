<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        body {
            background-color: aliceblue;
        }
        form {
            width: 800px;
            background-color: aliceblue;
            color: blue;
            padding: 15px;
        }
        input, select {
            padding: 10px;
        }
        input[type='submit'] {
            background-color: blue;
            color: white;
            border-radius: 10px;
            border: none;
        }
        input[type='submit']:hover {
            background: green;
        }
    </style>
</head>
<body>  
    <form method="post" action="">
        <fieldset>
            <legend>Temperature Converter</legend>
            <label for="temperature">Enter Temperature:</label>
            <input type="text" name="temperature" required>
            
            <label for="conversion">Select Conversion:</label>
            <select name="conversion" required>
                <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
            </select>
            <input type="submit" name="convert" value="Convert">
        </fieldset>
    </form>
    
    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if (isset($_POST['convert'])) {
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];
        
        // Validate input (check if it's numeric)
        if (!is_numeric($temperature)) {
            echo "<p>Invalid input. Please enter a numeric temperature.</p>";
        } else {
            if ($conversion === "celsiusToFahrenheit") {
                $result = celsiusToFahrenheit($temperature);
                echo "<p>$temperature Celsius is $result Fahrenheit.</p>";
            } elseif ($conversion === "fahrenheitToCelsius") {
                $result = fahrenheitToCelsius($temperature);
                echo "<p>$temperature Fahrenheit is $result Celsius.</p>";
            }
        }
    }
    ?>
</body>
</html>
