<?php
for($i = 1; $i <= 50 ; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo "FizzBuzz" . "<br/>";
    }elseif($i % 3 === 0){
        echo "Fizz" . "<br/>";
    }elseif($i % 5 === 0 ){
        echo "Buzz" . "<br/>";
    }else{
        echo $i . "<br/>";
    }
}

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
    echo $FizzBuzz;
    } else if ($i % 3 == 0) {
    echo $Fizz;
    } else if ($i % 5 == 0) {
    echo $Buzz;
    } else {
    echo $i;
    }
}
