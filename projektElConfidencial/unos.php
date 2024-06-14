
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>El Condidencial</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="./pocetna.css" />

        <script type="text/javascript" src="jquery-1.11.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

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
        form input {
        height: 25px;
        line-height: 25px;
        color: #000;
        padding: 0 6px;
        box-sizing: border-box;
        }
        form button {
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
            .form-item button{
                width: 45%;
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



        <!-- FORMA -->
        <form action="skripta.php" method="POST" name="unosVijesti">
            <div class="form-item"> 
                <label for="naslov">Naslov vijesti</label> 
                <div class="form-field"> 
                    <input type="text" name="naslov" class="form-field-textual naslov">
                </div> 
            </div> 

            <div class="form-item"> 
                <label for="kratkiSadrzaj">Kratki sadržaj vijesti do 50 zankova</label>
                <div class="form-field"> 
                    <textarea name="kratkiSadrzaj" id="" cols="30" rows="10" class="formfield-textual"></textarea> 
                </div> 
            </div>
            <div class="form-item"> 
                <label for="sadrzaj">Sadržaj vijesti</label> 
                <div class="form-field"> 
                    <textarea name="sadrzaj" id="" cols="30" rows ="10" class="form-field-textual"></textarea> 
                </div> 
            </div>

            <div class="form-item"> 
                <label for="slika">Slika:</label> 
                <div class="form-field"> 
                    <input type="file" name="slika" class="input-text"></input> 
                </div> 
            </div>

            <div class="form-item"> 
                <label for="kategorija">Kategorija vijesti:</label> 
                <div class="form-field"> 
                    <select name="kategorija" id="" class="form-filed-textual">
                        <option value="europa">Europa</option>
                        <option value="svijet">Svijet</option>
                    </select>
                </div> 
            </div>

            <div class="form-item"> 
                <label for="arhiva">Spremanje u arhivu:
                    <div class="form-field"> 
                        <input type="checkbox" name="arhiva" class="input-text"></input> 
                    </div> 
                </label> 
            </div>


            <div class="form-item"> 
                <button type="reset" value="Poništi">Poništi</button>
                <button type="submit" value="Pošalji" id="posalji" onclick="prijava()">Pošalji</button>

            </div>

        <!-- <h1>
            TRENUTNO NEMA UNOSA VIJESTI
        </h1> -->

        
        
        

        <footer style="text-align: center; padding: 10px;">
            <p>Copyright &copy; 2024 Antun Bučar</p>
        </footer>

        <script src="./unos.js"></script>


    </body>
</html>