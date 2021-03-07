<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}

include "../dbconf.php";
include "../includes/header.php";

head("Admin Dashboard", true);
adminnavbar();
$query = 'SELECT * FROM SMS.USERS WHERE users.id=' . $_SESSION['uid'];
$result = connect()->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
    <style>
        @media (min-width: 523px);


    </style>
    <a href="editor.php">
        <div class="d-flex justify-content-center align-items-center"
             style="z-index:2; position: fixed; bottom: 50px; right: 70px; width: 40px; height: 40px; border-radius: 20px; background:#f00; color: white">
            <i class="fa fa-plus"></i>
        </div>
    </a>
    <section class="clean-block clean-hero"
             style="min-height: 523px; color: rgba(9,162,255,0);background: url(&quot;../assets/img/tech/New-blog-graphic.jpg&quot;) center / cover no-repeat;border-color: rgba(9,162,255,0);">
        <div class="text">
            <h2>Welcome !</h2>
            <h1><?php echo $row['Full Name'] ?></h1>
        </div>
    </section>
    <section class="clean-block"
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Your Blog Posts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                mattis vitae leo.</p>
        </div>
        <div class="block-content">
            <?php
            $query = 'SELECT * FROM SMS.posts INNER JOIN sms.users WHERE posts.aid=' . $_SESSION['uid'] . ' AND posts.aid=users.id';
            $result = connect()->query($query);
            $count = 0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img alt="coverimage" class="rounded img-fluid" src="../uploads/' . $row['coverimage'] . '"></div>
                            <div class="col-lg-7">
                                <h3>' . $row['title'] . '</h3>
                                <div class="info"><span class="text-muted">' . substr($row['timestamp'], 0, 11) . ' by&nbsp;<a href="#">' . $row['username'] . '</a></span></div>
                                <div class="post-body">' . base64_decode($row['body']) . '.....</div>
                                <br>
                                <form action="editor.php" method="post">
                                <input type="hidden" name="uid" value="' . $_SESSION['uid'] . '">
                                <input type="hidden" name="slug" value="' . $row['slug'] . '">
                                <button type="submit" class="btn btn-outline-primary btn-sm mb-3">Edit</button>
                                </form>
                                <form action="deletepost.php" method="post">
                                <input type="hidden" name="uid" value="' . $_SESSION['uid'] . '">
                                <input type="hidden" name="slug" value="' . $row['slug'] . '">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>';

                }
            } else {
                echo '<h5 align="center">You do not have any posts yet, tap or click the plus icon on your right to get started!</h5>';
            }


            ?>
        </div>

    </div>
    <?php
}
?>
<div class="container mt-5">
    <a href="changepassword.php" class="btn btn-outline-secondary">Change Password</a>
    <?php
    if ($_SESSION['uid']==1){
        echo '<a href="registration.php" class="btn btn-outline-secondary">Add Users</a>';
    }
    ?>
</div>
<script type="text/javascript">
    Array.from(document.getElementsByClassName('post-body')).forEach((element) => {
        element.innerHTML = element.innerText.substr(0, 100);
    })
</script>
