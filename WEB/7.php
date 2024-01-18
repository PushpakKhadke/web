<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        section {
            margin: 50px auto;
        }

        p {
            font-size: 18px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <section>
        <h1>PHP Basics Demo</h1>

        <?php
        // Variables
        $name = "John";
        $age = 25;

        // Echo/Print
        echo "<p>Hello, my name is $name and I am $age years old.</p>";

        // Data Types
        $integerVar = 10;
        $floatVar = 3.14;
        $stringVar = "Hello, PHP!";
        $booleanVar = true;

        echo "<p>Integer: $integerVar</p>";
        echo "<p>Float: $floatVar</p>";
        echo "<p>String: $stringVar</p>";
        echo "<p>Boolean: " . ($booleanVar ? 'true' : 'false') . "</p>";

        // String Functions
        $stringExample = "    PHP is a powerful scripting language.    ";
        echo "<p>Original String: \"$stringExample\"</p>";
        echo "<p>String Length: " . strlen($stringExample) . "</p>";
        echo "<p>Trimmed String: \"" . trim($stringExample) . "\"</p>";
        echo "<p>Uppercase: \"" . strtoupper($stringExample) . "\"</p>";
        echo "<p>Lowercase: \"" . strtolower($stringExample) . "\"</p>";
        echo "<p>Substring: \"" . substr($stringExample, 0, 10) . "...\"</p>";

        // Operators
        $num1 = 10;
        $num2 = 5;

        echo "<p>Sum: " . ($num1 + $num2) . "</p>";
        echo "<p>Subtraction: " . ($num1 - $num2) . "</p>";
        echo "<p>Multiplication: " . ($num1 * $num2) . "</p>";
        echo "<p>Division: " . ($num1 / $num2) . "</p>";
        echo "<p>Modulus: " . ($num1 % $num2) . "</p>";
        ?>
    </section>
</body>

</html>
