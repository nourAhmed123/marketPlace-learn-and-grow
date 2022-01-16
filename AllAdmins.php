<html>
  <body>

<section class="admin_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Accounts</h2>
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
                          <a href="AddAdminForm.php">Add Admins</a>
                </div>
            </div>
        </div>
    </div>
    <
</section>

                        </body>
                        </html>
