<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>জাবিইপা</title>
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
                <a href="#home">হোম</a>
                <a href="#featured">বইসমূহ</a>
                <a href="#arrivals">নতুন বই</a>
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
        <a href="#home" class="fas fa-home"></a>
        <!-- <a href="#featured" class="fas fa-list"></a> -->
        <!-- <a href="#arrivals" class="fas fa-tags"></a> -->
        <!-- <a href="#reviews" class="fas fa-comments"></a> -->
        <a href="answer.php" class="fa-sharp fa-solid fa-question"></a>
        <a href="contact.php" class="fas fa-envelope"></a>
        <a href="registration.php" class="fa-solid fa-user-plus"></a>
        <a href="login.php" class="fas fa-user"></a>
    </nav>


    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3> ﴾اِقۡرَاۡ بِاسۡمِ رَبِّکَ الَّذِیۡ خَلَقَ ۚ﴿۱ </h3>
                <h2>পাঠ করুন আপনার পালনকর্তার নামে যিনি সৃষ্টি করেছেন।</h2>
                <h1>আল কোরআন [৯৬ঃ০১]</h1>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                   
                    <a href="#" class="swiper-slide"><img src="image/book-18.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-23.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-16.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-31.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-10.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-7.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-17.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                </div>
                <img src="image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->



    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>বইসমূহ</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>বেলা ফুরাবার আগে</h3>
                        <div class="writer">লেখকঃ আরিফ আজাদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ডাবল স্ট্যান্ডার্ড ১</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন </div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>হিজাব আমার পরিচয়</h3>
                        <div class="writer">লেখকঃ জাকারিয়া মাসুদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>এবার ভিন্ন কিছু হোক</h3>
                        <div class="writer">লেখকঃ আরিফ আজাদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ডাবল স্ট্যান্ডার্ড ২.০</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>খুশু-খুযু</h3>
                        <div class="writer">লেখকঃ ইমাম ইবনুল কায়্যিম রহ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মা, মা, মা ও বাবা</h3>
                        <div class="writer">লেখকঃ আরিফ আজাদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মানসাঙ্ক</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>প্রোডাক্টিভ মুসলিম</h3>
                        <div class="writer">লেখকঃ মোহাম্মদ ফারিস</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>রাহে বেলায়েত</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-11.png" alt="">
                    </div>
                    <div class="content">
                        <h3>বিপদ যখন নিয়ামত</h3>
                        <div class="writer">লেখকঃ শাইখ মূসা জিবরীল ও অন্যান্য</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-12.png" alt="">
                    </div>
                    <div class="content">
                        <h3>আয়নাঘর</h3>
                        <div class="writer">লেখকঃ ড. ইয়াদ আল কুনাইবী</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-13.png" alt="">
                    </div>
                    <div class="content">
                        <h3>A Women From Desert</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-14.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ফজর আর করব না কাজা</h3>
                        <div class="writer">লেখকঃ ড. রাগিব সারজানি</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-15.png" alt="">
                    </div>
                    <div class="content">
                        <h3>শিকড়ের সন্ধানে</h3>
                        <div class="writer">লেখকঃ হামিদা মোবাশ্বেরা</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-16.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মুক্ত বাতাসের খোঁজে </h3>
                        <div class="writer">লেখকঃ লস্ট মডেস্টি টিম</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-17.png" alt="">
                    </div>
                    <div class="content">
                        <h3>কুররাতু আইয়ুন</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-18.png" alt="">
                    </div>
                    <div class="content">
                        <h3>যেমন ছিলেন তিনি (স.)</h3>
                        <div class="writer">লেখকঃ শাইখ মুহাম্মাদ সালেহ আল মুনাজ্জিদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-19.png" alt="">
                    </div>
                    <div class="content">
                        <h3>কষ্টিপাথর</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-20.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ইসলামি ইতিহাস</h3>
                        <div class="writer">লেখকঃ সংক্ষিপ্ত বিশ্বকোষ টিম</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-21.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মুহসিনীন</h3>
                        <div class="writer">লেখকঃ ইনবাত টিম</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-22.png" alt="">
                    </div>
                    <div class="content">
                        <h3>হারিয়ে যাওয়া মুক্তো</h3>
                        <div class="writer">লেখকঃ শিহাব আহমেদ তুহিন</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-23.png" alt="">
                    </div>
                    <div class="content">
                        <h3>নিফাক থেকে বাঁচুন</h3>
                        <div class="writer">লেখকঃ ড. ইয়াদ কুনাইবী</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-24.png" alt="">
                    </div>
                    <div class="content">
                        <h3>অন্ধকার থেকে আলোতে</h3>
                        <div class="writer">লেখকঃ মুহাম্মাদ মুশফিকুর রহমান মিনার</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-25.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ইসলামী আকিদা</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-26.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ফুল হয়ে ফোটো</h3>
                        <div class="writer">লেখকঃ শাইখ আহমাদ মুসা জিবরীল</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-27.png" alt="">
                    </div>
                    <div class="content">
                        <h3>সংবিৎ</h3>
                        <div class="writer">লেখকঃ জাকারিয়া মাসুদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-28.png" alt="">
                    </div>
                    <div class="content">
                        <h3>হাদীসের নামে জালিয়াতি</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-29.png" alt="">
                    </div>
                    <div class="content">
                        <h3>আর রাহীকুল মাখতূম</h3>
                        <div class="writer">লেখকঃ শফিউর রহমান মোবারকপুরী</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-31.png" alt="">
                    </div>
                    <div class="content">
                        <h3>তুমি ফিরবে বলে</h3>
                        <div class="writer">লেখকঃ  জাকারিয়া মাসুদ</div>
                        <a href="#" class="btn">ধার নিন</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->



    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>নতুন বই</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ডাবল স্ট্যান্ডার্ড ২.০</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>রাহে বেলায়েত</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>হিজাব আমার পরিচয়</h3>
                        <div class="writer">লেখকঃ জাকারিয়া মাসুদ</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>এবার ভিন্ন কিছু হোক</h3>
                        <div class="writer">লেখকঃ আরিফ আজাদ</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-29.png" alt="">
                    </div>
                    <div class="content">
                        <h3>আর রাহীকুল মাখতূম</h3>
                        <div class="writer">লেখকঃ শফিউর রহমান মোবারকপুরী</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-17.png" alt="">
                    </div>
                    <div class="content">
                        <h3>কুররাতু আইয়ুন</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-16.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মুক্ত বাতাসের খোঁজে</h3>
                        <div class="writer">লেখকঃ লস্ট মডেস্টি টিম</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-21.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মুহসিনীন</h3>
                        <div class="writer">লেখকঃ ইনবাত টিম</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মা, মা, মা ও বাবা</h3>
                        <div class="writer">লেখকঃ আরিফ আজাদ</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>প্রোডাক্টিভ মুসলিম</h3>
                        <div class="writer">লেখকঃ মোহাম্মদ ফারিস</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->


    <!-- reviews section starts  -->

    <!-- <section class="reviews" id="reviews">

        <h1 class="heading"> <span>রিভিউ</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- reviews section ends -->


    <!-- counter section start -->

    <section id="section_counter">
        <div class="container">
            <div class="counter-grid">
                <div class="counter-item">
                    <img src="image/books.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="169">0</h1>
                    <h1>মোট বই</h1>
                </div>
                <div class="counter-item">
                    <img src="image/sudent.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="15">0</h1>
                    <h1>ছাত্র সদস্য</h1>
                </div>
                <div class="counter-item">
                    <img src="image/female-student.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="15">0</h1>
                    <h1>ছাত্রী সদস্য</h1>
                </div>
                <div class="counter-item">
                    <img src="image/member.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="30">0</h1>
                    <h1>মোট সদস্য</h1>
                </div>

            </div>
        </div>
    </section>

    <!-- counter section ends -->


    <!-- footer section starts  -->

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> <b> হোম </b></a>
                <a href="#featured"> <i class="fas fa-arrow-right"></i> <b> বইসমূহ </b></a>
                <a href="#arrivals"> <i class="fas fa-arrow-right"></i> <b> নতুন বই </b></a>
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
                <!-- <a href="#"> <i class="fas fa-envelope"></i> <b>  </b></a> -->

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