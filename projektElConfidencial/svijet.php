
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
        .navigacija li{
            padding-left: 0%;
        }
        nav{
            width: 80%;
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





        <section class="bottom" style="min-height: 76vh;">
            <div class="container europalink">                
                <!-- <h3 class="center">EUROPA</h3> -->
                <ul>
                    <!-- <li><a href="#">Hello Art</a></li> -->
                    <li><a href="#">SVIJET</a></li>
                </ul>
                <br>
                    
                <div class="row center">
                    <div class="col-lg-4 col-sm-12">
                        <img src="./slikeProjekt/putin-5277284_1280.jpg" alt="Putin">
                        <p>Putinovi propagandisti o nuklearnom oružju: "Možemo pretvoriti Ameriku u pepeo".</p>
                    </div>

                    <?php
                            $MySQL = mysqli_connect("localhost","root","","projekt_vijesti") or die('Error connecting to MySQL server.');
                            $query1 = "SELECT slika_vijesti, naslov_vijesti FROM vijesti order by id asc";
                            $query2 = "SELECT * FROM vijesti";
                            $result = @mysqli_query($MySQL, $query2);
                            
                            while($row = @mysqli_fetch_array($result)) {
                                if($row['kategorija_vijesti'] == "svijet" && $row["arhiva_vijesti"] == "NE"){
                                    print '
                            
                                    <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img src="slikeProjekt/'. $row['slika_vijesti'] .'" title="'. $row['naslov_vijesti'] .'" alt="'. $row['naslov_vijesti'] .'" style="width:100%">
                                        <p>'.$row['naslov_vijesti'].'</p>
                                    </div>
                                    </div>';
                            }
                        }
                        ?>
                    <!-- <div class="col-lg-4 col-sm-12">
                        <img src="./slikeProjekt/biden.jpg" alt="Biden">
                        <p>Biden održao govor o oružju samo par sati nakon što mu je sin osuđen zbog oružja.</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <img src="./slikeProjekt/sudan.jpg" alt="SudanRat">
                        <p>Nikoga nije briga, ovo je rat koji se ne vidi, šire se snimke nestvarnih zvjerstava, 24 milijuna ljudi hitno treba pomoć!</p>
                    </div> -->
                </div>
            </div>
        </section>

        
        
        

        <footer style="text-align: center; padding: 10px;">
            <p>Copyright &copy; 2024 Antun Bučar</p>
        </footer>
    </body>
</html>