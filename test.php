<?php
$person = [
    'name' => 'John Doe',
    'age' => 20,
    'gender' => 'male',
    'nationality' => 'Bangladeshi',
    'favorite_fruits' => [
        'apple',
        'jackfruit',
        'mango'
    ]
];

if($person['gender']=='male'){
    $a = 'He';
    $b = 'His';
}else{
    $a ="She";
    $b = 'Her';
}
$fruits = implode(', ',$person['favorite_fruits']);

$str = "{$person['name']} is {$person['age']} years old. {$a} is a {$person['nationality']} citizen. {$b}favorite fruits are:{$fruits}";

echo $str;