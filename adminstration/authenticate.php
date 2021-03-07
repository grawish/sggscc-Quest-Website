<?php
include "../dbconf.php";
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $id=$_POST['ID'];
    $pass=hash("sha256","sggscc".$_POST['pass']);

    $query='SELECT * FROM SMS.USERS WHERE (username="'.$id.'" AND password="'.$pass.'" AND active=1) OR (email="'.$id.'" AND password="'.$pass.'" AND active=1)';
    $sql = connect()->query($query);
    if ($sql->num_rows > 0) {
        // output data of each row
        while ($row = $sql->fetch_assoc()) {
            session_start();
            $_SESSION['uid']=$row['id'];
            header("location:index.php");
        }
    }
    else{?>
        <script>
            alert("Username or Password incorrect!");
            window.open("login.php","_self");

        </script>
        <?php
        echo $query;
    }
}
else if (session_status()==1){
    header("location:login.php");
}
else{
    header("location:index.php");
}