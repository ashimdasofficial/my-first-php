<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
        $firstName = "Ashim";
        $lastName  = "Kumar Das";
        echo $firstName ." ". $lastName;
        echo "<br>";
   ?> 


   <?php 
   
    $message = "You got a confirmation message for our company .<br>";
    echo strlen($message);

    echo "<br>";

   ?>

    <?php
    echo substr("PHP is powerful",5);
    
    echo "<br>";
    ?>

    <?php
        echo strtoupper("hello ashim das.");
    ?> 

</body>
</html>