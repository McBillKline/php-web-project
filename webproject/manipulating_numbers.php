<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
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
        <h1>Manipulating Numbers</h1>

        <?php
       
        $quizzes = [80, 85, 90]; 
        $projects = [75]; 
        $midtermExam = 88; 

        
        $averageQuizzes = array_sum($quizzes) / count($quizzes);
        $averageProjects = array_sum($projects) / count($projects);

        
        $grade = ($averageQuizzes * 0.30) + ($averageProjects * 0.20) + ($midtermExam * 0.50);
        
        
        $tentativeFinalExam = 90; 
        $finalGrade = ($grade + $tentativeFinalExam) / 2; 

        
        echo "<h2>Results:</h2>";
        echo "Average Quizzes: " . number_format($averageQuizzes, 2) . "<br>";
        echo "Average Projects: " . number_format($averageProjects, 2) . "<br>";
        echo "Midterm Exam Score: " . $midtermExam . "<br>";
        echo "Computed Grade: " . number_format($grade, 2) . "<br>";
        echo "Tentative Final Exam Score: " . $tentativeFinalExam . "<br>";
        echo "Final-Final Grade: " . number_format($finalGrade, 2) . "<br>";
        ?>

       
        <a href="mainpage.php" class="center-link">Back to Main Page</a>

        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
