<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>  

    <title>Add Profile</title>
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
                <a  href="add.php"><b>Add Profile</b></a>
            </ul>
        </div>
    <div class="content ">
        <h1 class="mb-5"></h1>
            <table class="table table-striped" border="2" >
            <tr>
                <td><b>ID</b></td>
                <td><b>Nama</td></td>
                <td><b>Email</b></td>
                <td><b>Alamat</b></td>
                <td><b>Action</b></td>
                </tr>
                    <?php
                    include 'koneksi.php';
                    $sql="SELECT * FROM tbl_mel";
                    $hasil = mysqli_query($koneksi, $sql);
                    while($row = mysqli_fetch_array($hasil))
                    {
                    ?>
                <tr>
                <td><?=$row['id_mel'];?></td>
                <td><?=$row['nama_mel'];?></td>
                <td><?=$row['email_mel'];?></td>
                <td><?=$row['alamat_mel'];?></td>
                <td><a href="edit.php?id=<?=$row['id_mel;']?>" class="btn btn-danger" > &nbsp;&nbsp;Edit&nbsp;&nbsp;</a> <a href="delete.php?id=<?=$row['id_mel']?>" class="btn btn-dark"> Delete</a></td>
                </tr>
                    <?php }
                    ?> 
            </table>
        </div>
    </div>
        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
</body>
</html>
