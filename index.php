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
        <div class="view">
            <a href="" target="_blank"><button type="button" class="btn"  style="text-align: center;">Male Section Booklist</button></a>
        </div>
        <div class="view">
            <a href="" target="_blank"><button type="button" class="btn" style="text-align: center;">Female Section Booklist</button></a>
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
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ডাবল স্ট্যান্ডার্ড ১</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
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
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>খুশু-খুযু</h3>
                        <div class="writer">লেখকঃ ইমাম ইবনুল কায়্যিম রহ</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মানসাঙ্ক</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-11.png" alt="">
                    </div>
                    <div class="content">
                        <h3>বিপদ যখন নিয়ামত</h3>
                        <div class="writer">লেখকঃ শাইখ মূসা জিবরীল ও অন্যান্য</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-12.png" alt="">
                    </div>
                    <div class="content">
                        <h3>আয়নাঘর</h3>
                        <div class="writer">লেখকঃ ড. ইয়াদ আল কুনাইবী</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-13.png" alt="">
                    </div>
                    <div class="content">
                        <h3>A Women From Desert</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-14.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ফজর আর করব না কাজা</h3>
                        <div class="writer">লেখকঃ ড. রাগিব সারজানি</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-15.png" alt="">
                    </div>
                    <div class="content">
                        <h3>শিকড়ের সন্ধানে</h3>
                        <div class="writer">লেখকঃ হামিদা মোবাশ্বেরা</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-16.png" alt="">
                    </div>
                    <div class="content">
                        <h3>মুক্ত বাতাসের খোঁজে </h3>
                        <div class="writer">লেখকঃ লস্ট মডেস্টি টিম</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-18.png" alt="">
                    </div>
                    <div class="content">
                        <h3>যেমন ছিলেন তিনি (স.)</h3>
                        <div class="writer">লেখকঃ শাইখ মুহাম্মাদ সালেহ আল মুনাজ্জিদ</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-19.png" alt="">
                    </div>
                    <div class="content">
                        <h3>কষ্টিপাথর</h3>
                        <div class="writer">লেখকঃ ডা. শামসুল আরেফীন</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-20.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ইসলামি ইতিহাস</h3>
                        <div class="writer">লেখকঃ সংক্ষিপ্ত বিশ্বকোষ টিম</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-22.png" alt="">
                    </div>
                    <div class="content">
                        <h3>হারিয়ে যাওয়া মুক্তো</h3>
                        <div class="writer">লেখকঃ শিহাব আহমেদ তুহিন</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-23.png" alt="">
                    </div>
                    <div class="content">
                        <h3>নিফাক থেকে বাঁচুন</h3>
                        <div class="writer">লেখকঃ ড. ইয়াদ কুনাইবী</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-24.png" alt="">
                    </div>
                    <div class="content">
                        <h3>অন্ধকার থেকে আলোতে</h3>
                        <div class="writer">লেখকঃ মুহাম্মাদ মুশফিকুর রহমান মিনার</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-25.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ইসলামী আকিদা</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-26.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ফুল হয়ে ফোটো</h3>
                        <div class="writer">লেখকঃ শাইখ আহমাদ মুসা জিবরীল</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-27.png" alt="">
                    </div>
                    <div class="content">
                        <h3>সংবিৎ</h3>
                        <div class="writer">লেখকঃ জাকারিয়া মাসুদ</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-28.png" alt="">
                    </div>
                    <div class="content">
                        <h3>হাদীসের নামে জালিয়াতি</h3>
                        <div class="writer">লেখকঃ ডঃ খোন্দকার আব্দুল্লাহ জাহাঙ্গীর</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
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
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-31.png" alt="">
                    </div>
                    <div class="content">
                        <h3>তুমি ফিরবে বলে</h3>
                        <div class="writer">লেখকঃ জাকারিয়া মাসুদ</div>
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

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>আমাদের সম্পর্কে</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/jwel.jpg" alt="">
                    <h3>মোঃ জুয়েল</h3>
                    <h2>সহ পরিচালক</h2>
                    <p>উদ্ভিদবিজ্ঞান<br>৪৮ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

                <div class="swiper-slide box">
                    <img src="image/safayet.jpeg" alt="">
                    <h3>মো. সাফায়েত মীর</h3>
                    <h2>দপ্তর সম্পাদক</h2>
                    <p>গণিত<br>৪৯ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>
                <div class="swiper-slide box">
                    <img src="image/shawon.jpg" alt="">
                    <h3>শাহিদুজ্জামান সরকার শাওন</h3>
                    <h2>অর্থ সম্পাদক</h2>
                    <p>অর্থনীতি<br>৪৯ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

                <div class="swiper-slide box">
                    <img src="image/salehin.jpg" alt="">
                    <h3>সালেহীন নোমান বিন আউয়াল</h3>
                    <h2>বিশ্বকবি রবীন্দ্রনাথ ঠাকুর হল প্রতিনিধি</h2>
                    <p>অর্থনীতি<br>৪৯ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Shakiliitju.jpg" alt="">
                    <h3>মোঃ শাকিল হোসেন</h3>
                    <h2>বিশ্বকবি রবীন্দ্রনাথ ঠাকুর হল প্রতিনিধি</h2>
                    <p>আই আই টি<br>৪৮ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

                <div class="swiper-slide box">
                    <img src="image/shoriful.jpg" alt="">
                    <h3>শরীফুল ইসলাম</h3>
                    <h2>শহীদ সালাম বরকত হল প্রতিনিধি</h2>
                    <p>অর্থনীতি<br>৪৯ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

                <div class="swiper-slide box">
                    <img src="image/tanjid.jpg" alt="">
                    <h3>মো: তানজিদ আহম্মেদ </h3>
                    <h2>শহীদ সালাম বরকত হল প্রতিনিধি</h2>
                    <p>ইতিহাস <br>৪৯ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

                <div class="swiper-slide box">
                    <img src="image/saifullah.jpg" alt="">
                    <h3>খালিদ সাইফুল্লাহ</h3>
                    <h2>পরিচালক</h2>
                    <p>মাইক্রোবায়োলজি<br>৪৭ তম আবর্তন<br>জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</p>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews section ends -->


    <!-- counter section start -->

    <section id="section_counter">
        <div class="container">
            <div class="counter-grid">
                <div class="counter-item">
                    <img src="image/books.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="187">0</h1>
                    <h1>মোট বই</h1>
                </div>
                <div class="counter-item">
                    <img src="image/sudent.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="50">0</h1>
                    <h1>ছাত্র সদস্য</h1>
                </div>
                <!-- <div class="counter-item">
                    <img src="image/female-student.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="15">0</h1>
                    <h1>ছাত্রী সদস্য</h1>
                </div> -->
                <div class="counter-item">
                    <img src="image/member.png" alt="Image" class="counter-img" />
                    <h1 class="counter" data-target="50">0</h1>
                    <h1>মোট সদস্য</h1>
                </div>

            </div>
        </div>
    </section>

    <!-- counter section ends -->

    <!-- footer section starts  -->
    <?php
    include "footer.php";
    ?>
    <!-- footer section ends  -->
</body>

</html>