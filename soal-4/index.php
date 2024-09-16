<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 4</title>
</head>

<body>
    <h1>Soal 4</h1>
    </head>

    <body>

        <h1>Aplikasi Penghitung Umur</h1>

        <form method="POST" action="">
            <label for="tanggalLahir">Masukkan Tanggal Lahir Anda:</label><br>
            <input type="date" id="tanggalLahir" name="tanggalLahir" required><br>
            <input type="submit" value="Hitung Umur"><br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tanggalLahir = $_POST['tanggalLahir'];

            if ($tanggalLahir) {
                function hitungUmur($tanggalLahir)
                {
                    $tanggalLahir = new DateTime($tanggalLahir);
                    $tanggalSekarang = new DateTime();
                    $selisih = $tanggalSekarang->diff($tanggalLahir);
                    return $selisih->y;
                }

                $umur = hitungUmur($tanggalLahir);
                echo "<div class='result'>Umur Anda adalah: " . $umur . " tahun</div>";
            }
        }
        ?>

    </body>

</html>