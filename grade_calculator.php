<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        <label for="score1">Test Score 1:</label>
        <input type="text" name="score1" required><br>
        
        <label for="score2">Test Score 2:</label>
        <input type="text" name="score2" required><br>
        
        <label for="score3">Test Score 3:</label>
        <input type="text" name="score3" required><br>
        
        <input type="submit" name="calculate" value="Calculate" >
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];
        $average = ($score1 + $score2 + $score3) / 3; 
        $grade = '';
        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>
</html>
