<?php

var_dump(PHP_INT_MAX); // annab max numbriline intergeri value PHP's
for($i=0; $i<10; $i++){
    var_dump($i);
}

for($i=10; $i>0; $i--){
    var_dump($i);
}

for($i=1; $i<1_000_000; $i*=2){
    var_dump($i);
}

$current = (int) date("s");

$i = 10;

while($i<10){
    var_dump('While');
}

do {
    var_dump('Do While');
}   while($i<10);

$array = ['apples', 'pears', 'oranges'];

foreach($array as $value):
    echo $value . " ";
endforeach;


foreach($array as $key => $value) {
    var_dump($key, $value);
}