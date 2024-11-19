<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kontak.css">
    <title>Book Dragon</title>
</head> 
<body>
    <button id="vratiSe">Vrati se na početnu stranu</button>
    <script>
        
        var dugme = document.getElementById("vratiSe");
        dugme.addEventListener("click", function() {
            window.location.href = "index.php";
        });
    </script>
    <div class="contact-form">
        <div class="form-left">
            <form method="POST" action="forma.php">
                <p>Ime i prezime:</p>
                <input type="text" name="ime" required>
                <p>Ulica i broj:</p>
                <input type="text" name="ulica" required> 
                <input type="text" name="broj" required  size="3">
                <p>Poštanski broj i mesto:</p>
                <input type="text" name="postanskiBr" required size="5"> 
                <input type="text" name="mesto" required>
                <p>Kontakt telefon:</p>
                <input type="tel" name="telefon" required>
                <p>Naziv knjige koju želite:</p>
                <input type="text" name="knjiga" required>
                <p>Količina:</p>
                <input type="number" name="kolicina" required size="3"><br><br>
                <input type="submit" value="Pošalji">
            </form>
        </div>
        <div class="form-right"></div>
    </div>
    
</body>
</html>