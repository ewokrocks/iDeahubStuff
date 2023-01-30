<?php

    header("content-type:text/json;charset=utf-8");

    $host = "127.0.0.1:4306";
    $dbname = "smarthome";
    $username = "root";
    $password = "";

    echo("111111111111111122222222\n");
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_errno());
    }
       
        //search table `devicedata`
        $sql = "select consumption_amount from `devicedata`";
        $result = mysqli_query($conn,$sql);
    
    echo ("search success\n");

    $sta = "";
    $array=array();
    class devicedata{
      public $consumption_amount;
    }

    echo("33333");


    while($row = mysqli_fetch_row($result)){
      list($consumption_amount)=$row;

      $gz = new devicedata();
      $gz -> consumption_amount = $consumption_amount;

      $array[] = $gz;
    }

    $sta = json_encode($array);
    echo $sta;


?>




