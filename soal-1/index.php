<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="POST">
        <div>
            <label>Jari-jari alas</label> <br>
            <input name="jari" type="text" placeholder="Masukkan jari-jari alas tabung" required>
        </div>
        <div>
            <label>Tinggi tabung</label> <br>
            <input name="tinggi" type="text" placeholder="Tinggi tabung" required>
        </div>
        <div>
            <button type="submit" name="submit">Hitung Volume</button>
        </div>  
    </form>
    <?php
        // tambahkan perhitungan volume tabung di sini
    if(isset($_POST['submit'])) {
        $phi = 22/7;
        $jari = $_POST['jari'];
        $tinggi = $_POST['tinggi'];
    
            
        $volume = $phi * pow($jari, 2) * $tinggi;
      
        echo "<p>Volume tabung adalah: $volume </p>";
        }
    ?>
</body>
</html>