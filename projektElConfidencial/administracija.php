
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>El Condidencial</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="./pocetna.css" />

    </head>
    <style>
        .pocetna{
            text-decoration: none;
            color: rgb(56, 56, 162);
            text-align: center;
            font-size: 48px;
        }
        .error {
            color: #ff0000;
        }
        .navigacija li{
            padding-left: 0%;
        }
        nav{
            width: 80%;
        }
        .form-item{
            margin-top:20px;
            padding-left:20%;
            padding-right: 20%;
            /* text-align:center; */
        }
        body {
        font-family: "Open Sans";
        font-size: 14px;
        }
        form {
        width: 50%;
        margin: 0 auto;
        }
        form label,
        form input,
        form button {
        margin-bottom: 3px;
        display: block;
        width: 100%;
        }
        .form-item input {
        height: 25px;
        line-height: 25px;
        color: #000;
        padding: 0 6px;
        box-sizing: border-box;
        }
        form input .submit{
        height: 30px;
        line-height: 30px;
        background: #3f51b5;
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
        border: 0;
        display: inline-block;
        width: 20%;
        text-align: center;
        }
        form .error {
        color: #ff0000;
        }
        h2{
            margin-top:5%;
            margin-bottom:2%;
            text-align:center;
        }
        @media (max-width: 768px) {
    /* .bottom {
        display: none;
    } */
            nav{
                /* max-width: 100%; */
                margin: auto;
                width: 80;
                padding-right: 15%;
                padding-left:0;
                /* text-align: center; */
                /* padding: 10px; */
            }
            li {
                float: left;
                width: 25%;
                
            }
            /* img{
                width: 50%;
            } */
    
        }
    </style>
    
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><a href="./index.php" class="pocetna">El Confidencial</a></h1>
                    </div>
                </div>
            </div>
        </header>

        <section id="podnaslov">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Dnevnik utjecajnih čitatelja</h3>
                    </div>
                </div>
            </div>
        </section>



        <nav class="navigacija">
            <ul>
                <!-- <li><a href="#">Hello Art</a></li> -->
                <li><a class="linkl" href="./index.php">HOME</a></li>
                <li><a class="link2" href="./europa.php">EUROPA</a></li>
                <li><a class="link3" href="./svijet.php">SVIJET</a></li>
                <li><a class="link4" href="./unos.php">NEW</a></li>
                <li><a class="link4" href="./administracija.php">ADMINISTRACIJA</a></li>
            </ul>
        </nav>

        <br>

        <section class="linija">
            <hr>
        </section>




        <h2>Login</h2>



    <form action="" method="POST" name="unos">
        <div class="form-item"> 
            <label for="korisnickoIme">Korisničko ime:</label>
            <div class="form-field"> 
                <input type="text" name="korisnickoIme" required>
            </div>
        </div>

        <div class="form-item"> 
            <label for="lozinka">Lozinka:</label>
            <div class="form-field"> 
                <input type="text" name="lozinka" required>
            
            </div>
        </div>
        


        <div class="form-item"> 
                <!-- <button type="reset" value="Poništi">Poništi</button> -->
                <input name="submit" id="submit" type="submit" value="Prijava" style="background: #3f51b5; color:white;  height: 50px; line-height: 30px; font-size:20px;">
                <!-- <button type="submit" value="Pošalji" id="posalji" onclick="prijava()">Pošalji</button> -->

            </div>

        

    </form>

<?php


    if(isset($_POST['korisnickoIme'], $_POST['lozinka'])){
        // session_start();
        $_SESSION['username'] = $_POST['korisnickoIme'];
        // $_SESSION['username'] = $_POST['korisnickoIme'];
        $lozinka = $_POST['lozinka'];
        $hashed_lozinka = password_hash($lozinka, CRYPT_BLOWFISH);

        $MySQL = mysqli_connect("localhost","root","","projekt_administracija") or die('Error connecting to MySQL server.');


    if($_SERVER['REQUEST_METHOD'] == 'POST'){



        $query = "SELECT * FROM korisnici where korisnickoIme = '" .  $_SESSION['username'] . "'";
        $link = "./administracijaSesija.php";
        if($result=@mysqli_query($MySQL,$query)){

            if(mysqli_num_rows($result)>0){

                echo "“Username exist”";
                if( $_SESSION['username'] == "administrator"){
                    echo 'Registracija je uspješna<br>';
                    echo "<br>Dobro došli. Vaša razina je administrator <br>";
                    echo "<a href='$link' style='background-color: #018749; color: white;      padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer;'>NEXT</a><br>";
                }else{
                    echo 'Registracija je uspješna<br>';
                    echo "Dobro došli. Nemate administratorska prava<br>";
                    echo "<a href='./unos.php' style='background-color: #018749; color: white;      padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer;'>NEXT</a><br>";
                }
            }else{

            echo "“Doesn’t exist”<br>";
            echo "<a href='./registracija.php' style='background-color: #3f51b5; color: white;      padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer;'>Registrirajte se</a><br>";

            }




        

    }

    


    }
}


?>

        
        <footer style="text-align: center; padding: 10px; padding-top:20%">
            <p>Copyright &copy; 2024 Antun Bučar</p>
        </footer>
    </body>
</html>