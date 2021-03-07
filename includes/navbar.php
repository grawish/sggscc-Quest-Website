<?php

function navbar($home = "", $blog = "", $contact = "", $about_us = "", $the_crew = "", $memories = "")
{
    echo '<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#"><img src="assets/img/logo.png" width="30px">QUEST</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link ' . $home . '" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link ' . $memories . '" href="memories.php">Memories</a></li>
                <li class="nav-item"><a class="nav-link ' . $the_crew . '" href="crew.php">The Crew</a></li>
                <li class="nav-item"><a class="nav-link ' . $blog . '" href="blog-post-list.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link ' . $about_us . '" href="about-us.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link ' . $contact . '" href="contact-us.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>';
}

function adminnavbar($logout = "block", $admin="none")
{
    echo '<nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#"><img src="../assets/img/logo.png" width="30px">QUEST</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto mr-1">
                <li class="nav-item" style="display: ' . $admin . '"><a class="nav-link" >Sign Up a User</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" style="display: ' . $logout . '"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>';
}

?>