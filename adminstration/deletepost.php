<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}
$uid = $_POST['uid'];
if ($uid == $_SESSION['uid']) {
    include "../dbconf.php";
    $slug = $_POST['slug'];
    $query = "DELETE FROM POSTS WHERE slug='" . $slug . "'";
    $run = connect()->query($query);
    if ($run) {
        ?>
        <script>
            alert("Deleted Successfully!")
            window.open("index.php", "_self")
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("An Error Occured!")
            window.open("index.php", "_self")
        </script>
        <?php
    }
}
