<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>নিবন্ধন - জাবিইপা</title>
    <link rel="shortcut icon" href="image/juil-logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/899adf5c9e.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <meta name="keywords" content="জাবিইপা" />
    <meta name="description" content="জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="হোম  -  জাবিইপা">
    <meta name="twitter:description" content="জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার">
    <meta property="og:title" content="হোম  -  জাবিইপা" />
    <meta property="og:site_name" content="জাবিইপা" />
    <meta property="og:description" content="জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার" />
    <meta property="og:url" content="https://www.juislamiclibrary.com/" />
    <meta property="og:image" content="" />

    <script type="text/javascript">
        function disableselect(e) {
            return false
        }

        function reEnable() {
            return true
        }

        //if IE4+  
        document.onselectstart = new Function("return false")
        document.oncontextmenu = new Function("return false")
        //if NS6  
        if (window.sidebar) {
            document.onmousedown = disableselect
            document.onclick = reEnable
        }
    </script>
</head>

<body>

    <!-- header section starts  -->
    <?php
    include "header.php";
    ?>
    <!-- header section ends -->


    <div class="registration">
        <div class="heading">
            <h3>নতুন সদস্য নিবন্ধন</h3>
        </div>
        <div class="condition">
            <h3>সদস্য হওয়ার নিয়মাবলীঃ</h3>
            <p>১. পাঠাগার থেকে নির্ধারিত ফরম সংগ্রহ করে, যথাযথ পূরণ করে জমা দিতে হবে।</p>
            <p>২. সদস্য ফি বাবদ কোনো টাকা প্রদান করতে হবে না। তবে যেকোনো পরিমাণ টাকা অথবা প্রয়োজনীয় বই দিলে তা সাদরে
                গ্রহণ করা হবে।</p>
            <p>৩. পাঠাগারের সাধারণ কার্য সভায় অবশ্যই উপস্থিত থাকতে হবে (বোনদের জন্য প্রযোজ্য নয়)।</p>
            <p>৪. পাঠাগারের বিভিন্ন কার্যক্রমে স্বতঃস্ফূর্তভাবে অংশগ্রহণ করতে হবে। </p>
            <p>৫. পাঠাগারের নিয়ম বহির্ভূত কোনো কার্যক্রমে জড়িত হলে তার সদস্য পদ বাতিল করা হবে।</p>
        </div>
        <div class="form">
            <p>উপরোক্ত শর্তসমূহে রাজি থাকলে নিচের ফরমটি ডাউনলোড করে, প্রিন্ট করে, পূরণ করে আমাদের কাছে জমা দেওয়ার
                অনুরোধ জানাচ্ছি।</p>
            <div class="download">
                <a href="Registration-Form.pdf" target="_blank"> <button type="button" class="btn">Download Form</button></a>
            </div>
        </div>
        <div class="condition">
            <h3>অনলাইন রেজিস্ট্রেশন</h3>
        </div>
        <div class="form">
            <p>অনলাইনে রেজিস্ট্রেশন করতে নিচের Register বাটন চাপুন।</p>
            <div class="online-form">
                <a href="online-registration.php"> <button type="button" class="btn">Register</button></a>
            </div>
        </div>
    </div>

    <!-- footer section starts  -->
    <?php
    include "footer.php";
    ?>
    <!-- footer section ends  -->

</body>

</html>