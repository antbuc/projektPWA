<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab3_h1_Bucar</title>
</head>

<style>
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
/* table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

table td{
  border: 2px solid black;
  text-align: left;
  padding: 8px 30px;

} */
/* table th{
    padding-left:5%;
} */



/* .plavaboja{
    background-color: lightblue;
}
.crvenaboja{
    background-color: red;
} */
</style>

<body>

        <!-- <table>
            <tr>
                <th style="padding-left: 5%;">id</th>
                <th>naslov</th>
                <th>kratkiSadrzaj</th>
                <th>sadrzaj</th>
                <th>slika</th>
                <th style="padding-left: 70px;">kategorija</th>
                <th>arhiva</th>
            </tr>
        </table> -->

    

<?php



    $MySQL = mysqli_connect("localhost","root","","projekt_vijesti") or die('Error connecting to MySQL server.');
   


        $query  = "SELECT * FROM vijesti";

        $result = @mysqli_query($MySQL, $query);

        

        while($row = @mysqli_fetch_array($result)){


            // if($row['godine']<33){
            //     echo "<table>".
            //     "<tr class='plavaboja'>".
            //         "<td>".$row['id']."</td>".
            //         "<td>".$row['naslov_vijesti']."</td>".
            //         "<td>".$row['kratkiSadrzaj_vijesti']."</td>".
            //         "<td>".$row['sadrzaj_vijesti']."</td>".
            //         "<td>".$row['slika_vijesti']."</td>".
            //         "<td>".$row['kategorija_vijesti']."</td>".
            //         "<td>".$row['arhiva_vijesti']."</td>".
            //     "</tr>".

            // "</table>";
            // }else{
            //     echo "<table>".
            //     "<tr class='crvenaboja'>".
            //         "<td>".$row['id']."</td>".
            //         "<td>".$row['ime']."</td>".
            //         "<td>".$row['prezime']."</td>".
            //         "<td>".$row['spol']."</td>".
            //         "<td>".$row['telefon']."</td>".
            //         "<td>".$row['email']."</td>".
            //         "<td>".$row['godine']."</td>".
            //         "<td>".$row['hobi']."</td>".
            //     "</tr>".

            // "</table>";
            // }

        }

?>   


        <br>

        <form method="POST" name="brisanje">
        <label>Odaberite podatak koji želite obrisati:</label><br>

        <?php 
        
            $query  = "SELECT * FROM vijesti";

            $result = @mysqli_query($MySQL, $query);
            while($row = @mysqli_fetch_array($result)){; 
            
                // echo "<input type='radio' id='brisanje' name='brisanje'>";
                echo '<input type="radio" id="brisanje' . $row['id'] . '" name="brisanje" value="' . $row['id'] . '" required>';
                echo "<label for='brisanje'>" .$row['id'] ." - " . $row['naslov_vijesti'] ." " . $row['slika_vijesti'] . "</label>" . "<br>";
                    
                        
            }
            ?>
        
        <br>
        
        

        <input type="submit" value="Izbriši" name="izbrisi" style="background-color: crimson; color: white;      padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer;">
<br><br>
        <a href="./administracija.php" style="background-color: #3f51b5; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">POVRATAK NA REGISTRACIJU</a>


        </form>
    <br>

    <?php

            if(isset($_POST["brisanje"])){
                $brisanje=intval($_POST['brisanje']);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $query  = "DELETE FROM vijesti WHERE id= $brisanje"; 
                $result = @mysqli_query($MySQL, $query);

                if ($result) {
                    echo "Red uspješno obrisan.";
                  } else {
                    echo "Greška pri brisanju reda: ";
                  }

            }
        }
    ?>

    

</body>
</html>

<!-- <?php
//     session_start();
//     $_SESSION['username'];
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administracijaSession_Bucar</title>
</head>

<body>

<?php


    // if(isset($_SESSION['username'])){
        
    //     // $korisnicko_ime = $_POST['korisnickoIme'];
    //     // $_SESSION['username'] = $_POST['korisnickoIme'];
    //     $korisnicko_ime = $_SESSION['username'];


    //     if($korisnicko_ime == "adminstrator"){
    //         echo "Dobro došli $korisnicko_ime. Vaša razina je administrator";
    //     }else{
    //         echo "Dobro došli $korisnicko_ime";
    //     }
    
    // }

?>

</body>
</html> -->