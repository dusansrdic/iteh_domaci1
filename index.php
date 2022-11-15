<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAD GYM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html" class="logo">MAD GYM
            </a>
            <div class="navigacijaLinkovi" id="navLinkovi">
                <!-- Reposnive bar open and close -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="oNama.php">O nama</a></li>
                    <li><a href="contact.php">Lokacije</a></li>
                    <li><a href="prijava.php">Prijava</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- Reposnive bar open and close -->
        </nav>

        <div class="textbox">
            <h2>BEAST MODE</h2>
            <p id="gornjiTekst">ONCE YOU SEE RESULTS IT BECOMES AN ADDICTION</p>
            <p id="donjiTekst">Every single time you step into the gym. There is no other way to get those gains. 
                The pain and struggle is what you need to push through in order to make progress.
            </p>
            <!-- <a href="#" class="hero_btn">Visit Us To Know More</a> -->
        </div>
    </section>

    <!-- Course Section Start -->
    <section class="programi" style="background-color: rgb(60, 60, 60);">
        <div class="klasa">
            <div class="vertikalnaLinija"></div>
            <div class="prazanProstor"></div>
        </div>
        <h1>NAŠI <br> PROGRAMI</h1>
        <p class="natpis">Svi naši objekti otvoreni su za korisnike 00-24*</p>

        <div class="red">
            <div class="programiDeo">
                <h3>STANDARD</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolor corporis, commodi nihil quas
                    soluta labore quisquam impedi distinctio explicabo aut minima quos pariatur unde aliquam earum
                    laborum velit non.</p>
            </div>
            <div class="programiDeo">
                <h3>STUDENT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolor corporis, commodi nihil quas
                    soluta labore quisquam impedit distinctio explicabo aut minima quos pariatur unde aliquam earum
                    laborum velit non.</p>
            </div>
            <div class="programiDeo">
                <h3>DNEVNA</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolor corporis, commodi nihil quas
                    soluta labore quisquam impedit distinctio explicabo aut minima quos pariatur unde aliquam earum
                    laborum velit non.</p>
            </div>
        </div>
    </section>
    <!-- Course Section End -->

    <!-- Campus Section Start-->

    <section class="staNudimo" style="background-color: black;">
        <div class="PageBlock">
            <div class="vertikalnaLinija"></div>
            <div class="Clear"></div>
        </div>
        <h1>ŠTA NUDIMO?</h1>
        <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p> -->

        <div class="red">
            <div class="staNudimoDeo">
                <img src="img/grupniTrening.jpg" alt="">
                <div class="layer">
                    <h3>GRUPNI TRENINZI</h3>
                </div>
            </div>
            <div class="staNudimoDeo">
                <img src="img/personalniTrener.jpg" alt="">
                <div class="layer">
                    <h3>PERSONALNI TRENINZI</h3>
                </div>
            </div>
            <div class="staNudimoDeo">
                <img src="img/zenskaZona.jpg" alt="">
                <div class="layer">
                    <h3>ŽENSKA ZONA</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Campus Section End -->

    <!-- Facilities Section Start -->
    <section class="teretana" style="background-color: rgb(60, 60, 60);">
        <div class="PageBlock">
            <div class="vertikalnaLinija"></div>
            <div class="Clear"></div>
        </div>
        <h1>NAŠA TERETANA</h1>
        <div class="red">
            <div class="teretanaSlika">
                <img src="img/teretana1.jpg" alt="">
                <!-- <h3>Best Libary</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio omnis asperiores atque aperiam.
                </p> -->
            </div>
            <div class="teretanaSlika">
                <img src="img/teretana2.jpg" alt="">
                <!-- <h3>Athletics</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio omnis asperiores atque aperiam.
                </p> -->
            </div>
            <div class="teretanaSlika">
                <img src="img/teretana3.jpg" alt="">
                <!-- <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio omnis asperiores atque aperiam.
                </p> -->
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonials Section Start -->
    <section class="recenzije" style="background-color: black;">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>ŠTA NAŠI ČLANOVI KAŽU O NAMA</h1>
        <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p> -->

        <div class="red">
            <div class="recenzijA">
                <img src="img/user.png" alt="oo..">
                <div>
                    <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maiores in nostrum rerum voluptatem
                        praesentium veritatis alias omnis voluptate nisi aperiam, voluptatum quibusdam itaque a
                        deserunt. In quia repellat maxime.</p>
                    <h3 style="color: white;">Marko Markovic</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="recenzijA">
                <img src="img/user.png" alt="oo..">
                <div>
                    <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maiores in nostrum rerum voluptatem
                        praesentium veritatis alias omnis voluptate nisi aperiam, voluptatum quibusdam itaque a
                        deserunt. In quia repellat maxime.</p>
                    <h3 style="color: white;">Petar Petrovic</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- Call To Action Section Start -->
    <!-- <section class="cta">
        <h1>GET READY FOR A BRIGHT FUTURE</h1>
        <a href="contact.html" class="hero_btn">CONTACT US</a>
    </section> -->
    <!-- Call To Action Section End -->

    <!-- Footer Section Start -->
    <section class="footer" style="background-color: rgb(60, 60, 60);">
        <hr>
        <h4>O nama</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse minima incidunt odio nam facilis, eligendi
            Itaque fugiat cupiditate consectetur. Aliquid ab deserunt exercitationem, illum molestiae dolorem.
        </p>

        <div class="ikone">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>
        <p>Domaći zadatak iz Elektronskog poslovanja</a></p>
        <p>Copyright © 2021 <a href="index.html">MAD GYM</a>. All Rights Reserved</p>
    </section>
    <!-- Footer Section End -->

    <script src="script.js"></script>
</body>

</html>