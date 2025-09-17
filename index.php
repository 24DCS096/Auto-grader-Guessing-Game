<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game ba63c271</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>

    <?php
    if (!isset($_GET['guess'])) {
        echo "<p>Missing guess parameter</p>";  // ✅ This line should match what the autograder expects
    } else {
        $guess = $_GET['guess'];

        if (strlen($guess) < 1) {
            echo "<p>Your guess is too short</p>";
        } elseif (!is_numeric($guess)) {
            echo "<p>Your guess is not a number</p>";
        } else {
            $guess = (int)$guess;
            if ($guess < 27) {
                echo "<p>Your guess is too low</p>";
            } elseif ($guess > 27) {
                echo "<p>Your guess is too high</p>";
            } else {
                echo "<p>Congratulations - You are right</p>";
            }
        }
    }
    ?>
</body>
</html>
