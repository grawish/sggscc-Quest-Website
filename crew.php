<?php
include "includes/header.php";
head('The Crew');
navbar('', '', '', '', 'active', '');
?>
    <style>
        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background: #3A97DD;
        }

        .overlay:hover {
            opacity: 1;
        }
    </style>
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">The Crew</h2>
                    <p>The Only Sin in Quizology is being Stupid</p>
                </div>
                <hr>
                <h2 align="center" class="text-info">Core Members</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/President.webp" alt="sample110"/>
                            <figcaption><h4>Arnav Joshi</h4>
                                <p>President</p></figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/President.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/Vice.webp" alt="sample110"/>
                            <figcaption><h4>Shubham Jha</h4>
                                <p>Vice President</p></figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/Vice.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/GS.webp" alt="sample110"/>
                            <figcaption><h4>Manan Sethi</h4>
                                <p>General Secretary</p></figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/GS.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/JS1.webp" alt="sample110"/>
                            <figcaption><h4>Bhavik Gupta</h4>
                                <p>Joint Secretary</p></figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/JS1.webp"></a>-->
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/JS2.webp" alt="sample110"/>
                            <figcaption><h4>Harshit Gupta</h4>
                                <p>Joint Secretary</p></figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/JS2.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/TRE.webp" alt="sample110"/>
                            <figcaption><h4>Gurdit Singh</h4>
                                <p>Treasurer</p></figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/TRE.webp">-->
                    </div>
                </div>
                <hr style="border: none; height: 1px; color: #333; background-color: #333;">
                <h2 align="center" class="text-info">Executive Members</h2>
                <br>
                <div class="row">
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM1.webp" alt="sample110"/>
                            <figcaption>
                                <h4>Vedant Singh</h4>
                            </figcaption>
                            <a href="#"></a></figure>
                        <!--                        <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM1.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM2.webp" alt="sample110"/>
                            <figcaption><h4>Akshat Gupta</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                        <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM2.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM3.webp" alt="sample110"/>
                            <figcaption><h4>Ananya Jain</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                        <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM3.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM4.webp" alt="sample110"/>
                            <figcaption><h4>Kriti Aggarwal</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM4.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM5.webp" alt="sample110"/>
                            <figcaption><h4>Nishit Goel</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM5.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM6.webp" alt="sample110"/>
                            <figcaption><h4>Radhika Sethi</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM6.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM7.webp" alt="sample110"/>
                            <figcaption><h4>Siddharth Chawla</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                        <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM7.webp">-->
                    </div>
                    <div class="col-md-6 col-lg-3 item">
                        <figure class="snip1563"><img src="assets/img/scenery/EM8.webp" alt="sample110"/>
                            <figcaption><h4>Harsimran Singh</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/EM8.webp">-->
                    </div>
                </div>
                <hr style="border: none; height: 1px; color: #333; background-color: #333;">
                <h2 align="center" class="text-info">Advisory</h2>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/Adv1.webp" alt="sample110"/>
                            <figcaption><h4>Prabhasis Singh</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                        <img class="img-thumbnail img-fluid image" src="assets/img/scenery/Adv1.webp">-->
                    </div>
                    <div class="col-md-12 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/Adv2.webp" alt="sample110"/>
                            <figcaption><h4>Ravjot Singh</h4>
                                </figcaption>
                            <a href="#"></a></figure>
                        <!--                        <img class="img-thumbnail img-fluid image" src="assets/img/scenery/Adv2.webp">-->
                    </div>
                    <div class="col-md-12 col-lg-4 item">
                        <figure class="snip1563"><img src="assets/img/scenery/Adv3.webp" alt="sample110"/>
                            <figcaption><h4>Yash Rathi</h4>
                            </figcaption>
                            <a href="#"></a></figure>
                        <!--                    <img class="img-thumbnail img-fluid image" src="assets/img/scenery/Adv3.webp">-->
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include "includes/footer.php";