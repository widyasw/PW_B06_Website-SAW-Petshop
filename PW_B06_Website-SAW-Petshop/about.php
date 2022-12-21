<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tentang kami</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'header.php'; ?>
<div class="heading">
   <h3>tentang kami</h3>
   <p> <a href="home.php">beranda</a> / tentang kami </p>
</div>

<section class="about">
   <div class="flex">
      <div class="image">
         <img src="images/SAW logo.png" alt="">
      </div>

      <div class="content">
         <h3>kenapa memilih SAW Petshop?</h3>
         <p>Toko perlengkapan kebutuhan hewan peliharaan yang menyediakan brand lokal dan internasional yang berkualitas.
            Visi misi kami adalah mengedepankan kesehatan dan keceriaan hewan peliharaan dengan memberikan kualitas dan harga produk yang terbaik untuk hewan peliharaan.
            Segera penuhi kebutuhan hewan peliharaan kesayangan anda dengan produk dari <b>SAW Petshop</b>. Terima kasih kelah mengunjungi website kami!</p>
         <a href="contact.php" class="btn">hubungi kami</a>
      </div>
   </div>
</section>

<section class="reviews">
   <h1 class="title">ulasan</h1>
   <div class="box-container">

      <div class="box">
         <img src="images/ulasan1.jpeg" alt="">
         <p>Fitur yang ada dalam website ini sangat mudah dipahami, sehingga ketika saya melakukan pemesanan untuk 
            kebutuhan hewan peliharaan tidak akan lama dan tidak merasa bingung. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Teguh Aldianto</h3>
      </div>

      <div class="box">
         <img src="images/ulasan2.jpeg" alt="">
         <p>Terimakasih sudah membuat website ini sehingga saya bisa membeli kebutuhan hewan peliharaan saya
            dengan sangat mudah tanpa harus keluar rumah terlebih dahulu.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Asha Antania Anjani</h3>
      </div>

      <div class="box">
         <img src="images/ulasan3.jpeg" alt="">
         <p>Mantap! pertahankan untuk layanannya. Saya sangat senang menggunakan website ini karena fitur-fiturnya terlihat menarik, 
            dan barang yang dijual lumayan lengkap.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Moch. Emil Idad</h3>
      </div>

      <div class="box">
         <img src="images/ulasan4.jpeg" alt="">
         <p>Saya sangat senang menggunakan website ini, karena fitur dan produk yang dijual sangat menarik, 
            barang yang saya pesan tidak ada kerusakan dan sesuai dengan gambar yang ada.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zabrina Rulif Aurellia</h3>
      </div>

      <div class="box">
         <img src="images/ulasan5.jpeg" alt="">
         <p>Saya senang berbelanja di website ini karena saya tidak menunggu barang diproses terlalu lama.
            Semoga kedepannya bisa lebih dilengkapi lagi produk untuk kebutuhan hewan peliharaan.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alwan Rofiqi</h3>
      </div>

      <div class="box">
         <img src="images/ulasan6.jpeg" alt="">
         <p>Kemudahan dalam memilih dan memesan barang tidak perlu diragukan lagi. 
            Pilihan pembayaran juga sudah lengkap, jadi ragu saat ingin memesan barang pada website ini.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Alvin Noor Hidayah</h3>
      </div>
   </div>
</section>

<section class="authors">
   <h1 class="title">author</h1>
   <div class="box-container">

      <div class="box">
         <img src="images/saskia.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Syarifah Saskia Aulia</h3>
      </div>

      <div class="box">
         <img src="images/afin.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Achmad Nurs Syururi Arifin</h3>
      </div>

      <div class="box">
         <img src="images/widya.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Widya Sari Wibowo</h3>
      </div>
   </div>
</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>