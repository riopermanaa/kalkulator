<!-- Nama      : Rio Permana putra -->
<!-- Pelatihan : Junior Web Developer -->


<!-- Ini untuk PHPnya -->
<?php
    if(isset($_POST["hitung"]))// untuk mengecek apakah variable ini sudah pernah dibuat / blom jika sudah lakulan perintah dibawah ini 
    {
        $input1 = $_POST["input1"]; // untuk menyimpan inputan dari tombol degan nama input 1
        $input2 = $_POST["input2"]; // untuk menyimpan inputan dari tombol degan nama input 2
        $operasi = $_POST["operasi"]; //untuk menyimpan inputan dari tombol nama operasi
        
        switch($operasi){// untuk melakukan perintah sesuai posisi dari tag option
            case "penjumlahan" : $hasil = $input1 + $input2;// untuk melakukan perintah penjumlahan
            break;

            case "pengurangan" : $hasil = $input1 - $input2;// untuk melakukan perintah pengurangan 
            break;

            case "perkalian" : $hasil = $input1 * $input2;
            // untuk melakukan perintah perkalian
            break;

            case "pembagian" : $hasil = $input1 / $input2;
            // untuk melakukan perintah pembagian
            break;

        }

    }
?>
<!-- Akhir untuk PHP -->

<!-- Ini untuk HTMLnya -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Untuk css -->
    <link rel="stylesheet" href="style.css">
    <!-- Akhir link css -->

    <title>Kalkulator</title>
</head>
<body>
    
    <!-- Kalkulator -->
    <div class="kalkulator card">
        <h2>Kalkulator</h2>

        <!-- Ini untuk Form Inputan -->
        <form  method="post">
            <input type="number" name="input1" class="input" placeholder="Masukkan angka pertama" required>
            <input type="number" name="input2" class="input" placeholder="Masukkan angka kedua" required>
            <select name="operasi" class="opr">
                <option value="penjumlahan">Penjumlahan (+)</option>
                <option value="pengurangan">Pengurangan (-)</option>
                <option value="perkalian">Perkalian (x)</option>
                <option value="pembagian">pembagian (:)</option>
            </select>

            <!-- Ini untuk melihat hasil -->
            <input type="submit" name="hitung" value="Hitung" class="hitung">
            <!-- Akhir untuk melihat hasil -->

        </form>
        <!-- AKhir  untuk Form Inputan -->

        <!-- untuk PHP -->
        <?php 
            if(isset($_POST["hitung"])){
                echo "<input type='number' name='hitung' value='<?php echo $hasil?>' class='hasil'>";
            }else{
                echo "<input type='number' name='hitung' value='0' class='hasil'>";
            }
        ?>
        <!-- Akhir untuk PHP -->

    </div>
    <!-- Akhir Kalkulator -->

</body>
</html>
<!-- Akhir untuk HTMLnya -->