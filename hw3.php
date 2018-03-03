<?php

$continentsAnimals =  [
  'Africa'=>['African elephant','Gorilla'],
  'Antarctica'=>['Penguins','Blue whales'],
  'Asia'=>['Camelus bactrianus','Tiger'],
  'Australia'=>['Dingo','Koala'],
  'Europe'=>['Lynx','Brown Bear'],
  'North America'=>['Mountain lion','Racoon'],
  'South America'=>['Lama','Jaguar']
];

// foreach ($continentsAnimals as $continentsName => $animals) {
//   foreach ($animals as $animal) {
//     echo "<h2>$continentsName</h2>" . $animal . ', ' . PHP_EOL;
//     }
// };

$doubleNamesAnimals = [];
 foreach ($continentsAnimals as $continentsName => $animals) {
   foreach ($animals as $animal) {
     $Newanimal = explode(' ', $animal);
     if (count($Newanimal) == 2) {
          $doubleNamesAnimals[$continentsName] = "<h2>$continentsName</h2>" . $animal;
     }
  }
}

// echo '<pre>';
// print_r($doubleNamesAnimals);

$firstWords = $secondWords = [];

foreach($doubleNamesAnimals as $mixanimal)
    list($firstWords[], $secondWords[]) = explode(' ', $mixanimal);

shuffle($secondWords);

foreach($secondWords as $continentsName=>$secondWord)
    echo "{$firstWords[$continentsName]} {$secondWord}" . ', ' .PHP_EOL;
?>