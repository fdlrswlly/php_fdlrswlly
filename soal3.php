<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>
</head>

<body>
    </table>
    <label>Cari</label>
    <form action="soal3.php" method="GET">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="cari1"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="cari2"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><input type="text" name="cari3"></td>
            </tr>
        </table>
        <input type="submit" value="Cari">
    </form>
    <?php
    if (isset($_GET['cari1'])) {
        $cari1 = $_GET['cari1'];
        echo "Hasil Pencarian : ".$cari1;
    } 
    ?>
    <table border=1>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <!-- Mencari nama -->
        <?php
        if (isset($_GET['cari1'])) {
            $cari1 = $_GET['cari1'];
            $cari2 = $_GET['cari2'];
            $cari3 = $_GET['cari3'];
            $data = mysqli_query($conn, "SELECT person.nama,person.alamat,hobi.hobi FROM hobi JOIN person ON hobi.person_id = person.id 
            WHERE nama like '%".$cari1."%' AND alamat like '%".$cari2."%' AND hobi like '%".$cari3."%'");
        } else {
            $data = mysqli_query($conn, "SELECT person.nama,person.alamat,hobi.hobi FROM hobi JOIN person on hobi.person_id = person.id");
        }
        while ($d = mysqli_fetch_array($data)) { ?>
            <tr>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['hobi']; ?></td>
            </tr>
        <?php } ?>


</body>

</html>