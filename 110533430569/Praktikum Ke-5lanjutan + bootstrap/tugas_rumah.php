<html>
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorting Data</title>
        <link href="bootstrap.css" rel="stylesheet">
</head>
<body>
        <h2 class="heading">Pengurutan Data</h2>
<?php 
require_once("lat1.1_5.php");

$sql="select * from mahasiswa";
// $sort_type=isset($_GET['sort'])?$_GET['sort']:"asc";
if (isset($_GET['type'])&&$_GET['type']=="nama") {
        $type="nama";
}
else
{
        $type="alamat";
}
if (!isset($_GET['sort'])||(isset($_GET['sort'])&&$_GET['sort']=="asc")) {
        $sort_type="asc";
}
elseif (isset($_GET['sort'])&&$_GET['sort']=="desc")
{
        $sort_type="desc";
}
        if($type=="nama"){
        if (isset($_GET['sort']) && $_GET['sort']=='asc') {
                        $sort_type="desc";
                }
                else if (isset($_GET['sort']) && $_GET['sort']=='desc') {
                        $sort_type="asc";
                }
        }
        else{
                if (isset($_GET['sort']) && $_GET['sort']=='asc') {
                        $sort_type="desc";
                }
                else if (isset($_GET['sort']) && $_GET['sort']=='desc') {
                        $sort_type="asc";
                }
        }

        $type=isset($_GET['type'])?$_GET['type']:"nama";

        $sql.=" order by ".$type." ".$sort_type." ";
        echo $sql;
$res=mysql_query($sql);
if ($res) {
        if (mysql_num_rows($res)) {
                
                ?>

        <table border="1" class="table table-bordered" width="400" cellpadding="4" cellspacing="0">
                <tr class="active">
                        <th>#</th>
                        <th width=100>NIM</th>
                        <th width=150><a href="?type=nama&sort=<?php echo $sort_type; ?>">Nama</a></th>
                        <th><a href="?type=alamat&sort=<?php echo $sort_type; ?>" >Alamat</a></th>
                </tr>
                <?php


                $i=1;
                while($row=mysql_fetch_row($res)){
                        ?>
                        <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                        </tr>
                        <?php
                        $i++;
                }
                ?>
        </table>
        <?php
        }else
        {
                echo "data tidak ditemukan";
        }
        mysql_close();
}
 ?>
</body>
</html>