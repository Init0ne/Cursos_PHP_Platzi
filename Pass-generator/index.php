<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Pass Generator</title>
    </head>

    <body>
        <h1>Pass generator</h1>
        <form action="pass_generator.php" method="post">
            <label for="length">Password length: </label>
            <input type="number" name="length" id="length" min="1" require>
            <br>
            <input type="checkbox" id="letters" name="letters" checked>
            <label for="">Letters</label>
            <br>
            <input type="checkbox" id="numbers" name="numbers" checked>
            <label for="">Numbers</label>
            <br>
            <input type="checkbox" id="symbols" name="symbols" checked>
            <label for="">Symbols</label>
            <br>
            <button type="submit">Generate Password</button>
        </form>

        <?php

        if (isset($_GET['password'])) {
            echo "<h2>Password generated: </h2>";
            echo "<p>{$_GET['password']}</p>";
        }

        ?>
    </body>
</html>