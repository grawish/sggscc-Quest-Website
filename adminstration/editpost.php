<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}
include "../dbconf.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alert_str = "";
    $uid = $_POST['uid'];
//    echo $uid.'<br>';
//    echo $_SESSION['uid'].'<br>';
    if ($uid == $_SESSION['uid']) {
        $slug = $_POST['slug'];
        $body = base64_encode($_POST['body']);
        $sql = 'UPDATE posts SET posts.body = "'.$body.'" WHERE posts.slug="'.$slug.'"';
//        echo $sql;
        $run = connect()->query($sql);
        if ($run == 1){
            $alert_str = "Your Edits have been successfully published!";
        }
        else{
            $alert_str = "An Error occured while processing Your Request! Please Try Later";
        }
    }
} else {
    ?>
    <script>
        window.open('index.php', '_self')
    </script>
    <?php
}
?>
<script>
    alert("<?php
        if (isset($alert_str)) {
            echo $alert_str;
        }
        ?>");
    window.open('index.php', '_self');
</script>
