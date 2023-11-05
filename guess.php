<!DOCTYPE html>
<html>

<head>
    <title>Pyae Bhone Zaw c6a00a82</title>
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
        $userGuess = ($_GET['guess']);

        if (empty($userGuess)) {
            echo "<p>Your guess is too short.</p>";
        } elseif (!is_numeric($userGuess)) {
            echo "<p>Your guess is not a number.</p>";
        } elseif (intval($userGuess) === $secretNumber) {
            echo "<p>Congratulations - You are right</p>";
        } elseif (intval($userGuess) < $secretNumber) {
            echo "<p>Your guess is too low.</p>";
        } else {
            echo "<p>Your guess is too high.</p>";
        }
    }

    ?>

</body>

</html>