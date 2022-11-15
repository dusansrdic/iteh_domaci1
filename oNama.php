<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAD GYM - O nama</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="header2">
        <nav>
            <a href="index.php" class="logo">MAD GYM
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
        <h1>O nama</h1>
    </section>

    <!-- About Us Section Start -->

    <section class="oNama" style="background-color: black;">
        <div class="red">
            <div class="oNamaDeo">
                <h1>MAD GYM je najveća teretana u Srbiji.</h1>
                <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cumque in accusantium molestias maiores fuga vitae eos, ducimus officiis repudiandae voluptatem error. Laboriosam, numquam blanditiis aspernatur, nobis tempora consequatur id aliquam asperiores voluptatum iste animi voluptatem fugiat totam excepturi dolor.</p>
                <!-- <a href="#" class="hero_btn btn">EXPLORE NOW</a> -->
            </div>
            <div class="oNamaDeo">
                <img src="img/oNamaSlika.png" alt="">
            </div>
        </div>
    </section>

    <!-- About Us Section end -->

    <!-- Footer Section start -->
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
        <p>Copyright © 2021 <a href="index.php">MAD GYM</a>. All Rights Reserved</p>
    </section>
    <!-- Footer Section end -->

    <script src="1.js"></script>
</body>

</html>