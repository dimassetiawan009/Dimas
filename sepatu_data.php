<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Merek Sepatu</th>
        <th>Ukuran Sepatu</th>
        <th>Harga</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildatal = mysqli_query($koneksi,"select * from tabel_sepatu ");
    /* While untuk mengulang*/
    while($tampil = mysqli_fetch_array($ambildatal)){
        echo"
        <tr>
            <td>$no</td>
            <td>$tampil[nama_sepatu]</td>
            <td>$tampil[ukuran_sepatu]</td>
            <td>$tampil[harga]</td>
        </tr>";
        $no++;
    }
    ?>
</table>