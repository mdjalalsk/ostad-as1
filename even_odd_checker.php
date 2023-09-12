<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
</head>
<body>
    <h2>Even-Odd Checker</h2>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="text" name="number" required>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $number = $_POST['number'];
        $message = ($number % 2 == 0) ? "The number $number is even." : "The number $number is odd.";
       echo "<h1>$message</h1>";
    
    }