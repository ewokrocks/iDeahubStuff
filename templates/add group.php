<!DOCTYPE HTML>
<html>
 <head>
  <style>
body{
  background-color: #FCEDDA;
  
}
  </style>
  <link rel="stylesheet" type="text/css" href="../static/css/add-group.css"/>
 </head>

 <body>

  <?php
  require_once("navbar.php");
  ?>

  <div class="pop">
    <div class="divAdd">
      <form action="../authentication/addgroup.php" target="_blank" class="add">
        <label for="fname">New group name</label>
        <input class="group_title" type="text" id="fname" name="groupname" placeholder="new group name..">
    
    
        <label for="devices">Devices</label>
        <select id="devices" name="devices" multiple="multiple" class="selectsize">
          <option class="device" value="device1">airconditioner</option>
          <option class="device" value="device2">light1</option>
          <option class="device" value="device3">light2</option>
          <option class="device" value="device4">door1</option>
          <option class="device" value="device5">window</option>
        </select>
      
        <input id="add_group_btn" type="submit" value="Submit">
      </form>
    </div>

</div>
</body>
</html>