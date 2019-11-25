<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form</title>
        <meta charset="utf-8">
        
        <style>
            .error {
                color: red;
            }
        </style>
    </head>

    <body>
        <?php

        $name = $email;

        if ($_SERVER ["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["name"])) {
            echo "<span class=\"error\">Error: Name required*</span>";

            //Validation: name can only include letters and white space
            } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
                echo "<span class=\"error\">Error: Name can only contain letters*</span>"; 

            } elseif (empty($_POST["email"])) {
            echo "<span class=\"error\">Error: Email required*</span>";

            //Validation: website must be in correct format (www.website.com)
            } elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $_POST["email"])) {
                    "<span class=\"error\">Error: email can only be in the correct format*</span>"; 

            } else {

            $name = VAL ($_POST["name"]);
            $email = VAL ($_POST["email"]);
            }
        }

        function val($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>
        <?php
        echo "<hr />";
        echo "<h2>User input:</h2>";
        echo "Name: " . $name;
        echo "<br>";
        echo "Email: " . $email;
        ?>
    </body>
</html>