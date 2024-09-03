<?php 

$sequenceA = [1, 3, 5, 7]; // Sequência de 2 em 2
$sequenceB = [2, 4, 8, 16, 32, 64]; // Sequência de potência de 2
$sequenceC = [0, 1, 4, 9, 16, 25, 36]; // Sequência de quadrados perfeitos
$sequenceD = [4, 16, 36, 64]; // Sequência de quadrado de números pares 
$sequenceE = [1, 1, 2, 3, 5, 8]; // Sequencia baseada na soma de dois elementos anteriores
$sequenceF = [2,10, 12, 16, 17, 18, 19]; //  Sequência baseada em números que começam com a letra D

function nextNumber($sequence) {
    $number = end($sequence);
    return $number + 2;
}

function nextNumberPower($sequence) {
    $number = end($sequence);
    return $number * 2;
}

function nextNumberPerfect($sequence) {
    $number = end($sequence);
    $sqrtNumber = sqrt($number);
    return ($sqrtNumber + 1) ** 2;
}

function nextEvenSquare($sequence) {
    $number = end($sequence);
    $sqrtNumber = sqrt($number);
    return ($sqrtNumber + 2) ** 2;
}

function nextFibo($sequence) {
    $count = count($sequence);
    return $sequence[$count - 1] + $sequence[$count - 2];
}


$nextA = nextNumber($sequenceA);
$nextB = nextNumberPower($sequenceB);
$nextC = nextNumberPerfect($sequenceC);
$nextD = nextEvenSquare($sequenceD);
$nextE = nextFibo($sequenceE);
$nextF = 200;

echo "Próximo número na sequência A: $nextA\n";
echo "Próximo número na sequência B: $nextB\n";
echo "Próximo número na sequência C: $nextC\n";
echo "Próximo número na sequência D: $nextD\n";
echo "Próximo número na sequência E: $nextE\n";
echo "Próximo numero na sequência F: $nextF"; 

?>