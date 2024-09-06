<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
    <div>
            <label>Masukkan jarak dalam kilometer (km):</label> <br>
            <input name="kilometer" type="text" >
        </div>
        <select name="pilihan">
            <option value="m">KM ke M</option>
            <option value="cm">KM ke CM</option>
            <option value="mm">KM ke MM</option>
        </select>
        <button type="submit" name ="submit">Konversi</button>
    </form>
    <?php
        // lakukan perhitungan konversi jarak di sini
     if(isset($_POST['submit'])) {
        $kilometer = $_POST['kilometer'];
        $konversi = $_POST['pilihan'];
        $hasil = 0;
    
        if ($konversi == 'm') {
            $hasil = $kilometer * 1000;
            echo "<p>$kilometer kilometer adalah $hasil </p>";
        } elseif ($konversi == 'cm') {
            $hasil = $kilometer * 100000;
            echo "<p>$kilometer kilometer adalah $hasil centimeter.</p>";
        } elseif ($konversi == 'mm') {
            $hasil = $kilometer * 1000000;
            echo "<p>$kilometer kilometer adalah $hasil milimeter.</p>";
        } else {
            echo "<p>Pilihan konversi tidak valid.</p>";
         }
        }
    ?>
</body>
</html>