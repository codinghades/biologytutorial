<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<?php

        $score = null;

        if (($_SERVER["REQUEST_METHOD"] == "POST")){                                                     
            if (isset($_POST['question1']) && $_POST['question1'] == "B") {
                $score++;
            }
            if (isset($_POST['question2']) && $_POST['question2'] == "B") {
                $score++;
            }
            if (isset($_POST['question3']) && $_POST['question3'] == "A") {
                $score++;
            }
            if (isset($_POST['question4']) && $_POST['question4'] == "A") {
                $score++;
            }
            if (isset($_POST['question5']) && $_POST['question5'] == "A") {
                $score++;
            }
            if (isset($_POST['question6']) && $_POST['question6'] == "A") {
                $score++;
            }
            if (isset($_POST['question7']) && $_POST['question7'] == "C") {
                $score++;
            }
            if (isset($_POST['question8']) && $_POST['question8'] == "B") {
                $score++;
            }
            if (isset($_POST['question9']) && $_POST['question9'] == "A") {
                $score++;
            }
            if (isset($_POST['question10']) && $_POST['question10'] == "A") {
                $score++;
            }
        }
    ?>

    <div class="hero-section">
        <div class="nav-menu">
            <div class="left">
                <a href="homepage.html"><h2>BIO<span style="color: rgb(29, 147, 194);">LOGY</span></h2></a>
            </div>

            <div class="right">
                <a class="nav-btn nav-home" href="homepage.html">Home</a>
                <a class="nav-btn nav-anatomy" href="anatomy.html">Anatomy</a>
                <a class="nav-btn nav-bacteria" href="bacteria.html">Bacteria</a>
                <a class="nav-btn nav-genetics" href="genetics.html">Genetics</a>
                <a class="nav-btn nav-quiz" href="#">Quiz</a>
            </div>
        </div>
        <h1 class="title-quiz">QUIZ</h1>
    </div>

    <div class="quizSection">
        <br>
            <!--First-->
        <form method="post" action="quiz.php">
            <div class="student-input">
                    <label><b>Your Score: </b><?=$score?>/10</label>
                    <button type="submit" name="reset" class="reset-button" style="background: none; border: none; cursor: pointer;">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </button>
            </div>

            <div class="quizContainer">
                <p>1. is the study of a specific biological branch in science that deals with structure and identification of organism’s bodies and their different sections. </p>
                    <label><input type="radio" name="question1" value="A"> A. Gross Anatomy</label><br>
                    <label><input type="radio" name="question1" value="B"> B. Anatomy</label><br>
                    <label><input type="radio" name="question1" value="C"> C. Microscopic Anatomy</label><br>
                    <label><input type="radio" name="question1" value="D"> D. Genetics</label>
            </div>

            <!--Second-->
            <div class="quizContainer">
                <p>2. This deals with the study of anatomy that you can see with the naked eve on a macroscopic level </p>
                        <label><input type="radio" name="question2" value="A"> A. Anatomy</label><br>
                        <label><input type="radio" name="question2" value="B"> B. Gross Anatomy</label><br>
                        <label><input type="radio" name="question2" value="C"> C. Microscopic Anatomy</label><br>
                        <label><input type="radio" name="question2" value="D"> D. Genetics</label>
            </div>

            <!--Third-->
            <div class="quizContainer">
                <p>3. is sometimes used interchangeably with histology.</p>
                            <label><input type="radio" name="question3" value="A"> A. Microscopic Anatomy</label><br>
                            <label><input type="radio" name="question3" value="B"> B. Gross Anatomy</label><br>
                            <label><input type="radio" name="question3" value="C"> C. Anatomy</label><br>
                            <label><input type="radio" name="question3" value="D"> D. Genetics</label>
            </div>

            <!--Fourth-->
            <div class="quizContainer">
                <p>4. are defined as organisms that are microscopic, unicellular, independently reproducing, and mostly free-living.</p>
                            <label><input type="radio" name="question4" value="A"> A. Bacteria</label><br>
                            <label><input type="radio" name="question4" value="B"> B. Cocci</label><br>
                            <label><input type="radio" name="question4" value="C"> C. Anatomy</label><br>
                            <label><input type="radio" name="question4" value="D"> D. Genetics</label>
            </div>

            <!--Fifth-->
            <div class="quizContainer">
                <p>5. They need oxygen for survival as they are incpable of respiring anaerobically.</p>
                            <label><input type="radio" name="question5" value="A"> A. Obligate Aerobes</label><br>
                            <label><input type="radio" name="question5" value="B"> B. Obligate Anaerobes</label><br>
                            <label><input type="radio" name="question5" value="C"> C. Cocci</label><br>
                            <label><input type="radio" name="question6" value="D"> D. Coccobacilli</label>
            </div>

            <!--Six-->
            <div class="quizContainer">
                <p>6. Bacteria that are round shaped.</p>
                            <label><input type="radio" name="question6" value="A"> A. Cocci</label><br>
                            <label><input type="radio" name="question6" value="B"> B. Obligate Anaerobes</label><br>
                            <label><input type="radio" name="question6" value="C"> C. Coccobacilli</label><br>
                            <label><input type="radio" name="question6" value="D"> D. Bacilli</label>
            </div>

            <!--Seven-->
            <div class="quizContainer">
                <p>7. Small rod-shaped bacteria that are often mistaken to appear like cocci.</p>
                            <label><input type="radio" name="question7" value="A"> A. Spirochetes</label><br>
                            <label><input type="radio" name="question7" value="B"> B. Bacilli</label><br>
                            <label><input type="radio" name="question7" value="C"> C. Coccobacilli</label><br>
                            <label><input type="radio" name="question7" value="D"> D. Cocci</label>
            </div>

            <!--Eight-->
            <div class="quizContainer">
                <p>8. is the study ot patterns of of specific traits, relating to genes and genetics information</p>
                            <label><input type="radio" name="question8" value="A"> A. Anatomy</label><br>
                            <label><input type="radio" name="question8" value="B"> B. Genetics</label><br>
                            <label><input type="radio" name="question8" value="C"> C. Bacteria</label><br>
                            <label><input type="radio" name="question8" value="D"> D. Coccobacilli</label>
            </div>

            <!--nine-->
            <div class="quizContainer">
                <p>9. They can grow either with or without oxygen.</p>
                            <label><input type="radio" name="question9" value="A"> A. Facultative Anaerobes</label><br>
                            <label><input type="radio" name="question9" value="B"> B. Bacilli</label><br>
                            <label><input type="radio" name="question9" value="C"> C. Cocci</label><br>
                            <label><input type="radio" name="question9" value="D"> D. Coccobacilli</label>
            </div>

            <!--10-->
            <div class="quizContainer">
                <p>10. They do not require oxygen for respiration.</p>
                            <label><input type="radio" name="question10" value="A"> A. Aerotolerant</label><br>
                            <label><input type="radio" name="question10" value="B"> B. Cocci</label><br>
                            <label><input type="radio" name="question10" value="C"> C. Bacilli</label><br>
                            <label><input type="radio" name="question10" value="D"> D. Coccobacilli</label>
            </div>

            <br>
            <input  class="nav-submit" name="submit" type="submit" value="Submit">
            <br>
        </form>
    </div>

    
</body>
</html>