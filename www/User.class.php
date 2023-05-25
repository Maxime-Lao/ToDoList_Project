<?php
class User{
    private $email;
    private $nom;
    private $prenom;
    private $birth;
    private $password;
    private $toDo = null;

    public function __construct($email = null, $nom = null, $prenom = null, $birth = null, $password = null){
        $this->email = $email;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birth = $birth;
        $this->password = $password;
    }

    public function isValid(){
        if($this->prenom == null && $this->nom == null && is_numeric($this->prenom) && is_numeric($this->nom)){
            return false;
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,40}$/', $this->password)) {
            return false;
        }

        $format = 'd/m/Y';
        $date = DateTime::createFromFormat($format, $this->birth);

        if ($date !== false) {
            $aujourdHui = new DateTime();
            $difference = $aujourdHui->diff($date);
            $age = $difference->y;
        }

        if($age < 13){
            return false;
        }

        return true;
    }

    public function createToDo(){
        if(!$this->isValid()){
            return false;
        }
        $this->toDo = new ToDo();
        return true;
    }

    public function addItem($items){
        if(!$this->isValid()){
            return false;
        }
        $this->toDo->addItem($items);
        return true;
    }

    public function getToDo(){
        return $this->toDo;
    }
}