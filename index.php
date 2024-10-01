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
    // $x = 10;

    // define('y', 20);

    // echo y;

    // function check() {
    //     $x = 10;
    //     echo $x;
    // }

    // check();

    //Arithmetic operation in PHP

    // $num1 = 10;
    // $num2 = 20;

    // $sum = $num1 + $num2;
    // $sub = $num1 - $num2;
    // $mul = $num1 * $num2;
    // $div = $num1 / $num2;
    // $mod = $num1 % $num2;
    // $exp = $num1 ** $num2;

    // echo 'Sum: '. $sum .'<br>' . 'Sub: '. $sub .'<br>' . 'Mul: '. $mul .'<br>' . 'Div: '. $div .'<br>' . 'Mod: '. $mod .'<br>' . 'Exp: '. $exp .'<br>' 

    // Assignment operator in PHP

    // $x = 10;
    // $y = 20;

    // $z = $x + $y;

    // $x += $y;

    // var_dump($x === $y);


    // if else statement in PHP

    // $marks = 32;

    // if($marks >= 80) {
    //     echo 'Passed with A+';
    // }elseif($marks >= 70) {
    //     echo 'Passed with A';
    // }elseif($marks >= 60){
    //     echo 'Passed with A-';
    // }elseif($marks >= 50) {
    //     echo 'Passed with B';
    // }elseif($marks >= 33) {
    //     echo 'Passed with C';
    // }else {
    //     echo 'Failed with F';
    // }


    // switch statement in PHP

    // $gender = 'male';

    // switch($gender) {
    //     case 'male':
    //         echo 'Hello Mr.';
    //         break;
    //     case 'female':
    //         echo 'Hello Mrs.';
    //         break;
    //     default:
    //         echo 'Hello';
    // }

    // While loop in PHP

    $serial = 1;
    
    // while($serial <= 10) {
    //     echo 'Calling the serial no. ' . $serial . '<br>';

    //     $serial++;
    // }

    // Do while loop in PHP

    // do {
    //     echo 'Calling the serial no. '. $serial . '<br>';

    //     $serial++;
    // } while ($serial <= 10);

    // For loop in PHP

    // for($i = 1; $i <= 10; $i++) {
    //     echo 'Index number: '.$i . '<br>';
    // }


    // Function is PHP

    function is_adult($age) {
        if($age >= 18) {
            return true;
        }else {
            return false;
        }
    }

    // echo is_adult(10) ? 'Adult' : 'Minor';

    // date_default_timezone_set('Asia/Dhaka');

    // echo(date('H:i:s'));


    // Foreach in PHP

    $fruits = ['Apple', 'Mango', 'Banana'];

    // foreach($fruits as $fruit) {
    //     echo $fruit . '<br>';
    // }

    // $person = ['name'=>'Arif', 'age'=>'18'];

    // foreach($person as $key => $value) {
    //     echo $key . ': '. $value . '<br>';
    // }

    // Array map in PHP

    $numbers = [1, 2, 3, 4, 5];

    $squared = array_map(function ($num){
        return $num * $num;
    }, $numbers);

    var_dump ($squared);

    ?>
</body>
</html>