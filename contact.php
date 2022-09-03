<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>যোগাযোগ - জাবিইপা</title>
    <link rel="shortcut icon" href="image/juil-logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/899adf5c9e.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">
        <div class="header-1">
            <div class="logo">
                <a href="#">
                    <img src="image/juil-logo.png" alt="logo">
                </a>
            </div>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="আপনার পছন্দের বই খুঁজুন..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="https://www.facebook.com/JUIL2022/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.facebook.com/groups/395317002159903/"><i class="fab fa-facebook"></i></a>
            </div>
        </div>



        <div class="header-2">

            <nav class="navbar">
                <a href="index.php">হোম</a>
                <a href="index.php#featured">বইসমূহ</a>
                <a href="index.php#arrivals">নতুন বই</a>
                <!-- <a href="#reviews">রিভিউ</a> -->
                <a href="answer.php">প্রশ্ন ও উত্তর</a>
                <a href="registration.php">নিবন্ধন</a>
                <a href="contact.php">যোগাযোগ</a>
                <a href="login.php">লগইন</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="index.php#home" class="fas fa-home"></a>
        <!-- <a href="index.html#featured" class="fas fa-list"></a> -->
        <!-- <a href="index.html#arrivals" class="fas fa-tags"></a> -->
        <!-- <a href="#reviews" class="fas fa-comments"></a> -->
        <a href="answer.php" class="fa-sharp fa-solid fa-question"></a>
        <a href="contact.php" class="fas fa-envelope"></a>
        <a href="registration.php" class="fa-solid fa-user-plus"></a>
        <a href="login.php" class="fas fa-user"></a>
    </nav>



    <div class="contact">
        <div class="heading">
            <h3>যে কোন তথ্য জানতে</h3>
        </div>
    </div>

    <section class="contact">

        <form action="contacted.php" method="post">
            <h3 class="cnt">আপনার যে কোন জিজ্ঞাসা নিম্নোক্ত ফর্মে পূরণ করে আমাদের কাছে পাঠিয়ে দিন। আমরা শীঘ্রই আপনার
                সাথে যোগাযোগ করবো ইন শা আল্লাহ। </h3>
            <input type="text" name="name" required placeholder="Your Name" class="box">
            <input type="email" name="email" required placeholder="Your Email" class="box">
            <input type="number" name="phone" required placeholder="Phone Number" class="box">
            <textarea name="message" class="box" placeholder="Write your message...." id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
        </form>

    </section>


    <!-- footer section starts  -->

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php#home"> <i class="fas fa-arrow-right"></i> <b> হোম </b></a>
                <a href="index.php#featured"> <i class="fas fa-arrow-right"></i> <b> বইসমূহ </b></a>
                <a href="index.php#arrivals"> <i class="fas fa-arrow-right"></i> <b> নতুন বই </b></a>
            </div>

            <div class="box">
                <h3>About</h3>
                <h2>"জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার - জাবিইপা"।
                    <br>
                    দাওয়াহ'ই মূল উদ্দেশ্য।
                    পাঠাগার থেকে আপনার প্রয়োজনীয় বই বিনামূল্যে নিয়ে পড়তে পারবেন। আর চাইলে আপনার পছন্দের প্রয়োজনীয় বইটি
                    পাঠাগারে উপহার দিতে পারবেন।
                </h2>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> <b> +8801518-306074</b></a>
                <a href="#"> <i class="fa-solid fa-location-dot"></i> <b> রুম নম্বর ১২৪,
                        <br> আ ফ ম কামালউদ্দীন হল,<br> জাহাঙ্গীরনগর বিশ্ববিদ্যালয়
                    </b></a>

            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
        <div class="credit">
            ©২০২২ জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার (জাবিইপা) - সর্ব স্বত্ব সংরক্ষিত। কারিগরি সহায়তায় <a
                href="https://sites.google.com/view/shakiliitju/home"><span>মোঃ শাকিল হোসেন</a></span>
        </div>

    </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>