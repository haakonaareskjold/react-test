<!DOCTYPE html>
<html>
    <body>
        <?php
        //GLOBALS
        $x = 30;
        $y = 40;

        function add() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['x'];
        }

        add();

        //SUPERGLOBALS
        echo "<br>";
        
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        ?>
    </body>
</html>