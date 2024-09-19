<?php
    include "Orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Hello Pratikum 2</h1> 
   <div>
        <?php
            //proses instansiasi
            $mahasiswa = new Orang('Dina Komariah');

          //menggunakan setter
          $mahasiswa->setNama('Dina Komariah');
          $mahasiswa->settglLahir('2004-12-08');
          $mahasiswa->setalamat('Sungai Duren, Muaro Jambi');

          echo"<br>";
          echo"Data Mahasiswa" . $mahasiswa->getNama(). "<br>";
          echo"Nama :" . $mahasiswa->getNama(). "<br>";
          echo"Tgl Lahir :" . $mahasiswa->gettglLahir(). "<br>";
          echo"Alamat :" . $mahasiswa->getalamat(). "<br>";

            //memanggil method
            $mahasiswa->ucapkanSalam();
           
            echo"<Br>";
            $mahasiswa2 = new Orang('Wahyu Prasetyo');
    
           

            $mahasiswa2->ucapkanSalam();
        ?>
   </div>

</body>
</html>