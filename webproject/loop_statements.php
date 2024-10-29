<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        .center-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Loop Statements</h1>

        <?php
        
        $n = 5; 
        $m = 8; 

       
        echo "<h2>Multiplication Table of $n:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n * $i) . "<br>";
        }

        
        echo "<h2>Fibonacci Series of $n:</h2>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $n) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }
        echo "<br>";

        
        echo "<h2>Fibonacci Series of $m:</h2>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $m) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }
        echo "<br>";

        
        $factorial = 1;
        $i = 1;
        do {
            $factorial *= $i;
            $i++;
        } while ($i <= $n);

        $sum = 0;
        $j = 1;
        do {
            $sum += $j;
            $j++;
        } while ($j <= $m);

        echo "<h2>Factorial of $n: $factorial</h2>";
        echo "<h2>Summation of $m: $sum</h2>";
        ?>

        <a href="mainpage.php" class="center-link">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
