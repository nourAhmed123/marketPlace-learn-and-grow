<?php
session_start();

?>
<style>
table,td,th,tr {vertical-align: center;
  position:relative;
  text-align:center;
  }
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #DFFFCE;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<body>
<div class="container">
  <div class="row">
    <div class="col-lg">
  <table id="customers" style="border:2px solid black; width: 100%; height: 30%;">
    <tr>
      <th>Name</th>
      <th>Image</th>
      <th>Profile</th>

    </tr>
</body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learn_and_grow";
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT * from logininfo where work ='admin'";
    $result = mysqli_query($conn,$sql);
?>
<form action="" method="post">
<?php
  while($row=mysqli_fetch_array($result))
  {
    echo" <tr>";
    echo" <td>$row[1] </td>";

    ?>
   <td> <img src="<?php echo $row[5];?>" width=50px> </td>
   <td><span>	<a href="message.php?receiver=<?php echo $row[0];?>">Send message</a></span></td>



   <?php
    echo"</tr>";
  }
  echo"</table>";

  ?>

</form>

 </div>
</div>
</div>