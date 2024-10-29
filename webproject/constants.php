<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
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
        <h1>Using Constants</h1>

        <?php
        
        define("PI", 3.14159);
        define("EULER", 2.71828);
        define("SPEED_OF_LIGHT", 299792458); 
        define("GRAVITY", 9.81); 
        define("PLANCKS_CONSTANT", 6.62607015E-34); 
        define("AVOGADROS_NUMBER", 6.02214076E+23); 
        define("GAS_CONSTANT", 8.314); 
        define("BOLTZMANN_CONSTANT", 1.380649E-23); 
        define("RADIUS_EARTH", 6371000); 
        define("FARADAY_CONSTANT", 96485.33212); 

        
        echo "<h2>Scientific Constants:</h2>";
        echo "PI: " . PI . "<br>";
        echo "Euler's Number (E): " . EULER . "<br>";
        echo "Speed of Light: " . SPEED_OF_LIGHT . " m/s<br>";
        echo "Gravity: " . GRAVITY . " m/s²<br>";
        echo "Planck's Constant: " . PLANCKS_CONSTANT . " J·s<br>";
        echo "Avogadro's Number: " . AVOGADROS_NUMBER . " particles/mol<br>";
        echo "Gas Constant: " . GAS_CONSTANT . " J/(mol·K)<br>";
        echo "Boltzmann Constant: " . BOLTZMANN_CONSTANT . " J/K<br>";
        echo "Radius of Earth: " . RADIUS_EARTH . " meters<br>";
        echo "Faraday's Constant: " . FARADAY_CONSTANT . " C/mol<br>";

        
        echo "<h2>Examples of Using Constants:</h2>";
        echo "Circumference of a circle with radius 5: " . (2 * PI * 5) . "<br>";
        echo "Energy of a photon with frequency 500 THz: " . (PLANCKS_CONSTANT * 500E12) . " J<br>";
        echo "Weight of an object of mass 10 kg on Earth: " . (10 * GRAVITY) . " N<br>";
        echo "Number of molecules in 1 mole of substance: " . AVOGADROS_NUMBER . " molecules<br>";
        ?>

        <a href="mainpage.php" class="center-link">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
