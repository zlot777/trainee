<?php


class mdl_fruits extends CFormModel
{

public $fruitArray = array(

"Acai"=> 7,
"Aceola" => 5,
"Apple" => 5,
"Apricots" => 9,
"Avocado" => 11,
"Banana" => 54,
"Blackberry" => 33,
"Blueberries" => 2,
"Cherries" => 1,
"Coconut"=> 0,
"Gooseberry" => 99,
"Grapefruit" => 44,
"Grapes" => 4,
"Jackfruit" => 7,
"Kiwi" => 29,
"Kumquat" => 45,
"Lemon" => 65,
"Lime" => 32,
"Lucuma" => 23,
"Lychee" => 23,
"Mango" => 6,
"Mangosteen" => 101,
"Melon" => 34,
"Mulberry" => 34,
"Nectarine" => 93,
"Orange" => 10,
"Papaya" => 0,
"Passion_Fruit" => 5,
"Peach" => 4,
"Pear" => 1,
"Pineapple" => 3,
"Plum" => 45,
"Pomegranate" => 6,
"Pomelo" => 5,
"Prunes" => 34,
"Raspberries" => 32,
"Strawberries" => 23,
"Watermelon" => 11,
);

function getNumOfTwoFruits ($firstFruit, $secondFruit,$fruitArray){
    $firstNum = $fruitArray[$firstFruit];
    $secondFruit = $fruitArray[$firstFruit];
    $result = $firstNum." and". $secondFruit;
    return $result;

}

function getPopular($num,$fruitArray ){
    arsort($fruitArray);
    array_splice($fruitArray, $num);
    return $fruitArray;
}
}



