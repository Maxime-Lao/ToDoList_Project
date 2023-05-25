<?php
class ToDo{
    private $items;
    public function __construct($items = []){
        $this->items = $items;
    }

    public function addItem($items){
        if(count($this->items) > 10){
            return false;
        }
        array_push($this->items, $items);
        if(count($this->items) == 8){
            //CODE MUTHUS
        }
    }

    public function isValid(){
        foreach($this->items as $key => $val){
            for($i = 0; $i < count($this->items) - 1; $i++){
                $item = $this->items[$i];
                if($item->getName() == $val->getName() && $key != $i){
                    return false;
                }
            }
        }
        
        if(count($this->items) > 10){
            return false;
        }

        for ($i = 0; $i < count($this->items) - 1; $i++) {
            $date1 = $this->items[$i]->getTime();
            $date2 = $this->items[$i + 1]->getTime();
            
            $interval = $date1->diff($date2);
            $minutes = $interval->i;
            
            if ($minutes < 30) {
                return false;
            }
        }

        return true;
    }
}