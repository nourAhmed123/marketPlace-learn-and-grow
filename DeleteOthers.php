
 <?php
 $con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');
    if(isset($_GET['del_user'])){
    $delete_user_id = $_GET['del_user'];
    $delete_user = "delete from logininfo where id = '$delete_user_id'";
    $del_user = mysqli_query($con,$delete_user);

    echo "<script>alert('Account Deleted Successfully!!')</script>";
    echo "<script>window.open('AllAdmins.php','_self');</script>";

    };
?>
