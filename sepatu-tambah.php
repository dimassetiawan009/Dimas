<h3> Tambah Barang</h3>

<form action="" method="post">
    <table>
    <tr>
        <td width="120"> Nama Sepatu</td>
        <td> <input type="text" name="nama_sepatu"> </td>
    </tr>
    <tr>
        <td> Ukuran Sepatu </td>
        <td> <input type="text" name="ukuran_sepatu"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga"> </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="proses" value="simpan"> </td>
    </tr>
    </table>
</form>

<?php
include "koneksi.php";


if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into tabel_sepatu set
    nama_sepatu = '$_POST[nama_sepatu]',
    ukuran_sepatu = '$_POST[ukuran_sepatu]',
    harga = '$_POST[harga]'");

    echo "Data baru telah di tersimpan";

    include "sepatu_data.php";

}
?>