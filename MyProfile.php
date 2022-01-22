<html>
<body>
  <form method="post">
            <p>
                <label for="post_featured_image">Course Image</label>
                <input type="file" value="Course Featured Image" name="post_featured_image" required>
            </p>
            <p>
                 <input type='Submit' value='Submit'>
            </p>


  </form>

         <?php
         /*
         Insert Query
         */
          $con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');
          if(isset($_POST['Submit'])){
            $result = mysqli_query($con,"SELECT * from logininfo WHERE ID='" . $id . "'");
            $row=mysqli_fetch_array($result);
            $post_featured_image = $_FILES['post_featured_image']['name'];
            $post_featured_image_tmp = $_FILES['post_featured_image']['tmp_name'];
            move_uploaded_file($post_featured_image_tmp,"images/$post_featured_image");
              $run_query=mysqli_query($con,"UPDATE logininfo set ProfilePic='" . $post_featured_image . "' WHERE ID='" . $id . "'");
                            //$message = "Email Changed Sucessfully";
              if(mysqli_fetch_array($run_query)){
                  header("Location:Page2.php");
                    return;
              }


          }

         ?>

</body>
</html>
