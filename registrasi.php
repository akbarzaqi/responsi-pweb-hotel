<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <title>Home</title>
</head>
<body>
    <section class="page-login d-none d-sm-block" style="margin-top: 150px;">
        <div class="container">
            <form action="proses-registrasi.php" name="form2" method="post" >
                <div class="row" style="gap: 100px; align-items: center">
                    <div class="col-12 col-lg-6">
                        <div class="title" style="font-size: 40px; font-weight: bold; color: #61048a">Sunshine Hotel</div>
                        <div class="subtitle" style="font-size: 21px; ">Temukan Kenyamanan dan Keanggunan di Setiap Sudut Hotel Kami, Di Mana Setiap Tamu Diperlakukan Seperti Raja</div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card" style="padding: 40px 10px 40px 10px; border: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" style="margin-bottom: 20px;" required>
                            <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control" style="margin-bottom: 20px;" required>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" style="margin-bottom: 20px;" required>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" style="margin-bottom: 20px;" required>

                            <input type="submit" value="Login" class="btn btn-primary" onclick="checkRegistration();">
                            <hr>
                            <a href="registrasi.php" class="btn btn-success mt-3">Sign in</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    

</body>
<script src="script/script.js"></script>
</html>
