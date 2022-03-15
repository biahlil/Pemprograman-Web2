<html>
    <head>
       <title>Konversi Nilai</title> 
    </head>
    <body>
        <h1>Konversi Nilai</h1>
    <form method="post" action="">
        Masukan Nilai :<input type="text" name="Nilai">
        <input type="submit" value="Submit">
    </form>
<?php
error_reporting(0);
$nilai = $_POST["Nilai"];
if ($nilai >= 80) {
    echo "Nilai anda A";
}
elseif ($nilai > 70 && $nilai < 80) {
    echo "Nilai anda B";
}
elseif ($nilai > 60 && $nilai < 70) {
    echo "Nilai anda C";
}
elseif ($nilai > 50 && $nilai < 60) {
    echo "Nilai anda D";
}
elseif ($nilai <= 50) {
    echo "Nilai anda E";
}
else {
    echo "Nilai yang anda masukan tidak falid";
}
?>

</body>
</html>