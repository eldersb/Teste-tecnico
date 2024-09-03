<?php 

$filterA = "Jaca";

$filterStringA = strtolower($filterA);

$count = substr_count($filterStringA, 'a');

if($count == 0) {
    echo "A variável '$filterA' não contem a letra 'a'";
} else {
    echo "A variável '$filterA'  contem a letra 'a' e ela se repete $count vezes.";

}


?>