<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file_path = "user.txt";
   
    if (file_exists($file_path)) {
        $file = fopen($file_path, "r");
        $found = false;
       

        $lines = file($file_path);


        while ($isi = fgets($file)) {
            $pindah = preg_replace("/;/", "", $isi);
            $pisah = explode("|", $isi);
            
            if ($pisah[2] == $email && $pisah[3] == $password) {
                $found = true;
                break;
            }
        }
        fclose($file);
        if ($found)
        {
             echo "<script>
                    alert('Anda berhasil Login');
                    window.location.href = 'home.php';
                  </script>";
        }
        else 
        {
              echo "<script>
                    alert('Password atau Email yang dimasukkan salah');
                    window.location.href = 'index.php';
                  </script>";
        }
           
      
    }


    ?>