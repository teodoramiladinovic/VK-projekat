<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knjizara";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(($conn -> connect_error))
{
    die("Connection failed: " . $conn -> connect_error);
}


if(($_SERVER["REQUEST_METHOD"]=="POST"))
{
    $imePrezime=$_POST['ime'];
    $ul=$_POST['ulica'];
    $br=$_POST['broj'];
    $posBr=$_POST['postanskiBr'];
    $mes=$_POST['mesto'];
    $tel=$_POST['telefon'];
    $izKnjiga=$_POST['knjiga'];
    $kol=$_POST['kolicina'];

    $sql="INSERT INTO porudzbina (ImePrezime,Adresa,Broj,Mesto,PostanskiBr,Telefon,Knjiga,Kolicina) VALUES
    ('$imePrezime','$ul','$br','$mes','$posBr','$tel','$izKnjiga','$kol')";

    if(mysqli_query($conn,$sql))
    {
        echo "Vaša porudžbina je zabeležena! Hvala na ukazanom poverenju.";
    }
    else
    {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
}

$conn -> close();
?>
