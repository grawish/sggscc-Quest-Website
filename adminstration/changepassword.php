<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../dbconf.php";
    $oldpassword = hash("sha256", "sggscc" . $_POST['oldpassword']);
    $newpassword = hash("sha256", "sggscc" . $_POST['newpassword']);
    $cpassword = hash("sha256", "sggscc" . $_POST['cpassword']);
    if ($newpassword == $cpassword) {
        $sql = "SELECT * FROM users where id=" . $_SESSION['uid'];
        $result = connect()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $op = $row['password'];
        }
        if ($oldpassword != $op) {
            echo '
            <script>
            alert("Your Old Password is incorrect!");
            </script>
            ';
        } else {
            $sql = "UPDATE users SET users.password='" . $newpassword . "' where users.id='".$_SESSION['uid']."'";
            $result=connect()->query($sql);
            if ($result == true) {
                echo '
        <script>
        alert("Password has been Successfully Changed!");
        window.open("index.php","_self");
        </script>
        ';
            } else {
                echo '
        <script>
        alert("An Error Occured!");
        window.open("index.php","_self");
        </script>
        ';
            }
        }
//    $sql = "UPDATE users SET users.password".$newpassword." where ";
//    echo $sql;

    } else {
        echo '
            <script>
            alert("Your Passwords did not Matched!");
            </script>
            ';
    }

}

include "../includes/header.php";
adminnavbar();
head("Admin Dashboard", true);
?>
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Change Password</h2>

            </div>
            <form action="changepassword.php" method="post">
                <div class="form-group"><label>Old Password</label><input class="form-control item"
                                                                          type="password" name="oldpassword"
                                                                          id="name"></div>
                <div class="form-group"><label>New Password</label><input class="form-control item"
                                                                          type="password" name="newpassword"
                                                                          id="name"></div>
                <div class="form-group"><label>Confirm Password</label><input class="form-control item"
                                                                              type="password"
                                                                              name="cpassword"
                                                                              id="password"></div>
                <button class="btn btn-primary btn-block" type="submit">Change Password</button>
            </form>
        </div>
    </section>
</main>
