<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>
  <body>
    <nav>
      <div class="container">
        <ul>
          <li class="logo">Sunshine Hotel</li>
          <li><a class="nav-btn active" href="data.php">Data Reservasi</a></li>
          <li><a href="add-room.php" class="nav-btn">Tambah Kamar</a></li>
          <li style="float: right;">
            <a
              href="home.php"
              class="nav-btn"
              style="
                border-radius: 8px;
                color: white;
                padding-left: 30px;
                padding-right: 30px;
                background-color: red;
              "
              >Keluar</a>
          </li>
        </ul>
      </div>
    </nav>
    <section>
      <div class="room">Data Reservasi</div>
    </section>
    <div class="kamar-tersedia" style="margin-left: 100px; padding: 20px 10px 20px 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); width: 200px; text-align: center; margin-bottom: 10px">
      <div class="text" style="font-weight: bold; font-size: 20px">kamar tersedia</div>
      <?php 
        $fp = fopen("file.txt", "a+");
        $open = fopen("dataReservasi.txt", "a+");
        $show = "jumlahKamar.txt";
        $isi = fgets($fp, 80);
        $fill = fgets($open, 80);
        $pisah = explode(";", $isi);
        
        $rawr = 1;
        $count = 0;
        while(!feof($fp)) 
        {
            $isi = fgets($fp);
            $rawr++;
        }
        while(!feof($open)) {
            $fill = fgets($open);
            $count++;
        }
        
        $total_room = $rawr - $count;

        // Writing the total number of rooms to the file
        $file = fopen($show, "w");
        if ($file) {
            fputs($file, "$total_room\n");
            fclose($file);
        }

        // Reading the last line of the file
        $last_line = '';
        if (file_exists($show)) {
            $file = fopen($show, "r");
            if ($file) {
                while (($line = fgets($file)) !== false) {
                    $last_line = $line;
                }
                fclose($file);
            }
        }

        echo "<div class='text' style='font-size: 20px;'>" . htmlspecialchars(trim($last_line)) . "</div>";
      ?>
    </div>
    <section class="data-reservasi">
      <div class="container">
        <table border="1" align="center" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Lokasi</th>
              <th>Price</th>
              <th>No Tlp</th>
              <th>Alamat</th>
              <th>Check In</th>
              <th>Check Out</th>
              <th>Nama Hotel</th>
              <th>Tipe Kamar</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $file = 'dataReservasi.txt';
              if (file_exists($file)) {
                $buka = fopen($file, 'r');
                while ($isi = fgets($buka)) {
                  $pisah = explode('|', $isi);
                  echo "<tr style='text-align: center;'>";
                  foreach ($pisah as $data) {
                    echo "<td>" . htmlspecialchars($data) . "</td>";
                  }
                  echo "</tr>";
                }
                fclose($buka);
              } else {
                echo "<tr><td colspan='11' style='text-align: center;'>Data tidak tersedia</td></tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>
