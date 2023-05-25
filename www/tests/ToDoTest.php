<?php
    use PHPUnit\Framework\TestCase; 
    require __DIR__ . '/../vendor/autoload.php';
    include __DIR__ . "/../ToDo.class.php";
    include __DIR__ . "/../Item.class.php";

    class ToDoTest extends TestCase
    {
        public function testValidToDo()
        {
            $list = [
                new Item("Course", "Faire les courses ce samedi", new DateTime("2023-05-25 10:00:00")),
                new Item("Voiture", "Changer le clignotant gauche", new DateTime("2023-05-25 10:30:00")),
                new Item("Sport", "Faire mon sport ce soir", new DateTime("2023-05-25 11:00:00")),
                new Item("Manger", "Ne pas oublier de manger", new DateTime("2023-05-25 11:30:00")),
                new Item("FYC", "Faire mon fyc", new DateTime("2023-05-25 12:00:00")),
                new Item("Dormir", "Se coucher à 23h", new DateTime("2023-05-25 12:30:00")),
                new Item("Ménage", "Faire le ménage dans ma chambre", new DateTime("2023-05-25 13:00:00")),
                new Item("Se laver", "Douche + dents", new DateTime("2023-05-25 13:30:00")),
                new Item("Abonnement", "Renouveler mon abonnement Kidizoom", new DateTime("2023-05-25 14:00:00")),
                new Item("Boire", "Boire un litre d'eau", new DateTime("2023-05-25 14:30:00"))
            ];
            $todo = new ToDo($list);
            $this->assertTrue($todo->isValid());
        }
        public function testMultipleName()
        {
            $list = [
                new Item("Voiture", "Faire le plein", new DateTime("2023-05-25 15:00:00")),
                new Item("Voiture", "Changer le clignotant gauche", new DateTime("2023-05-25 15:30:00")),
                new Item("Sport", "Faire mon sport ce soir", new DateTime("2023-05-25 16:00:00")),
                new Item("Manger", "Ne pas oublier de manger", new DateTime("2023-05-25 16:30:00")),
                new Item("FYC", "Faire mon fyc", new DateTime("2023-05-25 17:00:00")),
                new Item("Dormir", "Se coucher à 23h", new DateTime("2023-05-25 17:30:00"))
            ];
            $todo = new ToDo($list);
            $this->assertFalse($todo->isValid());
        }

        public function testTooMuchItems()
        {
            $list = [
                new Item("Course", "Faire les courses ce samedi", new DateTime("2023-05-25 10:00:00")),
                new Item("Voiture", "Changer le clignotant gauche", new DateTime("2023-05-25 10:30:00")),
                new Item("Sport", "Faire mon sport ce soir", new DateTime("2023-05-25 11:00:00")),
                new Item("Manger", "Ne pas oublier de manger", new DateTime("2023-05-25 11:30:00")),
                new Item("FYC", "Faire mon fyc", new DateTime("2023-05-25 12:00:00")),
                new Item("Dormir", "Se coucher à 23h", new DateTime("2023-05-25 12:30:00")),
                new Item("Ménage", "Faire le ménage dans ma chambre", new DateTime("2023-05-25 13:00:00")),
                new Item("Se laver", "Douche + dents", new DateTime("2023-05-25 13:30:00")),
                new Item("Abonnement", "Renouveler mon abonnement Kidizoom", new DateTime("2023-05-25 14:00:00")),
                new Item("Boire", "Boire un litre d'eau", new DateTime("2023-05-25 14:30:00")),
                new Item("Nager", "Faire 10 longueurs", new DateTime("2023-05-25 15:00:00")),
                new Item("Jouer", "Jouer à mes jeux", new DateTime("2023-05-25 15:30:00"))
            ];
            $todo = new ToDo($list);
            $this->assertFalse($todo->isValid());
        }

        public function testWrongDelay(){
            $list = [
                new Item("Voiture", "Faire le plein", new DateTime("2023-05-25 15:00:00")),
                new Item("Voiture", "Changer le clignotant gauche", new DateTime("2023-05-25 15:30:00")),
                new Item("Sport", "Faire mon sport ce soir", new DateTime("2023-05-25 16:00:00")),
                new Item("Manger", "Ne pas oublier de manger", new DateTime("2023-05-25 16:30:00")),
                new Item("FYC", "Faire mon fyc", new DateTime("2023-05-25 17:00:00")),
                new Item("Dormir", "Se coucher à 23h", new DateTime("2023-05-25 17:06:00"))
            ];
            $todo = new ToDo($list);
            $this->assertFalse($todo->isValid());
        }
    }
