<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions</title>
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
        <h1>User-defined Functions</h1>

        <?php
        
        $numbers = [12, 45, 67, 23, 89, 10, 34, 56, 78, 91];

        
        function calculateAverage($array) {
            $sum = array_sum($array);
            return $sum / count($array);
        }

        
        function findMax($array) {
            return max($array);
        }

        
        function findMin($array) {
            return min($array);
        }

        
        function calculateSum($array) {
            return array_sum($array);
        }

       
        function countNumbers($array) {
            return count($array);
        }

        
        function calculateRange($array) {
            return findMax($array) - findMin($array);
        }

        
        function sortNumbers($array) {
            sort($array);
            return $array;
        }

       
        function displayNumbers($array) {
            return implode(", ", $array);
        }

        
        function numberExists($array, $number) {
            return in_array($number, $array) ? "Yes" : "No";
        }

        
        function calculateMedian($array) {
            sort($array);
            $count = count($array);
            $middle = floor(($count - 1) / 2);
            if ($count % 2) {
                return $array[$middle];
            } else {
                return ($array[$middle] + $array[$middle + 1]) / 2;
            }
        }

        
        echo "<h2>Numbers: " . displayNumbers($numbers) . "</h2>";
        echo "<h3>Statistics:</h3>";
        echo "Sum: " . calculateSum($numbers) . "<br>";
        echo "Average: " . calculateAverage($numbers) . "<br>";
        echo "Maximum: " . findMax($numbers) . "<br>";
        echo "Minimum: " . findMin($numbers) . "<br>";
        echo "Count: " . countNumbers($numbers) . "<br>";
        echo "Range: " . calculateRange($numbers) . "<br>";
        echo "Median: " . calculateMedian($numbers) . "<br>";

       
        $numberToCheck = 45;
        echo "Does the number $numberToCheck exist? " . numberExists($numbers, $numberToCheck) . "<br>";
        ?>

        <a href="mainpage.php" class="center-link">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
