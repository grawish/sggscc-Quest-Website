<?php
include "includes/header.php";
include "dbconf.php";
include "includes/blog-list-item.php";
head('Blog');
navbar('', 'active', '', '', '', '');
?>
<main class="page blog-post-list">
    <section class="clean-block clean-blog-list dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Blog Posts</h2>

            </div>
            <div class="block-content">
                <?php
                $query = 'SELECT users.username, posts.title, posts.body, posts.coverimage, posts.slug, posts.timestamp, posts.likes FROM users INNER JOIN posts ON users.id=posts.aid';
                $sql = connect()->query($query);
                if ($sql->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql->fetch_assoc()) {
                        echo '<div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="uploads/' . $row['coverimage'] . '"></div>
                            <div class="col-lg-7">
                                <h3>' . $row['title'] . '</h3>
                                <div class="info"><span class="text-muted">' . substr($row['timestamp'], 0, 11) . ' by&nbsp;<a href="#">' . $row['username'] . '</a> <span class="fa fa-heart">  </span> '. $row['likes'] .'</span></div>
                                <div class="post-body">' . base64_decode($row['body']) . '.....</div>
                                <a  href="blog-post.php?slug=' . $row['slug'] . '" class="btn btn-outline-primary btn-sm">Read More</a></div>
                        </div>
                    </div>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </section>
</main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Downloads</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Company Information</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Support</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Legal</h5>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2020 SGGSCC</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/script.min.js"></script>
<script type="text/javascript">
    Array.from(document.getElementsByClassName('post-body')).forEach((element) => {
        element.innerHTML = element.innerText.substr(0, 100);
    })
</script>
</body>

</html>