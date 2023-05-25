<?php
    class Calculator{
        
        public function add(int $a, int $b): ?int{
            return $a + $b;
        }

        public function sub(int $a, int $b): ?int{
            return $a - $b;
        }

        public function mul(int $a, int $b): ?int{
            return $a * $b;
        }

        public function div(int $a, int $b): ?int{
            if($b === 0) return null;
            return $a / $b;
        }

        public function avg(array $a): ?int{
            $sum = 0;
            foreach($a as $val){
                $sum += $val;
            }
            return $sum;
        }
    }