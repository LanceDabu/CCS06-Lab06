<!DOCTYPE html>
<html>

<head>
    <title>Profile Form</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $complete_name = $_POST['complete_name'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $program = $_POST['program'];
        $favorite_color = $_POST['favorite_color'];
        $superpower_level = $_POST['superpower_level'];

        echo "<h2>Profile Information:</h2>";
        echo "<p><strong>Name:</strong> $complete_name</p>";
        echo "<p><strong>Birthdate:</strong> $birthdate</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Program:</strong> $program</p>";
        echo "<p><strong>Favorite Color:</strong> $favorite_color</p>";
        echo "<p><strong>Superpower Level:</strong> $superpower_level</p>";
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="complete_name">Complete Name:</label>
        <input type="text" id="complete_name" name="complete_name" required><br><br>

        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="program">Program:</label>
        <select id="program" name="program" required>
            <option value="">Select program</option>
            <option value="BSCS">BSCS</option>
            <option value="BSIT">BSIT</option>
        </select><br><br>

        <label for="favorite_color">Favorite Color:</label>
        <input type="color" id="favorite_color" name="favorite_color" required><br><br>

        <label for="superpower_level">Superpower Level:</label>
        <input type="range" id="superpower_level" name="superpower_level" min="1" max="100" required><br><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>