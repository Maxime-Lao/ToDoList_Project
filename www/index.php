<?php
    include "Calculator.class.php";
    include "User.class.php";
    include "Item.class.php";
    include "ToDo.class.php";

    $user = new User("sfarnault@gmail.com", "FARNAULT", "Simon", "31/01/2010", "Azerty1234");

    $item = new Item("Voiture", "Faire le plein", new DateTime("2023-05-25 15:00:00"));
    $item2 = new Item("Entretient", "Changer le clignotant gauche", new DateTime("2023-05-25 15:30:00"));
    $item3 = new Item("Sport", "Faire mon sport ce soir", new DateTime("2023-05-25 16:00:00"));
    //$item3 = new Item("Course", "Acheter un poulet au marché");

    $user->createToDo();

    $user->addItem($item);
    $user->addItem($item2);
    $user->addItem($item3);
    
    $todo = $user->getToDo();
    echo "<pre>"; 
    var_dump($todo->isValid());
    echo "</pre>"; 
    die;
    /*$calculator = new Calculator();
    if(!empty($_POST)){
        $calc = str_replace(' ', '', $_POST["calculator"]);
        switch ($calc){
            case str_contains($calc, "+"):
                $nbr = explode("+", $calc);
                $a = intval($nbr[0]);
                $b = intval($nbr[1]);
                $result = $calculator->add($a, $b);
                break;
            case str_contains($calc, "-"):
                $nbr = explode("-", $calc);
                $result = $calculator->sub(intval($nbr[0]), intval($nbr[1]));
                break;
            case str_contains($calc, "*"):
                $nbr = explode("*", $calc);
                $result = $calculator->mul(intval($nbr[0]), intval($nbr[1]));
                break;
            case str_contains($calc, "/"):
                $nbr = explode("/", $calc);
                $result = $calculator->div(intval($nbr[0]), intval($nbr[1]));
                break;
            case str_contains($calc, ","):
                $nbr = explode(",", $calc);
                $result = $calculator->avg($nbr);
                break;
            default:
                echo "Une erreur est survenue !";
        }
    }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="calculator">
        <input type="submit" value="send">
    </form>
    <?php 
        echo $calc  . " = " . $result;
    ?>
</body>
</html>