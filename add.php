<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/add.css" />
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
                <a  href="profile.php"><b>Profile</b></a>
                <a  href="add.php"><b><u>Add profile</u></b></a>
            </ul>
        </div>
        <div class="content">
        <form class="form-horizontal"  method="post" action="action.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_mel">Nama :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_mel" placeholder="Masukkan nama anda" name="nama_mel">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email_mel">Email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email_mel" placeholder="Masukkan email anda" name="email_mel">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat_mel">Alamat :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat_mel" placeholder="Masukkan alamat anda" name="alamat_mel">
                </div>
            </div>
            <button class="btn btn-danger" type="submit">Kirim</button>
        </form>
</div>
</div>
</body>
</html>