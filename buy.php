<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
  <style>
    .w3-black{
            padding-top: 20px;
      }
    .w5-black{
            background-color: black;
            color: white;
      }
    body{
      background-color: white;
      padding-top: 50px;
      padding-left: auto;
    }
    .first{
      
      width: auto;
      padding: 80px;
      height: auto;
    }
  </style>
</head>
<body >
<div class="w3-top">
  <div class="w3-bar w5-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="sell.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SELL</a>
    
    <div class="topnav-right" style="float: right;">
    <a href="logout.php"class="w3-bar-item w3-button w3-padding-large w3-hide-small"  >LOGOUT</a>
</div>
</div>
<div class="first">
 <h2 style="text-align: center ;"> Vehicle Details </h2>

<?php session_start();

?>


<center>
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM sell");

echo "<table border='1' bgcolor='#fff'>
<tr>
<th>FullName</th>
<th>Phoneno</th>
<th>Selecttype</th>
<th>Brand</th>
<th>VehicleName</th>
<th>Vehiclecolor</th>
<th>VehicleMilage</th>
<th>VehiclePrice</th>
<th>Action</th>


</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FullName'] . "</td>";
  echo "<td>" . $row['Phoneno'] . "</td>";
  echo "<td>" . $row['Selecttype'] . "</td>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" . $row['VehicleName'] . "</td>";
  echo "<td>" . $row['Vehiclecolor'] . "</td>";
  echo "<td>" . $row['VehicleMilage'] . "</td>";
  echo "<td>" . $row['VehiclePrice'] . "</td>";
 
  echo "<td><a  href='buyvehicle.php?id=".$row['id']."'>Buy</a> ";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</center>
</div>

</body>
</html>
