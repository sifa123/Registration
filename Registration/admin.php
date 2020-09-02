<?php
include('connection.php');
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Admin Login
    </title>
  

</head>
<body>
    <div id="full">
        <div id="inner_full">
            
            <div id="body">
            <br><br><br><br><br>
            <form action="" method="post">
            <table align="center">
                <tr>
                    <td width="150px" height="50px"><b>Enter Username</b></td>
                    <td width="100px" height="50px"><input type="text" name="un" placeholder="Enter Username"style="width: 200px;height: 40px;border-radius: 20px;"></td>

                </tr>
                <tr>
                    <td width="150px" height="50px"><b>Enter Password</b></td>
                    <td width="100px" height="50px"><input type="text" name="ps" placeholder="Enter Password"style="width: 200px;height: 40px;border-radius: 20px;"></td>


                </tr>
                <tr>
                   
                <td><input type="submit" name="sub" value="Login"style="width: 180px;height: 40px;border-radius: 20px;margin-right: -80px;"></td>  
              



                </tr>
         






            </table>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
            $un=$_POST['un'];
            $ps=$_POST['ps'];
            $q=$db->prepare("SELECT *FROM admin WHERE uname='$un'&& pass='$ps'");
            $q->execute();
            $res=$q->fetchAll(PDO::FETCH_OBJ);
            if($res)
{
    $_SESSION['un']=$un;
header("Location:show.php");

}
else{
    echo "<script>alert('Wrong User')</script>";
}

        }
        ?>
    </div>

</div>
</div>
</body>
</html>

            
