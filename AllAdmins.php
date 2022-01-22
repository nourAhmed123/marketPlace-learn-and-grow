<html>
  <head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: blue;
}

</style>
</head>
<body>
      <div class="bg">
    <form class="modal-content animate" action="AddAdmins.php" method='post'>


<section class="admin_area">
    <div class="container" style="font-size: 15px;">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h1 style="text-align:center; font-size: 35px;"><b>View All Accounts</b></h1>
                   <table Border="1">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Work</th>
                            <th>Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $user = "select * from logininfo";
                        $con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');
                        $run_user = mysqli_query($con,$user);
                        while($user_row = mysqli_fetch_array($run_user)):
                        $id = $user_row ['id'];
                        $name = $user_row ['Name'];
                        $email = $user_row ['Email'];
                        $work = $user_row ['work'];
                        ?>
                          <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $work;?></td>
                            <td><a href="DeleteOthers.php?del_user=<?php echo $id;?>">Delete</a></td>


                          </tr>
                        <?php endwhile;?>
                        </tbody>
                      </table>
                        <br><br>
                </div>
            </div>
        </div>
    </div>
    
</section>

                        </body>
                        </html>
