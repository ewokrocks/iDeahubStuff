<?php
    header("content-type:text/json;charset=utf-8");
    $host = "127.0.0.1:4306";
    $dbname = "smarthome";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_errno());
    }
       
        
        $sql = "select consumption_amount,Day from `devicedata`";
        $result = mysqli_query($conn,$sql);
    
    echo ("search success\n");

    $data = "";
    $array=array(); 
    class devicedata{
      public $consumption_amount;
      public $Day;
    }


    while($row = mysqli_fetch_row($result)){
      list($consumption_amount)=$row;

      $gz = new devicedata();
      $gz -> consumption_amount = $row['consumption_amount'];
      $gz -> Day = $row['Day'];

      $array[] = $gz;
    }

    $sta = json_encode($array);
    echo $data;


?>




