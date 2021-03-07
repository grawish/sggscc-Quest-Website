<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}
include "../dbconf.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $alert_str = "";
    $target_dir = "../uploads/";
    $target_file = $target_dir . 'img0.webp';
    $_FILES['image']['name'] = 'img0.webp';
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $alert_str = $alert_str . '\n' . "File is not an image.";
            $uploadOk = 0;
        }
    }
    $count = 0;
    while (file_exists($target_dir . $_FILES['image']['name'])) {
        $GLOBALS['count']++;
        $_FILES['image']['name'] = 'img' . $count . '.webp';
    }
    $target_file = $target_dir . $_FILES['image']['name'];
    if ($_FILES["image"]["size"] > 1000000) {
        $alert_str = $alert_str . '\n' . "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($imageFileType != "webp") {
        $alert_str = $alert_str . '\n' . "Sorry, only WEBP files are allowed.";
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        $alert_str = $alert_str . '\n' . "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file(htmlspecialchars($_FILES["image"]["tmp_name"]), htmlspecialchars($target_file))) {
            $everexistedslug = false;
            $title = $_POST['title'];
            $body = base64_encode($_POST['body']);
            $aid = $_SESSION['uid'];
            $slug = preg_replace("/-$/", "", preg_replace('/[^a-z0-9]+/i', "-", strtolower($title)));
            $count = 0;
            $query = "SELECT COUNT(*) AS NumHits FROM posts WHERE slug  LIKE '$slug%'";
            $result = mysqli_query(connect(), $query) or die(mysqli_error(connect()));
            $row = $result->fetch_assoc();
            $numHits = $row['NumHits'];
            if ($numHits > 0) {
                $slug = ($slug . '-' . $numHits);
            }
            $sql = 'INSERT INTO posts(slug, title, aid, body, coverimage) VALUES (\'' . $slug . '\', \'' . $title . '\',\'' . $aid . '\', \'' . $body . '\', \'' . $_FILES['image']['name'] . '\')';
            echo $sql;
            $run = connect()->query($sql);
            echo $run;
            $alert_str = $alert_str . '\n' . "The Post has been Published.";
        } else {
            $alert_str = $alert_str . '\n' . "Sorry, there was an error uploading your file.";
        }
    }
} else {
    ?>
    <script>
        // window.open('index.php', '_self')
    </script>
    <?php
}
?>
<script>
    alert("<?php if (isset($alert_str)) {
        echo $alert_str;
    } ?>");
    // window.open('index.php', '_self');
</script>
