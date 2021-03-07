<?php
if (!$_SERVER['REQUEST_METHOD'] == 'post'){
    echo '
    <script>
    window.history.back();
    </script>
    ';
}
include "dbconf.php";
$slug=$_POST['slug'];
$sql='UPDATE posts
set likes=likes+1
where slug="'.$slug.'"';

$result=connect()->query($sql);


$query = "SELECT posts.likes FROM posts WHERE posts.SLUG='" . $slug . "'";
$data = connect()->query($query);
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        echo $row['likes'];
    }
}