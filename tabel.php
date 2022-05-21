<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel data mahasiswa</title>
</head>
<body>
    <header>
        <h3>Daftar mahasiswa</h3>
    </header>
    <br/>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $output = mysqli_query($koneksi, $hasil);
                while ($mahasiswa = mysqli_fetch_array($output)){
                    echo"<tr>";
                    echo"<td>".$mahasiswa['id']."</td>";
                    echo"<td>".$mahasiswa['nama']."</td>";
                    echo"<td>".$mahasiswa['nim']."</td>";
                    echo"<td>".$mahasiswa['jenis_kelamin']."</td>";
                    echo"<td>".$mahasiswa['kelas']."</td>";
                    echo"<td>".$mahasiswa['program_studi']."</td>";
                    echo"<td>".$mahasiswa['angkatan']."</td>";
                    echo"</tr>";
                }

            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($output) ?> mahasiswa</p>
</body>
</html>