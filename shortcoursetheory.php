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
    $names = ['john','anna','hoang','tony'];
    //built in array
    array_push($names,'elons');
    array_pop($names);
    array_shift($names);
    array_unshift($names, 'John');
    //chunked_array
    $chunk_array = array_chunk($names,2);
    //merge array
    $arr_1 = [1,2,3,4];
    $arr_2 = [5,6,7,8];
    $merge_array = array_merge($arr_1,$arr_2);
    $array_three = [...$merge_array];
    //combine array
    $a = ['name','email','age'];
    $b = ['Hoang','sunlight4d@gmail.com', 18];
    // create key-value
    $c = array_combine($a,$b);
    // 1 - 10;
    $number = range(1,10);
    print_r(array_keys($c));
    //map an another array
    //with the same size , but others value
    $square_nums = array_map(fn($eachNumber)=>$eachNumber * $eachNumber,$number);
    //string functions
    $full_name = "Tran Ky Hung";
    echo "length". strlen($full_name);
    echo strtoupper($full_name);
    echo strtolower($full_name);
    $name = str_replace('','Nguyen',$full_name);
    $check_start_with = str_starts_with(strtolower($full_name),"hoang");
    //htmlspecialchars
?>