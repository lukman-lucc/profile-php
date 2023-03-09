<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
    <link rel="stylesheet" href="wcoba.css">
</head>
<body>
    <form>
            <fieldset class="fieldbg">
            <legend style="color : white;">Form Pengisian Biodata:</legend>
            <p>
                <label>Nama:</label>
                <input class="isi" type="text" name="nama">
            </p>
            <p>
                <label>Tangal Lahir:</label>
                <input class="isi" type="date" name="tgllahir">
            </p>
            <p>
                <label>Email :</label>
                <input class="isi" type="email" name="email">
            </p>
            <p>
                <label>Instagram:</label>
                <input class="isi" type="text" name="instagram">
            </p>
            <p>
                <label>Linked In:</label>
                <input class="isi" type="text" name="linkedin">
            </p>
            <button>Submit</button>
            </fieldset>
    </form> <br>

<?php
    $nama = @$_GET['nama'];
    $email = @$_GET['email'];
    $tgllahir = @$_GET['tgllahir'];
    $instagram = @$_GET['instagram'];
    $linkedin = @$_GET['linkedin'];

if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}
if ($tgllahir) {
    echo "<strong>Tanggal Lahir:</strong> {$tgllahir} <br>";
}
if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
} 
if ($instagram) {
    echo "<strong>Instagram:</strong> {$instagram} <br>";
} 
if ($linkedin) {
    echo "<strong>Linkedin:</strong> {$linkedin} <br>";
} 
?>
</body>
</html>