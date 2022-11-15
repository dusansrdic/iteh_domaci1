<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAD GYM - Lokacije</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="header2">
        <nav>
            <a href="index.html" class="logo">MAD GYM
            </a>
            <div class="navigacijaLinkovi" id="navLinkovi">
                <!-- reposnive bar open and close -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="oNama.php">O nama</a></li>
                    <li><a href="lokacije.php">Lokacije</a></li>
                    <li><a href="prijava.php">Prijava</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- reposnive bar open and close -->
        </nav>
        <h1>Lokacije</h1>
    </section>

    <!-- Contact Us Section Start -->

    <section class="lokacija" style="background-color: rgb(60, 60, 60);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.398258172171!2d20.47303461538744!3d44.77268548733812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70576248bf79%3A0xadaf5cff042d3bd0!2z0KTQsNC60YPQu9GC0LXRgiDQvtGA0LPQsNC90LjQt9Cw0YbQuNC-0L3QuNGFINC90LDRg9C60LAg0KPQvdC40LLQtdGA0LfQuNGC0LXRgtCwINGDINCR0LXQvtCz0YDQsNC00YM!5e0!3m2!1ssr!2srs!4v1640787251309!5m2!1ssr!2srs" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="kontakt" style="background-color: rgb(0, 0, 0);">
        <div class="red">
            <div class="kontaktDeo">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Jove Ilića 154, Fakultet organizacionih nauka</h5>
                        <p>Beograd 11000, Srbija</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+381 11 12 34 567</h5>
                        <p>Svaki dan, 00-24h</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5>info@madgym.rs</h5>
                        <p>Ako imate pitanje, pošaljite nam email</p>
                    </span>
                </div>
            </div>
            <div class="kontaktDeo">
                <form>
                    <input type="text" placeholder="Unesi Ime" required>
                    <input type="email" placeholder="Unesi Email" required>
                    <input type="text" placeholder="Unesi Predmet" required>
                    <textarea rows="8" placeholder="Pourka" required></textarea>
                    <button type="submit" class="hero_btn btn">Pošalji poruku</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Us Section End -->

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