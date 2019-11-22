<!DOCTYPE HTML>
<html>
    <head>
        <title>Introduction to OOP</title>
    </head>
    <body>
        <h6>
        <?php
        
            // Creating class
            class person {
                // Class properties - (variables tied to object)
                public $firstname;
                public $lastname;
                public $age;

                // Assigning values to the property variables (a public function construct)
                public function __construct ($firstname, $lastname, $age) {
                    $this-> firstname = $firstname;
                    $this-> lastname = $lastname;
                    $this-> age = $age;
                }

                // Create a method (function tied to an object)
                public function hello() {
                    return "I am " . $this-> firstname . " " . $this-> lastname . "." . " My age is: " . $this-> age . ".";
                }
            }

            // template to create person. Vars are fname, lname and age.
            // These would usually derive from a database
            $person1 = new person ("john", "Smith", 30);
            $person2 = new person ("Haakon", "Aareskjold", 25);

            //prints out what the hello method returns
            echo $person1->hello();
            echo "<br>";
            echo $person2->hello();
        
        ?>
        </h6>
    </body>
</html>