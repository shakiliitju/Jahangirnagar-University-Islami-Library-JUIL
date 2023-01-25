<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বইয়ের তালিকা - জাবিইপা</title>
    <link rel="shortcut icon" href="image/juil-logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/899adf5c9e.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    <header class="header">
        <div class="header-1">
            <div class="logo">
                <a href="https://juislamiclibrary.com/">
                    <img src="image/juil-logo.png" alt="logo">
                </a>
            </div>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="আপনার পছন্দের বই খুঁজুন..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="https://www.facebook.com/groups/395317002159903/" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </div>


        <div class="header-2">

            <nav class="navbar">
                <a href="index.php">হোম</a>
                <a href="index.php#featured">বইসমূহ</a>
                <a href="index.php#arrivals">নতুন বই</a>
                <a href="index.php#reviews">আমাদের সম্পর্কে</a>
                <a href="answer.php">প্রশ্ন ও উত্তর</a>
                <a href="registration.php">নিবন্ধন</a>
                <a href="contact.php">যোগাযোগ</a>
                <a href="login.php">লগইন</a>
            </nav>
        </div>

    </header>


    <!-- bottom navbar starts -->

    <nav class="bottom-navbar">
        <a href="index.php" class="fas fa-home"></a>
        <!-- <a href="#featured" class="fas fa-list"></a> -->
        <!-- <a href="#arrivals" class="fas fa-tags"></a> -->
        <!-- <a href="#reviews" class="fas fa-comments"></a> -->
        <a href="answer.php" class="fa-sharp fa-solid fa-question"></a>
        <a href="contact.php" class="fas fa-envelope"></a>
        <a href="registration.php" class="fa-solid fa-user-plus"></a>
    </nav>

    <!-- bottom navbar  ends-->
    <!-- header section ends -->


    <div class="mbooklist">
        <div class="heading">
            <h3><b>জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার</b></h3>
            <h4>সাভার, ঢাকা-১৩৪২</h4>
        </div>
    </div>

    <section class="mbooklist">

        <h3 class="booklist">Male Section Booklist</h3>

            <table class="table table-bordered">
                <thead>
                    <tr class="info">
                        <th>বই নং</th>
                        <th>বইয়ের নাম</th>
                        <th>লেখক/সম্পাদক</th>
                        <th>প্রকাশনী</th>
                        <th>পৃষ্ঠা</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>০১</th>
                        <td>প্রোডাক্টিভ মুসলিম</td>
                        <td>মোহাম্মদ ফারিস</td>
                        <td>গার্ডিয়ান পাবলিকেশন্স</td>
                        <td>২৫০</td>
                    </tr>
                    <tr class="success">
                        <th>০২</th>
                        <td>বেলা ফুরাবার আগে</td>
                        <td>আরিফ আজাদ</td>
                        <td>সমকালীন প্রকাশন</td>
                        <td>১৮৮</td>
                    </tr>
                    <tr class="danger">
                        <th>০৩</th>
                        <td>এবার ভিন্ন কিছু হোক</td>
                        <td>আরিফ আজাদ</td>
                        <td>সমকালীন প্রকাশন</td>
                        <td>১৯৪</td>
                    </tr>
                    <tr class="active">
                        <th>০৪</th>
                        <td>মা, মা, মা ও বাবা</td>
                        <td>সম্পাদনা: আরিফ আজাদ</td>
                        <td>সমকালীন প্রকাশন</td>
                        <td>১৭৫</td>
                    </tr>
                    <tr class="info">
                        <th>০৫</th>
                        <td>ডাবল স্ট্যান্ডার্ড ২.০</td>
                        <td>ডা. শামসুল আরেফীন</td>
                        <td>সত্যায়ন প্রকাশন</td>
                        <td>২৯০</td>
                    </tr>
                    <tr class="warning">
                        <th>০৬</th>
                        <td>মানসাঙ্ক</td>
                        <td>ডা. শামসুল আরেফীন</td>
                        <td>সমর্পণ প্রকাশন</td>
                        <td>১৬৪</td>
                    </tr>
                    <tr>
                        <th>০৭</th>
                        <td>ফজর আর করব না কাজা</td>
                        <td>ড. রাগিব সারজানি</td>
                        <td>মাকতাবাতুল হাসান</td>
                        <td>১৮৮</td>
                    </tr>
                    <tr class="success">
                        <th>০৮</th>
                        <td>সিক্রেট অব জায়োনিজম</td>
                        <td>হেনরি ফোর্ড</td>
                        <td>গার্ডিয়ান পাবলিকেশন্স</td>
                        <td>২৯৫</td>
                    </tr>
                    <tr class="danger">
                        <th>০৯</th>
                        <td>ফিতনার যুগে করণীয়</td>
                        <td>ডা. শাইখ মুহাম্মদ ইসমাইল আল-মুকাদ্দাম</td>
                        <td>ইহসান পাবলিকেশন</td>
                        <td>১৯৬</td>
                    </tr>
                    <tr class="active">
                        <th>১০</th>
                        <td>প্রচলিত ভুল</td>
                        <td>মাওলানা মুহাম্মাদ আব্দুল মালেক</td>
                        <td>মারকাযুদ দাওয়াহ আলইসলামিয়া</td>
                        <td>২১৫</td>
                    </tr>
                    <tr class="info">
                        <th>১১</th>
                        <td>ইঞ্জিল ও প্রচলিত ইঞ্জিল</td>
                        <td>মাওলানা মুনশী মুহাম্মদ মহিউদ্দিন</td>
                        <td>মারকাযুদ দাওয়াহ আলইসলামিয়া</td>
                        <td>১৫৯</td>
                    </tr>
                    <tr class="warning">
                        <th>১২</th>
                        <td>হারিয়ে যাওয়া মুক্তো</td>
                        <td>শিহাব আহমেদ তুহিন</td>
                        <td>সমর্পণ প্রকাশন</td>
                        <td>১৫৮</td>
                    </tr>
                    <tr>
                        <th>১৩</th>
                        <td>হিজাব আমার পরিচয়</td>
                        <td>জাকারিয়া মাসুদ</td>
                        <td>সন্দীপন প্রকাশন</td>
                        <td>৮৮</td>
                    </tr>
                    <tr class="success">
                        <th>১৪</th>
                        <td>শয়তানের ফাঁদ </td>
                        <td>ড. আব্দুল্লাহ আল খাতির</td>
                        <td>নুসুস পাবলিকেশন</td>
                        <td>২৩</td>
                    </tr>
                    <tr class="danger">
                        <th>১৫</th>
                        <td>মুসলিমদের পরাজিত মানসিকতা</td>
                        <td>ড. আব্দুল্লাহ আল খাতির</td>
                        <td>নুসুস পাবলিকেশন</td>
                        <td>৩৮</td>
                    </tr>
                    <tr class="active">
                        <th>১৬</th>
                        <td>কিয়ামুল লাইল ওয়াত তাহাজ্জুদ</td>
                        <td>ইমাম আবু বকর মুহাম্মাদ আল-আজুররি</td>
                        <td>সীরাত পাবলিকেশন</td>
                        <td>৫৭</td>
                    </tr>
                    <tr class="info">
                        <th>১৭</th>
                        <td>যুবকদের বাঁচাও </td>
                        <td>শাইখ আলী তানতাবী</td>
                        <td>হুদহুদ প্রকাশন</td>
                        <td>৩২</td>
                    </tr>
                    <tr class="warning">
                        <th>১৮</th>
                        <td>মুহসিনীন</td>
                        <td>ইনবাত টিম</td>
                        <td>ইনবাত পাবলিকেশন</td>
                        <td>২৮৯</td>
                    </tr>
                    <tr>
                        <th>১৯</th>
                        <td>মুক্ত বাতাসের খোঁজে </td>
                        <td>লস্ট মডেস্টি টিম</td>
                        <td>ইলমহাউস প্রকাশন </td>
                        <td>২২৮</td>
                    </tr>
                    <tr class="success">
                        <th>২০</th>
                        <td>আর রাহীকুল মাখতূম</td>
                        <td>শফিউর রহমান মোবারকপুরী</td>
                        <td>আনোয়ার লাইব্রেরী</td>
                        <td>৮৬৩</td>
                    </tr>
                    <tr class="danger">
                        <th>২১</th>
                        <td>জীবনকে উপভোগ করুন</td>
                        <td>ড. মুহাম্মাদ ইবনে আব্দুর রহমান আরিফী</td>
                        <td>মাতাবাতুল আযীয</td>
                        <td>৫৭৫</td>
                    </tr>
                    <tr class="active">
                        <th>২২</th>
                        <td>বাইবেল, কুরআন ও বিজ্ঞান</td>
                        <td>ড. মরিস বুকাইলি</td>
                        <td>দারুস সালাম বাংলাদেশ</td>
                        <td>৩২৪</td>
                    </tr>
                    <tr class="info">
                        <th>২৩</th>
                        <td>অন্ধকার থেকে আলোতে</td>
                        <td>মুহাম্মাদ মুশফিকুর রহমান মিনার</td>
                        <td>সমর্পণ প্রকাশন</td>
                        <td>১৮৬</td>
                    </tr>
                    <tr class="warning">
                        <th>২৪</th>
                        <td>জীবনের ক্যানভাসে আঁকা গল্প</td>
                        <td>মুহাম্মাদ আতীক উল্লাহ</td>
                        <td>মাকতাবাতুল আযহার</td>
                        <td>১২৮</td>
                    </tr>
                    <tr>
                        <th>২৫</th>
                        <td>শোনো হে যুবক</td>
                        <td>ড. রাগিব সারজানি</td>
                        <td>মাকতাবাতুল হাসান</td>
                        <td>৭৮</td>
                    </tr>
                    <tr class="success">
                        <th>২৬</th>
                        <td>আমরা সেই জাতি</td>
                        <td>ড. রাগিব সারজানি</td>
                        <td>মাকতাবাতুল হাসান</td>
                        <td>৭২</td>
                    </tr>
                    <tr class="danger">
                        <th>২৭</th>
                        <td>পড়তে ভালোবাসি</td>
                        <td>ড. রাগিব সারজানি</td>
                        <td>মাকতাবাতুল হাসান</td>
                        <td>৫৬</td>
                    </tr>
                    <tr class="active">
                        <th>২৮</th>
                        <td>ওসওয়ায়ে রসূলে আকরাম (স)</td>
                        <td></td>
                        <td>মদীনা পাবলিকেশন্স</td>
                        <td>৪২৪</td>
                    </tr>
                    <tr class="info">
                        <th>২৯</th>
                        <td>দলীলসহ মাসনূন দু'আ ও আমল</td>
                        <td>মুফতী মুহাম্মাদ মাহদী হাসান</td>
                        <td>দারুল কুরআন</td>
                        <td>১৭২</td>
                    </tr>
                    <tr class="warning">
                        <th>৩০</th>
                        <td>কুরআন সুন্নাহর আলোকে আমার আপনজন</td>
                        <td>মুফতী মুহাম্মাদ মাহদী হাসান</td>
                        <td>দারুল কুরআন</td>
                        <td>১৪৪</td>
                    </tr>
                    <tr>
                        <th>৩১</th>
                        <td>আত্মার ব্যাধি ও প্রতিকার</td>
                        <td>শাহ হাকীম মুহাম্মদ আখতার রহ.</td>
                        <td>হাকীমুল উম্মত প্রকাশনী</td>
                        <td>২৮২</td>
                    </tr>
                    <tr class="success">
                        <th>৩২</th>
                        <td>শান্তিময় পারিবারিক জীবন</td>
                        <td>শাহ হাকীম মুহাম্মদ আখতার রহ.</td>
                        <td>হাকীমুল উম্মত প্রকাশনী</td>
                        <td>১৩৬</td>
                    </tr>
                    <tr class="danger">
                        <th>৩৩</th>
                        <td>অহংকার ও প্রতিকার</td>
                        <td>শাহ হাকীম মুহাম্মদ আখতার রহ.</td>
                        <td>হাকীমুল উম্মত প্রকাশনী</td>
                        <td>৮৮</td>
                    </tr>
                    <tr class="active">
                        <th>৩৪</th>
                        <td>কুদৃষ্টি-কুসম্পর্কের ভয়াবহ ক্ষতি ও প্রতিকার</td>
                        <td>শাহ হাকীম মুহাম্মদ আখতার রহ.</td>
                        <td>হাকীমুল উম্মত প্রকাশনী</td>
                        <td>৪০</td>
                    </tr>
                    <tr class="info">
                        <th>৩৫</th>
                        <td>হিন্দু ভাই-বোনদের জন্য ভালোবাসার উপহার </td>
                        <td>মুফতি মুজিবুর রহমান কাসেমি</td>
                        <td>ইনসানিয়াত প্রকাশনী</td>
                        <td>৩২</td>
                    </tr>
                    <tr class="warning">
                        <th>৩৬</th>
                        <td>৫০ কোটি হিন্দুর ভগবান অবশেষে মুসলমান</td>
                        <td>মুফতি মুজিবুর রহমান কাসেমি</td>
                        <td>ইনসানিয়াত প্রকাশনী</td>
                        <td>১৬</td>
                    </tr>
                    <tr>
                        <th>৩৭</th>
                        <td>হিন্দুদের মাঝে দাওয়াতের চমৎকার পদ্ধতি</td>
                        <td>মুফতি মুজিবুর রহমান কাসেমি</td>
                        <td>ইনসানিয়াত প্রকাশনী</td>
                        <td>১৬</td>
                    </tr>
                    <tr class="success">
                        <th>৩৮</th>
                        <td>খ্রিস্টান ভাইদের মাঝে দাওয়াত</td>
                        <td>মুহাম্মদ ইবনে আব্দুল্লাহ</td>
                        <td>তাহিয়্যাত প্রকাশনী</td>
                        <td>০৮</td>
                    </tr>
                    <tr class="danger">
                        <th>৩৯</th>
                        <td>আপনার সমীপে আপনার আমানত</td>
                        <td>কালীম সিদ্দিকী</td>
                        <td>দাওয়াহ্ প্রকাশন</td>
                        <td>৩১</td>
                    </tr>
                    <tr class="active">
                        <th>৪০</th>
                        <td>সীরাতুন নবি (স)-১</td>
                        <td>শাইখ ইবরাহীম আলি</td>
                        <td>মাকতাবাতুল বায়ান</td>
                        <td>২৫৬</td>
                    </tr>
                    <tr class="info">
                        <th>৪১</th>
                        <td>সীরাতুন নবি (স)-২</td>
                        <td>শাইখ ইবরাহীম আলি</td>
                        <td>মাকতাবাতুল বায়ান</td>
                        <td>২৬৭</td>
                    </tr>
                    <tr class="warning">
                        <th>৪২</th>
                        <td>সীরাতুন নবি (স)-৩</td>
                        <td>শাইখ ইবরাহীম আলি</td>
                        <td>মাকতাবাতুল বায়ান</td>
                        <td>২২৬</td>
                    </tr>
                    <tr>
                        <th>৪৩</th>
                        <td>সীরাতুন নবি (স)-৪</td>
                        <td>শাইখ ইবরাহীম আলি</td>
                        <td>মাকতাবাতুল বায়ান</td>
                        <td>৩২৭</td>
                    </tr>
                    <tr class="success">
                        <th>৪৪</th>
                        <td>যেমন ছিলেন তিনি (স)-১</td>
                        <td>শাইখ মুহাম্মাদ সালেহ আল মুনাজ্জিদ</td>
                        <td>রুহামা পাবলিকেশন</td>
                        <td>৬৭৫</td>
                    </tr>
                    <tr class="danger">
                        <th>৪৫</th>
                        <td>যেমন ছিলেন তিনি (স)-২</td>
                        <td>শাইখ মুহাম্মাদ সালেহ আল মুনাজ্জিদ</td>
                        <td>রুহামা পাবলিকেশন</td>
                        <td>৪৭১</td>
                    </tr>
                    <tr class="active">
                        <th>৪৬</th>
                        <td>উসওয়াতুল লিল আলামিন</td>
                        <td>ড. রাগিব সারজানি</td>
                        <td>মাকতাবাতুল হাসান</td>
                        <td>৬৩৫</td>
                    </tr>
                    <tr class="info">
                        <th>৪৭</th>
                        <td>মহানবী (স)</td>
                        <td>মাজিদা রিফা</td>
                        <td>রাহবার</td>
                        <td>৪৮০</td>
                    </tr>
                    <tr class="warning">
                        <th>৪৮</th>
                        <td>লিসানুল কুরআন-১</td>
                        <td>আয়েশা সিদ্দিকা মাদরাসা, পাকিস্তান</td>
                        <td>মাকতাবাতুদ দাওয়াহ</td>
                        <td>২১৫</td>
                    </tr>
                    <tr>
                        <th>৪৯</th>
                        <td>লিসানুল কুরআন-২</td>
                        <td>আয়েশা সিদ্দিকা মাদরাসা, পাকিস্তান</td>
                        <td>মাকতাবাতুদ দাওয়াহ</td>
                        <td>৩৩৪</td>
                    </tr>
                    <tr class="success">
                        <th>৫০</th>
                        <td>লিসানুল কুরআন-৩</td>
                        <td>আয়েশা সিদ্দিকা মাদরাসা, পাকিস্তান</td>
                        <td>মাকতাবাতুদ দাওয়াহ</td>
                        <td>৪৮৬</td>
                    </tr>
                    <tr class="danger">
                        <th>৫১</th>
                        <td>আল-কুরআানের ভাষা</td>
                        <td>এস এম নাহিদ হাসান</td>
                        <td>ওয়াফি পাবলিকেশন</td>
                        <td>৩৯৩</td>
                    </tr>
                    <tr class="active">
                        <th>৫২</th>
                        <td>কুরআনের মানচিত্র</td>
                        <td>ড. শাওকি আল খলিল</td>
                        <td>মুসলিম ভিলেজ</td>
                        <td>২৭৭</td>
                    </tr>
                    <tr class="info">
                        <th>৫৩</th>
                        <td>ইসলামী ভূগোল</td>
                        <td>মাওলানা মুহাম্মাদ হেমায়েত উদ্দীন</td>
                        <td>ইতিহাস ও ভূগোল প্রকাশন</td>
                        <td>৪০০</td>
                    </tr>
                    <tr class="warning">
                        <th>৫৪</th>
                        <td>সিন্ধু থেকে বঙ্গ-১</td>
                        <td>মনযূর আহমাদ</td>
                        <td>চেতনা</td>
                        <td>৫৭১</td>
                    </tr>
                    <tr>
                        <th>৫৫</th>
                        <td>সিন্ধু থেকে বঙ্গ-২</td>
                        <td>মনযূর আহমাদ</td>
                        <td>চেতনা</td>
                        <td>৫১০</td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="success">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="danger">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="info">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="warning">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>



                </tbody>
            </table>
    </section>

    <!-- footer section starts  -->
    <?php
    include "footer.php";
    ?>
    <!-- footer section ends  -->

</body>

</html>