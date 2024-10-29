<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
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
        <h1>Single-dimensional Array</h1>

        <?php
        
        $names = ["Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Heidi", "Ivan", "Judy"];
        $ages = [25, 30, 35, 28, 22, 40, 31, 29, 27, 33];
        $sexes = ["Female", "Male", "Male", "Male", "Female", "Male", "Female", "Female", "Male", "Female"];
        $nationalities = ["American", "British", "Canadian", "Australian", "Indian", "German", "French", "Italian", "Spanish", "Japanese"];

        
        function displayPeople($names, $ages, $sexes, $nationalities) {
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            for ($i = 0; $i < count($names); $i++) {
                echo "<tr>";
                echo "<td>{$names[$i]}</td>";
                echo "<td>{$ages[$i]}</td>";
                echo "<td>{$sexes[$i]}</td>";
                echo "<td>{$nationalities[$i]}</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        
        function sortArrays(&$names, &$ages, &$sexes, &$nationalities) {
            $length = count($names);
            for ($i = 0; $i < $length; $i++) {
                for ($j = 0; $j < $length - 1 - $i; $j++) {
                    if (strcmp($names[$j], $names[$j + 1]) > 0) {
                        
                        $tempName = $names[$j];
                        $names[$j] = $names[$j + 1];
                        $names[$j + 1] = $tempName;

                        
                        $tempAge = $ages[$j];
                        $ages[$j] = $ages[$j + 1];
                        $ages[$j + 1] = $tempAge;

                        
                        $tempSex = $sexes[$j];
                        $sexes[$j] = $sexes[$j + 1];
                        $sexes[$j + 1] = $tempSex;

                        
                        $tempNationality = $nationalities[$j];
                        $nationalities[$j] = $nationalities[$j + 1];
                        $nationalities[$j + 1] = $tempNationality;
                    }
                }
            }
        }

        
        echo "<h2>Unsorted List:</h2>";
        displayPeople($names, $ages, $sexes, $nationalities);

        
        sortArrays($names, $ages, $sexes, $nationalities);

        
        echo "<h2>Sorted List (by Name):</h2>";
        displayPeople($names, $ages, $sexes, $nationalities);
        ?>

        <a href="mainpage.php" class="center-link">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
