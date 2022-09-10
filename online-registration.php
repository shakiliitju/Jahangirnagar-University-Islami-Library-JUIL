<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অনলাইন নিবন্ধন - জাবিইপা</title>
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


    <div class="online-registration">
        <div class="heading">
            <h3>নতুন সদস্য নিবন্ধন</h3>
        </div>
    </div>

    <section class="online-registration">

        <form action="regconfirm.php" method="post">
            <h3 class="cnt">Registration Form</h3>
            
            <label for="name">Your Name: </label>
            <input type="text" name="name" required placeholder="name" class="box">
    
            <label for="name">Your Email: </label>
            <input type="email" name="email" required placeholder="email" class="box">

            <label for="phone">Your Phone Number: </label>
            <input type="number" name="phone" required placeholder="phone number" class="box">
            
            <label for="department">Your Department: </label>
            <input type="text" name="department" required placeholder="department" class="box">
            
            <label for="batch">Your Batch: </label>
            <input type="text" name="batch" required placeholder="batch" class="box">
            
            <label for="session">Your Session: </label>
            <input type="text" name="session" required placeholder="session" class="box">
            
            <label for="hall">Your Hall Name: </label>
            <input type="text" name="hall" required placeholder="hall" class="box">
            
            <label for="bgroup">Your Blood Group: </label>
            <input type="text" name="bgroup" placeholder="blood group" class="box">
            
            <label for="gender">Your Gender: </label>
            <select name="gender" class="box">
                <option value="none" selected>Choose Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            
            <label for="address">Your Permanent Address: </label>
            <textarea name="address" class="box" required placeholder="village, postoffice, upazila, district" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Send" name="send" class="btn">
        </form>

    </section>

    <!-- footer section starts  -->
    <?php
    include "footer.php";
    ?>
    <!-- footer section ends  -->

</body>

</html>