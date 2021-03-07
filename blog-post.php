<?php
include "includes/header.php";
include "dbconf.php";
head('Blog');
navbar('', 'active', '', '', '', '');
echo '<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/hi_IN/sdk.js#xfbml=1&version=v9.0" nonce="EHeVlbnX"></script>';
echo '<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/hi_IN/sdk.js#xfbml=1&version=v9.0" nonce="CbHGVquW"></script>';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = $_GET["slug"];
    if (empty($name)) {
        echo "An Error Occured";
    } else {
        $query = "SELECT users.username, posts.title, posts.body, posts.coverimage, posts.slug, posts.timestamp, posts.likes FROM users INNER JOIN posts ON users.id=posts.aid WHERE posts.SLUG='" . $name . "'";
        $data = connect()->query($query);
        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
                echo '<main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image:url(&quot;uploads/' . $row['coverimage'] . '&quot;); max-width: 100%;"></div>
                    <div class="post-body" style="overflow: hidden;">
                        <h3>' . $row['title'] . '</h3>
                        <div class="post-info"><span>By ' . $row['username'] . ' on ' . substr($row['timestamp'], 0, 11) . '</span></div>
                        <p>' . base64_decode($row['body']) . '</p>
                    </div>
                    <div class="post-body">
                    <form method="post" id="likeform" action="addlikes.php">
                    <input type="hidden" id="formslug" name="slug" value="' . $_GET['slug'] . '">
                    
                    <button type="submit" id="like_btn" class="btn btn-primary"><i class="fa fa-heart"></i> Like <span id="nolikes">'.$row['likes'].'</span></button>
                    </form>
                  
                    </div>  
                </div>
            </div>
        </section>
    </main>';
            }
        }
    }
}
?>
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
<script>
    $('#likeform').submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            url = $form.attr('action');
        // var posting = $.post(url,{
        //     slug: $('#formslug').val()
        // });
        // posting.done(function (data) {
        //     $('#nolikes').text();
        //
        // })

        $.ajax({
            type: "POST",
            url: url,
            data: $form.serialize(),
            success: function (data) {
                $('#nolikes').text(data);
            }
        });
    });
</script>
</body>

</html>