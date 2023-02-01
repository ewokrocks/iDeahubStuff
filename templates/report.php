<?php
   
    $host = "127.0.0.1:4306";
    $dbname = "smarthome";
    $username = "root";
    $password = "";
    require("sql_config.php");
    $conn=mysqli_connect($host,$username,$password) or die("error connecting");
    mysqli_query($conn,"set names 'utf8'"); 
    mysqli_select_db($conn,$dbname); 
    $result = mysqli_query($conn,"select * from devicedata");
    $data="";
    $array= array();
    class User{
      public $Consumption_amount;
      public $DeviceDatald;
    }
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $user=new User();
      $user->Consumption_amount = $row['Consumption_amount'];
      $user->DeviceDatald = $row['DeviceDatald'];
      $array[]=$user;
    }
    $data=json_encode($array);
    // echo "{".'"user"'.":".$data."}";
    echo $data;
  ?>



