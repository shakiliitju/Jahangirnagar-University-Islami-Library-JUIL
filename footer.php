    <!-- footer section starts  -->

    <div class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"> <i class="fas fa-arrow-right"></i> <b> হোম </b></a>
                <!-- <a href="index.php#featured"> <i class="fas fa-arrow-right"></i> <b> বইসমূহ </b></a>
                <a href="index.php#arrivals"> <i class="fas fa-arrow-right"></i> <b> নতুন বই </b></a> -->
                <a href="answer.php"> <i class="fas fa-arrow-right"></i> <b> প্রশ্ন ও উত্তর </b></a>
                <a href="registration.php"> <i class="fas fa-arrow-right"></i> <b> নিবন্ধন </b></a>
                <a href="contact.php"> <i class="fas fa-arrow-right"></i> <b> যোগাযোগ </b></a>
            </div>

            <div class="box">
                <h3>About</h3>
                <h2>"জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার - জাবিইপা"।
                    <br>
                    দাওয়াহ'ই মূল উদ্দেশ্য। পাঠাগার থেকে আপনার প্রয়োজনীয় বই বিনামূল্যে নিয়ে পড়তে পারবেন। আর চাইলে আপনার পছন্দের প্রয়োজনীয় বইটি পাঠাগারে উপহার দিতে পারবেন।
                </h2>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> <b> +8801518-306074</b></a>
                <a href="mailto: juislamiclibrary@gmail.com"> <i class="fas fa-envelope"></i><b>juislamiclibrary@gmail.com</b></a>
                <a href="https://goo.gl/maps/Gaa2BGgTNqAeQKye7" target="_blank"> <i class="fa-solid fa-location-dot"></i> <b> রুম নম্বর ১২৪,
                        <br> আ ফ ম কামালউদ্দীন হল,<br> জাহাঙ্গীরনগর বিশ্ববিদ্যালয়
                    </b></a>
            </div>

        </div>

        <div class="share">
            <a href="https://www.facebook.com/JUIL2022/" target="_blank" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
        <div class="credit">
            ©২০২২ জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ইসলামি পাঠাগার (জাবিইপা) - সর্ব স্বত্ব সংরক্ষিত। কারিগরি সহায়তায় <a href="https://www.facebook.com/shakiliitju/" target="_blank"><span>মোঃ শাকিল হোসেন</a></span>
        </div>
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        //<![CDATA[

        ! function(e, t, a) {
            function n() {
                c(".heart{width: 15px;height: 15px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -7px;}.heart:before{left: -7px;}"), o(), r()
            }

            function r() {
                for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999");
                requestAnimationFrame(r)
            }

            function o() {
                var t = "function" == typeof e.onclick && e.onclick;
                e.onclick = function(e) {
                    t && t(), i(e)
                }
            }

            function i(e) {
                var a = t.createElement("div");
                a.className = "heart", d.push({
                    el: a,
                    x: e.clientX - 5,
                    y: e.clientY - 5,
                    scale: 1,
                    alpha: 1,
                    color: s()
                }), t.body.appendChild(a)
            }

            function c(e) {
                var a = t.createElement("style");
                a.type = "text/css";
                try {
                    a.appendChild(t.createTextNode(e))
                } catch (t) {
                    a.styleSheet.cssText = e
                }
                t.getElementsByTagName("head")[0].appendChild(a)
            }

            function s() {
                return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")"
            }
            var d = [];
            e.requestAnimationFrame = function() {
                return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function(e) {
                    setTimeout(e, 1e3 / 60)
                }
            }(), n()
        }(window, document);

        //]]>
    </script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- footer section ends  -->