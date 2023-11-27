<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odlot samolotow</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div class="banner1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div class="banner2">
        <img src="zad6.png" alt="logotyp">
    </div>

    <div class="glowny">
        <h4>tabela odlotow</h4>
        <table>
          <tr>
            <th>Ip</th>
            <th>numer rejsu</th>
            <th>czas</th>
            <th>kierunek</th>
            <th>status</th>
          </tr>
          <?php
         $connect = mysqli_connect("localhost", "root", "","egzamin");
         $zapytanie = "SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM odloty ORDER BY czas DESC";
         $gu = mysqli_query($connect, $zapytanie);
         while($linia = mysqli_fetch_row($gu)){
            echo "<tr>";
            echo "<td>".$linia[0]."</td>";
            echo "<td>".$linia[1]."</td>";
            echo "<td>".$linia[2]."</td>";
            echo "<td>".$linia[3]."</td>";
            echo "<td>".$linia[4]."</td>";
            echo "</tr>";
         }
        mysqli_close($connect);


          ?>
        </table>
    </div>

    <div class="stopa1">
        <a href="kwerendy/kw1.jpg">pobierz obraz</a>
    </div>
    <div class="stopa2">
         <?php
             if(!isset($_COOKIE['ciastko']))
             {
                setcookie("ciastko", 1, time()+3600);
                echo "<p>"."Dzien dobry! Sprawdz regulamin naszej strony"."</p>";
             }
             else{
                echo "<p>"."Milo nam, ze nas znowu odwiedziles"."</p>";
             }


         ?>
    </div>
    <div class="stopa3">
        <a> autor: 04221304710</a>
    </div>


</body>
</html>