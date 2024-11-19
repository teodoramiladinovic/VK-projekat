<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/70cce1d5d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="knj.css">
    <title>Book Dragon</title>

</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img class="logo" src="../slikeP/Book.png">
        </div>
        <div id="pretraga">
            <form  method="POST">
                <input type="text" name="search" placeholder="Unesite pojam za pretragu">
                <button type="submit">Pretraži</button>
            </form>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#">Pocetna</a>
            </li>
            <li class="nav-item" >
                <a href="#knjige">Knjige</a>
            </li>
            
            <li class="nav-item">
                <a href="onama.php">O nama</a>
            </li>
            <li class="nav-item">
                <a href="kontakt.php">Kontakt </a>
            </li>
        </ul>
    </div>

    <marquee class = 'marki' behavior="scroll" direction="left">
        Ne propustite fenomenalne akcijske cene koje je za vas pripremio Dragon Books! Povodom dana knjige, ostvarite dodatni popust od 30% na sve naslove, uz besplatnu isporuku za sve narudzbine preko 2000 dinara!
    </marquee>

    <?php 
    echo "<br>";
    include_once("pretrga.php");
    
    if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM knjige WHERE Naziv LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (isset($result) && mysqli_num_rows($result) > 0) {
        echo "<br>";
        echo "<table class = 'rez' border='1'>";
        echo "<th> Naziv </th> <th> Pisac </th> <th> Cena </th> <th> Zanr </th>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>" . $row['Naziv'] . "</td> <td>" . $row['Pisac'] . "</td> <td>" . $row['Cena'] . "</td> <td>" . $row['Kategorija'] . "</td> </tr>";
        }
        echo "</table>";
    } else {
        echo "Nažalost, knjigu koju tražite nemamo na stanju.";
    }
}

?>
    <h1>Knjige:</h1>
   <div id="knjige">
    <h2>Fantastika:</h2>
    <button id="nazad" onclick="nazad()"><i class="fa-solid fa-chevron-left"></i></button>
        <div class="card">
            <img src="../slikeP/sp1.jpg" id="sl1">
            
        </div>
        <div class="card">
            <img src="../slikeP/sp2.jpg" id="sl2">
        </div>
        <div class="card">
            <img src="../slikeP/sp3.jpg" id="sl3">
        </div>
        <button id="vise" onclick="novaSlika()"><i class="fas fa-chevron-right"></i></i></button>
        
        <h2>Ljubavni:</h2>
        <button id="nazad" onclick="romaniNazad()"><i class="fa-solid fa-chevron-left"></i></button>
        <div class="card">
            <img src="../slikeP/rom1.jpg" id="sl11">
            
        </div>
        <div class="card">
            <img src="../slikeP/rom2.jpg" id="sl22">
        </div>
        <div class="card">
            <img src="../slikeP/rom3.jpg" id="sl33">
        </div>
        <button id="vise" onclick="noviRomani()"><i class="fas fa-chevron-right"></i></i></button>
        
   </div> 
   <div id="gif">
   <img src="../slikeP/gif.gif" alt="gif">
   </div>
   <hr>
   <footer>
    <div class="contact-info">
        <p>Email: kontakt@bookdragon.com</p>
        <p>Telefon: 021423586</p>
        <p>Adresa: Njegoseva 15, Novi Sad</p>
    </div>
    <div class="visit-info">

    <?php
    $visits_file = "visits.txt";
    if (file_exists($visits_file)) {
        $visits = (int)file_get_contents($visits_file);
        $visits++;
    } else {
        $visits = 1;
    }
    file_put_contents($visits_file, $visits);

    echo "<p>Trenutni broj poseta: $visits</p>";
    echo "<div id='datetime'></div>";
?>

<script>
    function updateTime() {
        var today = new Date();
        var time = today.toLocaleTimeString();
        var date = today.toLocaleDateString();
        document.getElementById('datetime').innerHTML = 'Trenutno vreme: ' + time + ', <br> Datum: ' + date;
    }

    updateTime(); 
    setInterval(updateTime, 1000); 
</script>
</footer>

<script src="script.js"></script>

</body>
</html>
