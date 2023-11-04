<!DOCTYPE html>
<html>

<head>
    <title>Pyae Bhone Zaw</title>
</head>

<body>
    <h1>Guess the Secret Number</h1>

    <?php
    if (isset($_GET['guess'])) {
        $secretNumber = 46;
    } else {
        echo "<p>Missing guess parameter.</p>";
    }

    if (isset($_GET['guess'])) {
        $userGuess = intval($_GET['guess']);

        if (!is_numeric($userGuess)) {
            echo "<p>Your guess is not a number.</p>";
        } elseif ($userGuess === $secretNumber) {
            echo "<p>Congratulations - You are right</p>";
        } elseif ($userGuess < $secretNumber) {
            echo "<p>Your guess is too low.</p>";
        } else {
            echo "<p>Your guess is too high.</p>";
        }
    } else {
        echo "<p>Your guess is too short.</p>";
    }

    ?>

</body>

</html>