<?php
$leerlingen = readline("Wie zit er in de klas? \n" );
echo "De leerlingen zijn....\n";
print_r(explode(" ", $leerlingen));
?>