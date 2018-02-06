<pre>
<?php

//строка
$string= '5.6';
var_dump((float)$string);


//число
$intergen="some text";
var_dump((bool)$intergen);

//Число с плавающей точкой
$float = 16.5;
var_dump($float);
//Булевое значение
$bool=true;
var_dump((float)$bool);

//Булевое значение
$null=null;
var_dump((bool)$null);


//Массив
$array = [
    'red',
    'green',
    'blue',
    'yellow',
    'new_color' =>[
    'black',
    'orange',
        ]
];

$array['new_color']=[
    'balck',

];
var_dump($array);

$rate1 = [
    'rate'=> 5,
    'teacher' => 'Ivanova 1',
];

$rate2 = [
    'rate'=> 4,
    'teacher' => 'Ivanova 2',
];





// Ассоциативный массив
$user = [
    'name' => 'Vasay',
    'age'=> 18,
    'grow'=> 175.16,
    'is_smoking'=> false,
    'rate'=>[
        [
            'rate'=> 3,
            'teacher'=> 'Ivanova'
        $rate2
    ],

];




$user['lastname'] = 'Ivanov';

var_dump($user);

var_dump($user['rate'])

?>
</pre>