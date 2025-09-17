<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game - ba63c271</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <form method="get">
        <p><label for="guess">Enter your guess:</label>
        <input type="text" name="guess" id="guess"></p>
        <input type="submit">
    </form>

    <?php
        $correct = 27;
        if (!isset($_GET['guess'])) {
            echo "<p>Please enter a guess.</p>";
        } else if (strlen($_GET['guess']) < 1) {
            echo "<p>Your guess is too short.</p>";
        } else if (!is_numeric($_GET['guess'])) {
            echo "<p>Your guess is not a number.</p>";
        } else {
            $guess = $_GET['guess'] + 0;
            if ($guess < $correct) {
                echo "<p>Your guess is too low.</p>";
            } else if ($guess > $correct) {
                echo "<p>Your guess is too high.</p>";
            } else {
                echo "<p>Congratulations - You are correct.</p>";
            }
        }
    ?>
</body>
</html>
