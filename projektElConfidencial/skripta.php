<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pocetna.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    
<?php

    $MySQL = mysqli_connect("localhost","root","","projekt_vijesti") or die('Error connecting to MySQL server.');
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(!isset($_POST["arhiva"])){
            $query = "INSERT INTO vijesti (naslov_vijesti, kratkiSadrzaj_vijesti, sadrzaj_vijesti, slika_vijesti, kategorija_vijesti, arhiva_vijesti) VALUES ('" . $_POST['naslov']."',
            '" . $_POST['kratkiSadrzaj'] . "',
            '" . $_POST['sadrzaj'] . "',
            '" . $_POST['slika'] . "',
            '" . $_POST['kategorija'] . "',
            'NE')";

            $result = @mysqli_query($MySQL, $query);

            echo "PODACI SU USPJEŠNO POSLANI";

            $MySQL2 = mysqli_connect("localhost","root","","projekt_vijesti") or die('Error connecting to MySQL server.');    
            $query2 = "SELECT * FROM vijesti order by id desc";
            $result2 = @mysqli_query($MySQL2, $query2);

            $row2 = @mysqli_fetch_array($result2);
                if($row2['kategorija_vijesti'] == "europa"){
                    print '
                        <header>
                            <div class="container europalink">
                                
                                <ul>
                                <li style="color: blue; font-size:24px;"><a href="#" europalink style="font-size: 20px;">EUROPA</a></li>                                
                                </ul>
                                <br>
                                
                            </div>
                        </header>
                    
                    ';
                
                }else if($row2['kategorija_vijesti'] == "svijet"){
                    print '
                        <header>
                            <div class="container europalink">
                                <ul>
                                    <li style="color: blue; font-size:24px;"><a href="#" europalink style="font-size: 20px;">SVIJET</a></li>                                 

                                </ul>
                                <br>
                            </div>
                        </header>
                    ';
                
            }

            // print'

            // <main>
            // <div class="container europalink"> 
            //     <br>
            // ';
                
            // while($row = @mysqli_fetch_array($result)) {
                $date=date_create("13-6-2024");

                print'
                <hr>';
                print'
                <br>
                <main class="container" style="text-align:center; padding-left:20%;">
                <div class="col-md-8">
                    <div class="thumbnail">
                        <h1>'.$row2['naslov_vijesti'].'</h1>
                        <br>
                        <h3>'.$row2['kratkiSadrzaj_vijesti'].'</h3>
                        <br>
                        <img src="slikeProjekt/'. $row2['slika_vijesti'] .'" title="'. $row2['naslov_vijesti'] .'" alt="'. $row2['naslov_vijesti'] .'" style="width:100%">
                        <br>
                        <p style="font-size: 11px; text-align: left; padding-left: 20%;">'. date_format($date,"d/m/Y").'</p>
                        <br>
                        <p style="text-align: left; padding-left: 10%; padding-right: 10%;">'.$row2['sadrzaj_vijesti'].'</p>
                    </div>
                </div>
                </main>';

            print'
                <br>
                <section>
                    <a href="./unos.php" class="povratak1" style="background-color: #3f51b5; color: white;       padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">Povratak na unos vijesti</a>
                </section>
            ';

            print'
                <footer>
                    <p>Copyright &copy; 2024 Antun Bučar</p>
                </footer>
            ';
        
        }else if(isset($_POST["arhiva"])){
            $query = "INSERT INTO vijesti (naslov_vijesti, kratkiSadrzaj_vijesti, sadrzaj_vijesti, slika_vijesti, kategorija_vijesti, arhiva_vijesti) VALUES ('" . $_POST['naslov']."',
            '" . $_POST['kratkiSadrzaj'] . "',
            '" . $_POST['sadrzaj'] . "',
            '" . $_POST['slika'] . "',
            '" . $_POST['kategorija'] . "',
            'DA')";

            $result = @mysqli_query($MySQL, $query);

            echo "PODACI SU USPJEŠNO POSLANI<br>";
            echo "Pošto je vijest arhivirana možete je vidjeti ovdje, ali ne i na početnoj stranicic.";

            $MySQL3 = mysqli_connect("localhost","root","","projekt_vijesti") or die('Error connecting to MySQL server.');    
            $query3 = "SELECT * FROM vijesti order by id desc";
            $result3 = @mysqli_query($MySQL3, $query3);

            $row3 = @mysqli_fetch_array($result3);
                if($row3['kategorija_vijesti'] == "europa"){
                    print '
                        <header>
                            <div class="container europalink">
                                
                                <ul>
                                <li style="color: blue; font-size:24px;"><a href="#" europalink style="font-size: 20px;">EUROPA</a></li>                                
                                </ul>
                                <br>
                                
                            </div>
                        </header>
                        
                    ';
                    
                }else if($row3['kategorija_vijesti'] == "svijet"){
                    print '
                        <header>
                            <div class="container europalink">
                                <ul>                                
                                    <li style="color: green; font-size:24px;"><a href="#" europalink style="font-size: 20px;">SVIJET</a></li>        
                                </ul>
                                <br>
                            </div>
                        </header>
                    ';
                    
                }

            // print'

            // <main>
            // <div class="container europalink"> 
            //     <br>
            // ';
                
            // while($row = @mysqli_fetch_array($result)) {
                $date=date_create("13-6-2024");

                print'
                <hr>';
                print'
                <br>
                <main class="container" style="text-align:center; padding-left:20%;">
                <div class="col-md-8">
                    <div class="thumbnail">
                        <h1>'.$row3['naslov_vijesti'].'</h1>
                        <br>
                        <h3>'.$row3['kratkiSadrzaj_vijesti'].'</h3>
                        <br>
                        <img src="slikeProjekt/'. $row3['slika_vijesti'] .'" title="'. $row3['naslov_vijesti'] .'" alt="'. $row3['naslov_vijesti'] .'" style="width:100%">
                        <br>
                        <p style="font-size: 11px; text-align: left; padding-left: 20%;">'. date_format($date,"d/m/Y").'</p>
                        <br>
                        <p style="text-align: left; padding-left: 10%; padding-right: 10%;">'.$row3['sadrzaj_vijesti'].'</p>
                    </div>
                </div>
                </main>';

            print'
                <br>
                <section>
                    <a href="./unos.php" class="povratak1" style="background-color: #3f51b5; color: white;       padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">Povratak na unos vijesti</a>
                </section>
            ';

            print'
                <footer>
                    <p>Copyright &copy; 2024 Antun Bučar</p>
                </footer>
            ';
        }
  

        
        }
            // }
                                                            
        //         </div>
        //     </div>
        //     <br>
            
            

        // </main>
            

        
        
    // $MySQL = mysqli_connect("localhost","root","","projekt_vijesti") or die('Error connecting to MySQL server.');
    // session_start();
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $ext = strtolower(strrchr($_FILES['image_doc']['name'], "."));
    //     $picture = $_POST['title'] . '-' . rand(1,80).$ext;
                
    //     if(isset($_POST["submit"])) {

    //         $check = getimagesize($_FILES["image_doc"]["tmp_name"]);
    //         if ($_FILES["image_doc"]["size"] > 10000000) {
    //             echo "<p>Document is too big</p>";
    //         }

    //         if($check !== false) {
    //             $_SESSION['message'] = "
    //             <div id='hide'>
    //                 <h1 class='alert alert-success'>File Successfully Uploaded!</h1>

    //                 <p><b>Document: </b>" . $check["mime"] . ".</p>
    //                 <p><b>File to be uploaded: </b>" . $picture . "</p>
    //                 <p><b>Type: </b>" . $_FILES["image_doc"]["type"] . "</p>
    //                 <p><b>File Size: </b>" . $_FILES["image_doc"]["size"]/1024 . "</p>
    //                 <p><b>Store in: </b>" . $_FILES["image_doc"]["tmp_name"] . "</p>
    //             </div>
    //             <hr>";

    //             copy($_FILES['image_doc']['tmp_name'], "images/" . $picture);

    //             $query  = "INSERT INTO vijesti (naslov_vijesti, kratkiSadrzaj_vijesti, sadrzaj_vijesti, slika_vijesti, kategorija_vijesti, arhiva_vijesti) VALUES ('" . $_POST['title'] . "', '" . $picture . "')"; 
    //             $result = @mysqli_query($MySQL, $query);
            
    //         } 
    //     }
    //     header("Location: index.php");
    // } else {
    //     echo "<h1 class='alert alert-danger'>Hack!</h1>";
    // }
?>
</body>
</html>
<!-- <section role="main"> <div class="row"> <p class="kategorija"><?php //echo $category; ?></p>
<h1 class="naslov"><?php //echo $title; ?></h1>
<p>AUTOR:</p> <p>OBJAVLJENO:</p> </div> <section class="slika"> <?php
//echo "<img src='img/$image'"; ?>
</section> <section class="kratkiSadrzaj"> <p> <?php
//echo $about; ?>
</p>
</section> <section class="sadrzaj"> <p>
<?php //echo $content; ?>
</p> </section> </section> -->