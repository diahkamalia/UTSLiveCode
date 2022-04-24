<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>  

    <title>Edit Profile</title>
</head>
<body>
    <style>
    a, a:hover, a:visited, a:active {
    color: inherit;
    text-decoration: none;
    }

    </style>
    <div class="container">
        <div class="header">
            <ul class="nav justify-content-end">
                <a  href="profile.php"><b><u>Profile</u></b></a>
                <a  href="add.php"><b>Add profile</b></a>
            </ul>
        </div>
        <div class="content">
        <?php
         include 'koneksi.php';
         $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_mel ";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "query salah";
        }
        ?>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form class="form-horizontal" method="post" action="update.php">
            <input type="hidden" name="id_mel" value="<?php echo $row['id_mel']?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nama_mel">Nama :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_mel" value="<?php echo $row['nama_mel']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email_mel">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" name="email_mel" value="<?php echo $row['email_mel']?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat_mel">Alamat :</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat_mel" value="<?php echo $row['alamat_mel']?>">
                    </div>
                </div>
            <button class="btn btn-danger" type="submit">Update</button>
        </form>
    <?php 
    }
    ?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>
