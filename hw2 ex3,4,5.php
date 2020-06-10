<?php
    function calc($a,$b,$operation){
        $operation = strtolower($operation);
        switch($operation){
            case ('умножить' or 'умножение'):
                $result = $a *$b;
                break;
            case ('делить' or 'деление'):
                $result = $a / $b;
                 break;
            case ('cложить' or 'сложение'):
                $result = $a + $b;
                break;
            case ('вычесть' or 'вычитание'):
                $result = $a - $b;
               break;
        }
        return $result;
    }
   echo calc(4, 5,'Умножить');
   date('o');
?>