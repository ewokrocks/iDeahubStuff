<?php
$mysql_server_name='localhost:4306';

$mysql_username='root';

$mysql_password=''; 

$mysql_database='smarthome'; 

  $conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting");
  mysqli_query($conn,"set names 'utf8'"); 
  mysqli_select_db($conn,$mysql_database); 
  $result = mysqli_query($conn,"select * from devicedata");
  $data="";
  $array= array();
  class User{
    public $amount;
    public $id;
    public $water;
  }
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $user=new User();
    $user->amount = $row['Consumption_amount'];
    $user->id= $row['DeviceDatald'];
    $user->water = $row['Comsumption_water'];
    $array[]=$user;
  }
  $data=json_encode($array);
  // echo "{".'"user"'.":".$data."}";
  echo $data;
?>