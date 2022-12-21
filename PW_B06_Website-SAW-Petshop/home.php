<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'produk sudah ditambahkan ke keranjang!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'produk ditambahkan ke keranjang!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>beranda</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'header.php'; ?>
<section class="home">
   <div class="content">
      <h3>Halo, Selamat datang!</h3>
      <p>Kunjungi toko kami untuk melihat produk yang luar biasa</p>
      <a href="about.php" class="white-btn">selengkapnya</a>
   </div>
</section>

<section class="products">
   <h1 class="title">produk kami</h1>
   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">Rp. <?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="tambahkan" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">tidak ada produk!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">lebih banyak</a>
   </div>
</section>

<section class="about">
   <div class="flex">

      <div class="image">
         <img src="images/SAW logo.png" alt="">
      </div>

      <div class="content">
         <h3>SAW Petshop</h3>
         <p>Kita semua ingin hewan peliharaan kita berumur panjang, bahagia, dan sehat.
        Keseimbangan nutrisi yang tepat sangat penting saat memberi makan hewan peliharaan anda.
        Anda bisa menemukan aneka kebutuhan hewan peliharaan khususnya anjing, dan kucing dengan kualitas produk yang sangat terjamin.
        Bahagiakan hewan peliharaan kesayangan anda, dengan mengunjungi website <b>SAW Petshop</b>
        dan nikmati kemudahan berbelanja secara online.
        </p>
         <a href="about.php" class="btn">Baca lebih lanjut</a>
      </div>

   </div>
</section>

<section class="home-contact">
   <div class="content">
      <h3>memiliki pertanyaan?</h3>
      <p>Jika anda memiliki pertanyaan terkait produk yang ada maupun tentang SAW Petshop, anda dapat menekan laman hubungi kami</p>
      <a href="contact.php" class="white-btn">hubungi kami</a>
   </div>
</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>