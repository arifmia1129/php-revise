<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, php</h1>

    <?php 
    // // I am revising php programming again
    // $food = "Pizza";
    // echo "I love ".$food . '<br>';

    // /* 
    // 1. I love Pizza
    // 2. I love Burger
    // */

    // // Variables
    // $num1 = 10;
    // $num2 = 20;

    // $sum = $num1 + $num2;

    // echo 'The sum of '. $num1 . ' and ' . $num2 . ' is ' . $sum . '<br>';


    // //Echo and Print
    // echo $num1 . '<br>';
    
    // $newNum = print($num1);

    // echo $newNum;

    // '<br>';

    // // Data types

    // $name = 'Ariba';
    // $age = 20;
    // $isMarried = false;
    // $height = 5.5;
    // $gadgets = array('laptop', 'mobile', 'tv');

    // var_dump($gadgets);

    // // Object with Class
    // class Phone {
    //     var $model;

    //     function phoneModel($number) {
    //         global $model;

    //         $model = $number;

    //         echo '<br>'.'The phone model is: '. $model;
    //     }
    // }

    // $apple = new Phone();

    // $apple -> phoneModel('iPhone 11');

    // $samsung = new Phone();

    // $samsung->phoneModel('Samsung Galaxy');

    // //PHP string

    // echo '<br>';
    // echo strlen('Hello World');
    // echo '<br>';
    // echo str_word_count('Hello World');
    // echo '<br>';
    // echo strrev('Hello World');
    // echo '<br>';
    // echo strpos('Hello World', 'W');
    // echo '<br>';
    // echo str_replace('World', 'PHP', 'Hello World');

    //Number operation in PHP

    // echo (pi());
    // echo '<br>';
    // echo (min(50, 12, 1, 2, 40, 5));
    // echo '<br>';
    // echo (max(10, 159, 170, 1));
    // echo '<br>';
    // echo (abs(-16));
    // echo '<br>';
    // echo (sqrt(64));
    // echo ('<br>');
    // echo (round(4.4));
    // echo ('<br>');
    // echo (rand(1, 10));


    // Variable and Constant in PHP
    $x = 10;

    define('y', 20);

    echo y;

    function check() {
        $x = 10;
        echo $x;
    }

    check();

    ?>
</body>
</html>