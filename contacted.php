<?php
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "insert into message(name,email,phone,message) values('$name','$email','$phone','$message')";
    if (mysqli_query($conn, $sql)) {
        // echo 'Registration successfully...';
    } else {
        echo 'Error';
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>যোগাযোগ - জাবিইপা</title>
    <link rel="shortcut icon" href="/image/juil-logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/899adf5c9e.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <meta name="keywords" content="জাবিইপা"/>
    <meta name="description" content="জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার"/>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="হোম  -  জাবিইপা">
    <meta name="twitter:description" content="জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার">
    <meta property="og:title" content="হোম  -  জাবিইপা"/>
    <meta property="og:site_name" content="জাবিইপা"/>
    <meta property="og:description" content="জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার"/>
    <meta property="og:url" content="https://www.juislamiclibrary.com/"/>
    <meta property="og:image" content=""/>
</head>

<body>

    <!-- header section starts  -->
    <?php
    include "header.php";
    ?>
    <!-- header section ends -->



    <div class="contact">
        <div class="heading">
            <h3>যে কোন তথ্য জানতে</h3>
        </div>
    </div>

    <div style="margin-left: 4rem; margin-top: 5%; margin-right: 4rem; text-align: center; color:#27ae60">
        <h2>জাযাকাল্লাহ খাইরান। আলহামদুলিল্লাহ আমরা আপনার বার্তা পেয়েছি। বার্তা পাঠানোর জন্য আপনাকে ধন্যবাদ। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করবো ইন শা আল্লাহ।</h2>
    </div>

    <section class="contact">

        <form action="" method="post">
            <h3 class="cnt">আপনার যে কোন জিজ্ঞাসা বা পরামর্শ নিম্নোক্ত ফর্মে পূরণ করে আমাদের কাছে পাঠিয়ে দিন।</h3>
            <input type="text" name="name" required placeholder="Your Name" class="box">
            <input type="email" name="email" required placeholder="Your Email" class="box">
            <input type="number" name="number" required placeholder="Phone Number" class="box">
            <textarea name="message" class="box" placeholder="Write your message...." id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
        </form>

    </section>

    <!-- footer section starts  -->
    <?php
    include "footer.php";
    ?>
    <!-- footer section ends  -->

</body>

</html>