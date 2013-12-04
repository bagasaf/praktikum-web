<html>
<head>
        <title>Pencarian Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" href="">
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
        Kata Kunci : <input type="text" name="nama"class="input-medium search-query" size=40 value="" placeholder="<?php echo isset($_GET['nama'])?$_GET['nama']: ''; ?>"/>
        <input type="submit" value="Cari" name="cari" class="btn" />
</form>

<?php 
if (isset($_GET['nama'])) {
        
        include_once("lat1.1_5.php");
        $key=$_GET['nama'];

        $res=mysql_query("select * from mahasiswa where nama LIKE '%".$key."%' or nim='".$key."' or alamat LIKE '%".$key."%'");

        if (mysql_num_rows($res)!=0) {
                echo "Data ditemukan!!";
                ?>
                <table border=1 class="table table-striped">
                        <thead>
                                <tr>
                                        <td>No.</td>
                                        <td>Nama.</td>
                                        <td>NIM.</td>
                                        <td>Alamat.</td>
                                </tr>
                        </thead>
                        <tbody>
                        <?php 
                                $i=1;
                                while($data=mysql_fetch_row($res))
                                {
                                ?>
                                <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $data[0]; ?></td>
                                        <td><?php echo $data[1]; ?></td>
                                        <td><?php echo $data[2]; ?></td>
                                </tr>
                                <?php
                                $i++;
                                }
                         ?>
                        </tbody>
                        
                </table>
                <?php
        }
        else
        {
                echo "Maaf, data tidak ditemukan!!";
        }
}
 ?>

</body>
</html>