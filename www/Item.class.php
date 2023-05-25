<?php
class Item {
    private $name;
    private $content;
    private $creationDate;

    public function __construct($name, $content, $creationDate = new DateTime()) {
        $this->name = $name;
        $this->content = $content;
        $this->creationDate = $creationDate;
    }

    public function isValid(){
        if(strlen($this->content) > 1000){
            return false;
        }

        return true;
    }

    public function getName(){
        return $this->name;
    }

    public function getTime(){
        return $this->creationDate;
    }
}