<?php
    use PHPUnit\Framework\TestCase; 
    require __DIR__ . '/../vendor/autoload.php';
    //include __DIR__ . "/../Item.class.php";

    class ItemTest extends TestCase
    {
        public function testValidItem()
        {
            $item = new Item("Course", "Faire les courses ce samedi");
            $this->assertTrue($item->isValid());
        }
        public function testInvalidContent()
        {
            $item = new Item("Course", "
                Samedi prochain, tu te prépares pour une expérience de shopping agréable et organisée. Dès le matin, tu élabores une liste détaillée des courses à faire, en prenant en compte les besoins de ta famille et tes propres envies. Cette liste te servira de guide pendant ta journée de courses.

                Pour optimiser ton temps, tu décides de commencer par les courses les plus importantes. Tu te rendras d'abord au supermarché local pour acheter les produits de base tels que les fruits, légumes, viandes, et produits laitiers. Tu prévois de parcourir chaque rayon méthodiquement, en veillant à bien comparer les prix et à choisir les articles de bonne qualité.

                Après avoir terminé tes achats alimentaires, tu te diriges vers le magasin de vêtements pour renouveler ta garde-robe. Tu as repéré quelques articles intéressants dans les publicités de la semaine, et tu as hâte de les essayer. Tu prends le temps de trouver les bonnes tailles et de chercher des promotions éventuelles, afin de réaliser de bonnes affaires.

                Ensuite, tu fais un saut à la librairie pour acheter les derniers romans à succès que tu as repérés. La lecture est une de tes passions, et tu es toujours à la recherche de nouvelles découvertes littéraires. Tu te laisses guider par les recommandations des libraires et les critiques de livres pour faire tes choix.
            ");
            $this->assertFalse($item->isValid());
        }
    }
