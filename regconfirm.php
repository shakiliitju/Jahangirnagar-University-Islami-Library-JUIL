<?php
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['department']) && isset($_POST['batch']) && isset($_POST['session']) && isset($_POST['hall']) && isset($_POST['bgroup']) && isset($_POST['gender']) && isset($_POST['address'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $batch = $_POST['batch'];
    $session = $_POST['session'];
    $hall = $_POST['hall'];
    $bgroup = $_POST['bgroup'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
   
    $sql = "insert into members(name,email,phone,department,batch,session,hall,bgroup,gender,address) values('$name','$email','$phone','$department','$batch','$session','$hall','$bgroup','$gender','$address')";
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
    <title>অনলাইন নিবন্ধন - জাবিইপা</title>
    <link rel="shortcut icon" href="/image/juil-logo.ico" type="image/x-icon">

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



    <div class="regconfirm">
        <div class="heading">
            <h3>অভিনন্দন</h3>
        </div>

        <div class="cmnt">
            <h2>জাযাকাল্লাহ খাইরান। আলহামদুলিল্লাহ আমরা আপনার আবেদন পেয়েছি। আবেদনের জন্য আপনাকে ধন্যবাদ। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করবো ইন শা আল্লাহ।</h2>
        </div>
    </div>


    <!-- footer section starts  -->
    <?php
    include "footer.php";
    ?>
    <!-- footer section ends  -->

</body>

</html>