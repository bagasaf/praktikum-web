<html>
<head>
        <title>Membatasi Tampilan Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
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
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" href="">
</head>
<body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <?php $jum=(isset($_POST['jum'])?$_POST['jum']: 5) ; ?>
                Tampilkan sebanyak :         <select name="jum">
                         <option value="5" <?php echo $jum==5?"selected": ''; ?>>5</option>
                         <option value="10" <?php echo $jum==10?"selected": ''; ?>>10</option>
                         <option value="15" <?php echo $jum==15?"selected": ''; ?>>15</option>
                         <option value="20" <?php echo $jum==20?"selected": ''; ?>>20</option>
                         <option value="25" <?php echo $jum==25?"selected": ''; ?>>25</option>
                	 </select>
                <input type="submit" value="Tampilkan" class="btn btn-success" />
        </form>
<?php 

if (isset($_POST['jum'])) {
        require_once("lat1.1_5.php");

        $jum=$_POST['jum'];

        $res=mysql_query("select * from mahasiswa limit 0, ".$jum." ");
        // var_dump($res);
        // echo $jum;
        if (mysql_num_rows($res)!=0) {
        ?>
                <table  class="table table-bordered ">
                        <thead>
                                <tr>
                                        <td width=100>No.</td>
                                        <td width=100>Nama.</td>
                                        <td width=150>NIM.</td>
                                        <td width=150>Alamat.</td>
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
}

 ?>
</body>
</html>