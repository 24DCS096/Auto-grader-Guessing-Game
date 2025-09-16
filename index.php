<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game ba63c271</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <?php
    if (!isset($_GET['guess'])) {
        echo "Missing guess parameter";
    } elseif (strlen($_GET['guess']) < 1) {
        echo "Your guess is too short";
    } elseif (!is_numeric($_GET['guess'])) {
        echo "Your guess is not a number";
    } else {
        $guess = intval($_GET['guess']);
        $correct = 27;
        if ($guess < $correct) {
            echo "Your guess is too low";
        } elseif ($guess > $correct) {
            echo "Your guess is too high";
        } else {
            echo "Congratulations - You are right";
        }
    }
    ?>
</body>
</html>
