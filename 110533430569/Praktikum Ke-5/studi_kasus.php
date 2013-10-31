<htm>
<head>
   <title>Tampil Data Siswa</title>
      <script language="JavaScript">
      function konfirmasi(Keterangan) {
        tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM '+ Keterangan + ' ?');
        if (tanya == true) return true;
        else return false;
      }
      </script>
</head>
<body>

<?php 
require_once './koneksi.php';

$sql = 'SELECT * FROM mahasiswa order by NIM';
mysql_select_db($nama_db, $cnn) or die("Gagal memilih database!");
$hasil_query = mysql_query($sql, $cnn) or die ("Gagal memproses query!");
$jumlah_data = mysql_num_rows($hasil_query); 
$res = mysql_query($sql); 
if ($res) { 
  if (mysql_num_rows($res)) { ?> 
 
    <table border=1 cellspacing=1 cellpadding=5> 
    <tr> 
      <th>#</th> 
      <th width=100>NIM</th> 
      <th width=150>Nama</th>
      <th>Alamat</th>
      <th colspan=2 >Menu</th> 
    </tr> 
    <?php 
    $i = 1; 
    while ($row = mysql_fetch_row($res)) { ?> 
      <tr> 
        <td><?php echo $i;?></td> 
        <td><?php echo $row[0];?></td> 
        <td><?php echo $row[1];?></td> 
        <td><?php echo $row[2];?></td>
        <?php
        echo "<td><a href=\"edit.php?NIS=$row[0]\">Ubah</a></td>";
        echo "<td><a href=\"delete.php?NIS=$row[0]\" onclick=\"return konfirmasi('".$row[0],' dengan Nama ',$row[1]."')\">Hapus</a>";
        ?>
      </tr> 
      <?php $i++; 
    } ?> 
    </table>
    
  <?php
    } else { 
    echo 'Data Tidak Ditemukan'; 
  } 
  @mysql_close($res); 
}
 
?>
</br>
<?php
echo "Jumlah data : $jumlah_data \t [<a href=tambah_data.php>Tambah Data</a>]";
?>
</body>
</html>
