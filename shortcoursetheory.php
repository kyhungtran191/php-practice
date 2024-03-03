<?php 
    // $some_numbers = [1,"Ky HUNG",4,6];
    // print_r($some_numbers);
    // $student = [
    //     "fullname"=>"123123",
    //     "age"=>43,
    //     "email"=>"trankyhung225@gmail.com",
    // ];
   
    // $age = 30;
    // if($age > 20){
    //     echo "mature";
    // }else{
    //     echo "no mature";
    // }
    // if(empty($age)){
    //     echo "true";
    // }else{
    //     echo "false";
    // }
    // for($i = 0; $i < 10; $i++){
    //     echo $i.'<br>';
    // }

    // empty

    $fruits =['orange','apple','lemon'];
    foreach($fruits as $index=>$fruit){
        echo $index.' '.$fruit.'<br>';
    }
    //Function
    function sayHello($name){
        echo "Hello".$name;
    }
?>