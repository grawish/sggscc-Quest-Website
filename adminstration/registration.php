<?php
session_start();
//echo $_SESSION['uid'];
if ($_SESSION['uid'] != 1) {
    header("location:login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../dbconf.php";
    $username = $_POST['username'];
    $password = hash("sha256", "sggscc" . $_POST['password']);
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $sql = "INSERT INTO users(username, `full name`, email, password) values ('" . $username . "', '" . $fullname . "', '" . $email . "', '" . $password . "')";
//    echo $sql;
    $result = connect()->query($sql);
    if ($result == true) {
        echo '
        <script>
        alert("User Has Been Added Successfully!");
        window.open("index.php","_self");
        </script>
        ';
    }
    else{
        echo '
        <script>
        alert("An Error Occured!");
        window.open("index.php","_self");
        </script>
        ';
    }
}
include "../includes/header.php";
head('Post Editor', true);
adminnavbar();
?>
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                    mattis vitae leo.</p>
            </div>
            <form action="registration.php" method="post">
                <div class="form-group"><label for="username">Username</label><input class="form-control item"
                                                                                     type="text" name="username"
                                                                                     id="name"></div>
                <div class="form-group"><label for="fullname">Full Name</label><input class="form-control item"
                                                                                      type="text" name="fullname"
                                                                                      id="name"></div>
                <div class="form-group"><label for="password">Password</label><input class="form-control item"
                                                                                     type="password" name="password"
                                                                                     id="password"></div>
                <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email"
                                                                               name="email" id="email"></div>
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
            </form>
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
</body>

</html>