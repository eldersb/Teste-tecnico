<?php 
function Fibo($number) {

    $number1 = 0;
    $number2 = 1;
    
    if ($number == $number1 || $number == $number2) {
        return true;
    }

    while ($number2 <= $number) {
        $sequenceNumber = $number1 + $number2;  
        $number1 = $number2;       
        $number2 = $sequenceNumber;      

        if ($number2 == $number) {
            return true;  
        }
    }
    
    return false;
}

function result() {

    $number = 2;  // Exemplo de número, substitua pelo valor desejado

    if (Fibo($number)) {
        echo "$number pertence à sequência de Fibonacci.\n";
    } else {
        echo "$number não pertence à sequência de Fibonacci.\n";
    }
}

result();


?>