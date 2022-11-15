<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAD GYM - Prijava</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body style="background-color: black;">
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
        <h1>Registracija</h1>
    </section>
    <br><br><br>

    <section class="registracija" style="background-color: black;">
        <!-- <h1 >Registracija</h1> -->
        <form style="background-color: rgba(0, 0, 0, 0.597);" action="">
            
            <p>Lozinke se ne poklapaju!!!</p>
            <input type="text" name="imeIPrezime" id="imeIPrezime" minlength="5" placeholder="ime i prezime" />
            <input type="email" name="email" id="email" placeholder="email">
            <input type="text" name="korisnickoIme " id="korisnickoIme" minlength="5" placeholder="korisnicko ime" />
            <input type="password" name="lozinka" id="lozinka" minlength="6" placeholder="lozinka"/>
            <input type="password" name="potvrdiLozinku" id="potvrdiLozinku" minlength="6" placeholder="potvrdi lozinku"/>
            <input type="text" name="jmbg" id="jmbg" maxlength="13" placeholder="JMBG" />
            <div class="pol">
                <label class="tekst"><b>Pol:</b></label>
                <input id="rb1" type="radio" name="pol" id="zenski" value="zenski" />
                <label for="zenski" ><b>zenski</b></label>
                <input id="rb2" type="radio" name="pol" id="muski" value="muski" />
                <label for="muski"><b>muski</b></label>
            </div>
            <div class="mestoStanovanja">
                <label class="tekst"><b>Mesto stanovanja:</b></label>
                <select id="mesto" name="mesto">
                    <optgroup label="Beograd">
                        <option value="Vozdovac">Vozdovac</option>
                        <option value="Grocka">Grocka</option>
                        <option value="Zvezdara">Zvezdara</option>
                    </optgroup>
                    <option value="Jagodina" >Jagodina</option>
                    <option value="Krusevac" >Krusevac</option>
                    <option value="Kragujevac">Kragujevac</option>
                    <option value="Vranje">Vranje</option>
                </select>
            </div>

            <div class="usloviKoriscenja">
                <label id="uslov"><b>Da li prihvatate uslove koriscenja?</b></label>
                <input type="checkbox" id="usloviKoriscenja" />
            </div> <br>
            <div class="dugme">
                <button id="dugme1" type="submit" onclick="registrujSe()"><b>Registruj se</b></button>
               
            </div>
        </form>
    </section>
    <br><br><br>

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
        <p>Copyright © 2021 <a href="index.html">MAD GYM</a>. All Rights Reserved</p>
    </section>
    <!-- Footer Section end -->

    <script src="script/1.js"></script>
</body>

</html>