<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}
include "../dbconf.php";
include "../includes/header.php";
head('Post Editor', true);
adminnavbar();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $_POST['uid'];
    if ($uid == $_SESSION['uid']) {
        $edit_mode = true;
        $slug = $_POST['slug'];
        $sql = 'SELECT * from posts where slug="' . $slug . '"';
        $result = connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $image = $row['coverimage'];
                $body = base64_decode($row['body']);

            }
        }
    }
}
?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
        selector: '#mytextarea'
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById('preview-img').setAttribute("src", e.target.result);
                document.getElementById('preview-img').style.display = "block";

                // $('#preview-img').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<div class="container">
    <div class="d-flex justify-content-center">
        <h1>Create or Edit Posts</h1>
    </div>
    <form action="<?php if (isset($edit_mode)) {
        echo 'editpost.php';
    } else {
        echo 'addpost.php';
    } ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <?php if (isset($edit_mode)) {
                echo '<input type="hidden" name="uid" value="'.$_SESSION['uid'].'">';
                $slug = $_POST['slug'];
                echo '<input type="hidden" name="slug" value="'.$slug.'">';
            } ?><br>
            <input type="text" <?php if (isset($edit_mode)) {
                echo 'disabled';
            } ?> class="form-control" id="title" name="title" <?php if (isset($edit_mode)) {
                echo 'value="' . $title . '"';
            } ?>>
        </div>
        <div class="form-group">
            <label for="image">Cover Image</label><br>
            <br>
            <input <?php if (isset($edit_mode)) {
                echo 'disabled';
            } ?> type="file" id="image" onchange="readURL(this)" name="image" accept="image/webp">
            <a href="https://image.online-convert.com/convert-to-webp" target="_blank">Convert your images to webp
                here!</a><br>
            <img style="display: none;" width="100%" id="preview-img">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="mytextarea" name="body" rows="100"><?php if (isset($edit_mode)) {
                    echo $body;
                } else {
                    echo 'Hello, World!';
                } ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
<script>

    var options = {
        debug: 'info',
        modules: {
            toolbar: '#toolbar'
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    };
    var editor = new Quill('.editor');
</script>
