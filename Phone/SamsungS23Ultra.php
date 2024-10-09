<?php
 include("./env.php");

$db = new mysqli($env_server, $env_username,  $env_password, $env_database, $env_port);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>S23 Ultra | PhoneGuru</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/venobox.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" media="all" />
    <link href="css/owl-carousel/owl.theme.css" rel="stylesheet" media="all" />
    <link href="css/owl-carousel/owl.transitions.css" rel="stylesheet" media="all" />
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>

<body>
    <div class="loader">
        <div class="loader-inner">
            <div class="bounce">
                <div class="bounce-circle"></div>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wrapper home">
        
        <div class="blurred-content"></div>
        <div class="container spacer-xlg">
            <div class="row ">
                <div class="col-lg-9 my-order-switch-1 ">
                    <section id="home" class="shadow bg-dark radius-2 padding-dy text-center ">
                        <div class="row v-height-50 v-centred">
                            <div class="col-md-12">
                                <h1 class="font-weight-600 mb-0">Samsung <mark>S23 Ultra
                              </mark>
                                </h1>
                                <div class="text-rotation">
                                    <div class="item">
                                        <h6 class="h5 text-alt mt-1 mb-0 "> <span class=" text-rotating">Samsung, Exclusive Range, ₹ 124999 /-</span></h6>
                                    </div>
                                </div>
                                <ul class="list-inline  mb-0 mt-4">
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.facebook.com/SamsungIndia">
                                            <span class="fab fa-facebook-f btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.samsung.com/in/smartphones/galaxy-s23-ultra/buy/">
                                            <span class="fab fa-google btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://twitter.com/samsungindia">
                                            <span class="fab fa-twitter btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.instagram.com/samsungindia/">
                                            <span class="fab fa-instagram btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.amazon.in/Samsung-Galaxy-Ultra-Green-Storage/dp/B0BT9CXXXX/ref=sr_1_1_sspa?keywords=samsung+s23+ultra+5g&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
                                            <span class="fab fa-amazon btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://youtu.be/BSYsXVFzmKA">
                                            <span class="fab fa-youtube btn-icon-inner"></span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 mb-6">
                                <hr class="divider divider-lg divider-center ">
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-left" href="https://www.amazon.in/Samsung-Galaxy-Ultra-Green-Storage/dp/B0BT9CXXXX/ref=sr_1_1_sspa?keywords=samsung+s23+ultra+5g&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2 mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-amazon btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Purchase Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-md-right" href="https://youtu.be/oQlO8qss2VI">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2  mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-youtube btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Watch Review</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section id="about" class="shadow bg-dark radius-2 padding-dy">
                        <div class="row mb-5">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">About Phone</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <h1 class="font-weight-600 mb-0">S23 <mark>Ultra</mark></h1>
                                <h6 class="h5 text-alt">Samsung</h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <p>Samsung's Galaxy S22 Ultra was, and still is, a very capable smartphone. However, it was more about merging the Note line and Galaxy line above anything else. We finally had a well-integrated S Pen in a camera-oriented
                                    Galaxy S series smartphone. It was the ultimate Samsung smartphone, with nothing left out, priced from Rs. 1,09,999. Rather than going for a complete overhaul this year with the Galaxy S23 Ultra, Samsung has created
                                    a device that will feel very familiar to a Galaxy S22 Ultra user, but with a twist.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>The Samsung Galaxy S23 Ultra uses a brand-new primary camera sensor to enable a better imaging experience, and a Qualcomm SoC that has been customised to (hopefully) deliver better performance. However, all of this comes
                                    at a higher asking price, which I'm sure fans would not mind coughing up. Should you upgrade to the latest Ultra, or stick to the one that you might have?
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class="text-center info-list font-size-14 p-2 list-inline  mb-0">
                                            <li><span class="inf">Name </span> <span class="value">S23 Ultra</span></li>
                                            <li><span class="inf">Launch</span> <span class="value"> 2023, February 01</span></li>
                                            <li><span class="inf">Technology</span> <span class="value"> GSM / LTE / 5G</span></li>
                                            <li><span class="inf">Dimensions</span> <span class="value"> 163.4 x 78.1 x 8.9 mm </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class=" text-center info-list p-2 font-size-14 list-inline mb-0">
                                            <li><span class="inf">Weight</span> <span class="value">234 g (8.25 oz)</span></li>
                                            <li><span class="inf">Build</span> <span class="value"> Gorilla Glass Victus 2</span></li>
                                            <li><span class="inf">SIM</span> <span class="value">Nano-SIM and eSIM or Dual SIM</span></li>
                                            <li><span class="inf">Protection</span> <span class="value">IP68 dust/water resistant</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 mt-6">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Phone Specs</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row vc skill des mb-5">
                            <div class="col-md-11">
                                <ul class="skills-list list-inline mb-0">
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Chipset</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Snapdragon 8 Gen 2</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                99%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">CPU</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Octa core (3.36 GHz)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                95%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Graphics</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Adreno 740</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                90%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">RAM</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">12 GB LPDDR5X</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                98%
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-1">
                                <div class="title des font-size-14">
                                    <span>Performance</span>
                                </div>
                            </div>
                        </div>
                        <div class="row vc skill dev mb-5">
                            <div class="col-md-11">
                                <ul class="skills-list list-inline mb-0">
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Display Type</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Dynamic AMOLED</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                90%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Resolution</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">1440 x 3088 pixels</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                85%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Pixel Density</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">501 ppi</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                99%
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-1">
                                <div class="title dev font-size-14">
                                    <span>Display</span>
                                </div>
                            </div>
                        </div>
                        <div class="row vc skill prs">
                            <div class="col-md-11">
                                <ul class="skills-list list-inline mb-0">
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Back Camera</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">200 MP f/1.7, Wide Angle</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                90%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Front Camera</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">12 MP f/2.2, Wide Angle</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                75%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Image Resolution</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">14500 x 13650 Pixels</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                95%
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-1">
                                <div class="title prs font-size-14">
                                    <span>Camera</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 mt-6">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Pros</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="timeline">
                                    <div class="outer radius-2 position-absolute">
                                        <div class="ui-icon ui-icon-md inner ">
                                            <div class="ui-icon-inner">
                                                <span style="color: #F56C6D;" class="fas fa-thumbs-up btn-icon-inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pt-7">
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Impressive Battery Life </h6>
                                            </div>
                                            <p class="mb-0">The Samsung S23 Ultra boasts an impressive battery life, which is a big improvement from its predecessor. With its 5000mAh battery, the S23 Ultra can easily last all day on a single charge, even with heavy usage.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Powerful Snapdragon Chip </h6>
                                            </div>
                                            <p class=" mb-0">The S23 Ultra features the latest Snapdragon chip, which is considered to be the best one in years. With its powerful performance, the device can easily handle multitasking and running demanding apps and games.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Improved Ergonomic Design </h6>
                                            </div>
                                            <p class=" mb-0">The design of the S23 Ultra has been improved, making it feel more ergonomic in the hand. The device is comfortable to hold and use, and its slim profile makes it easy to carry in a pocket or bag.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Improved Loudspeakers </h6>
                                            </div>
                                            <p class=" mb-0">The loudspeakers on the S23 Ultra sound much better than on previous models. They are louder and clearer, making it easier to hear music or videos without headphones.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Camera Improvements </h6>
                                            </div>
                                            <p class=" mb-0">While there are camera improvements on the S23 Ultra, they are not quite huge. The quad-camera setup still produces high-quality images, but the upgrades are more subtle than groundbreaking.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Perfect for Night Time Use</h6>
                                            </div>
                                            <p class=" mb-0">The screen of the S23 Ultra is less curved and can get very dim, making it perfect for night time use. This feature is particularly useful for those who like to use their phone in bed or in a dark room.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 mt-6">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Cons</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="timeline">
                                    <div class="outer radius-2 position-absolute">
                                        <div class="ui-icon ui-icon-md inner ">
                                            <div class="ui-icon-inner">
                                                <span style="color: #F56C6D;" class="fas fa-thumbs-down btn-icon-inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pt-7">
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Limited RAM in Base Model</h6>
                                            </div>
                                            <p class=" mb-0">Despite its impressive specs, the base model of the Samsung S23 Ultra still only comes with 8GB of RAM. While this may be sufficient for most users, it may not be enough for power users who need more memory
                                                for demanding tasks.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Unchanged Charging Speeds</h6>
                                            </div>
                                            <p class=" mb-0">The charging speeds on the S23 Ultra have not improved from its predecessor, which may disappoint some users. While it still supports fast charging, other phones on the market offer even faster charging speeds.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Mediocre Haptics</h6>
                                            </div>
                                            <p class=" mb-0">The haptics on the S23 Ultra are not as good as those on some of its rivals. While the phone does provide some feedback, the vibrations can feel weak and imprecise, which may not be ideal for gaming or other
                                                applications.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Expensive at Full Price</h6>
                                            </div>
                                            <p class=" mb-0">The Samsung S23 Ultra is an expensive phone, especially if you buy it at full price. While it does offer impressive features and performance, the high cost may be a barrier for some users who are looking for
                                                a more affordable option.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-6 pt-6 mb-6">
                                <hr class="divider divider-lg divider-center ">
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-left" href="https://www.amazon.in/Samsung-Galaxy-Ultra-Green-Storage/dp/B0BT9CXXXX/ref=sr_1_1_sspa?keywords=samsung+s23+ultra+5g&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2 mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-amazon btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Purchase Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-md-right" href="https://youtu.be/oQlO8qss2VI">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2  mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-youtube btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Watch Review</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section id="portfolio" class="shadow bg-dark radius-2 padding-dy work">
                        <div class="row mb-5">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Gallery</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <ul class="filter mb-0 pl-0">
                                    <li class=" radius-2 mb-3 mb-md-0"><a data-filter="all" href="#" class="active inner radius-2">all</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-5">
                                <hr class="divider divider-md divider-center ">
                            </div>
                        </div>
                        <div class="row ">
                            <?php 
                                                    $sql = "SELECT * FROM gallery WHERE phonename='s23ultra'";
                                                    if($result = mysqli_query($db, $sql)){
                                                        if(mysqli_num_rows($result) > 0){
                                                                while($row = mysqli_fetch_array($result)){  
                                                                   echo "
                                                                    <div class='col-lg-4 mb-5'>
                                                                        <div class='item web'>
                                                                            <a class='radius-1 shadow-inner  hover-effect d-block' data-overlay='rgba(52,58,64,.6)' href='".$row['src']."'>
                                                                                <span class='hover-effect-container'>
                                                                        <span class='hover-effect-icon '>
                                                                        <span class=' fas fa-eye top-icon '></span>
                                                                                </span>
                                                                                </span>
                                                                                <div class='  p-2  '>
                                                                                    <div class='shadow radius-1'>
                                                                                        <img class='radius-1' alt='' src='".$row['src']."'>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>   ";
                                                                }
                                                            mysqli_free_result($result);
                                                        } else{
                                                            echo "<p class='lead'><em></em></p>";
                                                        }
                                                    } else{
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-6 pt-6 mb-6">
                                <hr class="divider divider-lg divider-center ">
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-left" href="https://www.amazon.in/Samsung-Galaxy-Ultra-Green-Storage/dp/B0BT9CXXXX/ref=sr_1_1_sspa?keywords=samsung+s23+ultra+5g&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2 mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-amazon btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Purchase Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-md-right" href="https://youtu.be/oQlO8qss2VI">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2  mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-youtube btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Watch Review</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section id="blog" class="shadow bg-dark radius-2 padding-dy ">
                        <div class="row mb-5">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Blogs</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4 item">
                                    <a class="radius-1 shadow-inner d-block " href="#">
                                        <div class="  p-2  ">
                                            <div class="shadow radius-1">
                                                <img class="img-fluid radius-1" src="assets/img/blog/s23ultra.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.photographyblog.com/reviews/samsung_galaxy_s23_ultra_review">Samsung Galaxy S23 Ultra full detailed review</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">09 March, 23</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Mark Goldstein</a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p>Announced in early 2023, the Samsung Galaxy S23 Ultra is the latest flagship smartphone in Samsung's “Ultra” range for 2023 . It follows on from 2022's S22 Ultra and sits within the S23 range, which includes two other models
                                    including the standard S23 and the S23+.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.photographyblog.com/reviews/samsung_galaxy_s23_ultra_review" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.nytimes.com/wirecutter/blog/samsung-galaxy-s23-ultra-camera/"> The Samsung Galaxy S23 Ultra Has a Great Camera. You Don't Need It. </a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">21 Feb, 23</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Ryan Whitwam</a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p>Flagship smartphones are extremely expensive, and one of the tactics that device makers like Samsung and Apple employ to try to convince people to upgrade is to add new, DSLR-style camera features to their phones. Samsung’s
                                    new Galaxy S23 Ultra attempts to justify its sky-high $1,200 price tag in a few ways, including a 200-megapixel camera that seems especially impressive on paper. But if your current phone is only a few years old, shelling
                                    out that much money to get more megapixels simply isn’t necessary.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.nytimes.com/wirecutter/blog/samsung-galaxy-s23-ultra-camera/" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.sammobile.com/samsung/galaxy-s23-ultra/review/">  Galaxy S23 Ultra review: A star that shines tremendously bright </a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">15 Feb, 23</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Abhijeet Mishra</a>
                                 </span>
                                    </li>
                                </ul>
                                <div class="px-5 mt-4">
                                    <div class="p-2  radius-1 shadow-inner ">
                                        <div class="shadow radius-1 p-5">
                                            <div class="media  align-items-center">
                                                <div class="radius-5 mr-4 d-none d-lg-block">
                                                    <div class="shadow-inner  ui-icon ui-icon-xl ui-icon-xxl">
                                                        <div class="ui-icon-inner">
                                                            <span style="color: #F56C6D;" class="fas fa-quote-left btn-icon-inner"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <blockquote class="mb-2 font-size-16 mr-0 mr-lg-4">"Thanks to the bigger vapor cooling chamber, heat was not an issue, either. You will feel some heat on the back when you do something heavy, like gaming or using the camera for too long, but it won’t
                                                        bother you. If it does, you can game by bypassing the battery when connected to a power outlet."
                                                    </blockquote>
                                                    <h6 class="font-size-15 font-weight-600 mb-0">Abhijeet Mishra</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-6 pt-6 mb-6">
                                <hr class="divider divider-lg divider-center ">
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-left" href="https://www.amazon.in/Samsung-Galaxy-Ultra-Green-Storage/dp/B0BT9CXXXX/ref=sr_1_1_sspa?keywords=samsung+s23+ultra+5g&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2 mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-amazon btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Purchase Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 text-left mb-2 mb-lg-0">
                                <a class="float-md-right" href="https://youtu.be/oQlO8qss2VI">
                                    <div class="media  align-items-center">
                                        <div class="outer radius-2  mr-3">
                                            <div class="ui-icon ui-icon-md inner ">
                                                <div class="ui-icon-inner">
                                                    <span class="fab fa-youtube btn-icon-inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-alt font-size-13 font-weight-600 text-uppercase">Watch Review</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </section>

                    <div class="row mt-4 justify-content-center ">
                        <div class="text-center shadow-inner radius-2  py-1 px-4">
                            <p class="font-size-11  mb-0 ">Opinions expressed reflect personal experience, not universal consensus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pl-lg-0  my-order-switch-2 mb-lg-0 mb-5">
                    <div class="sticky-lg-top">
                        <header class="shadow bg-dark radius-2 px-4 py-6 text-center ">
                            <div class="profile-image">
                                <div class="profile-image-border">
                                    <img class="rounded-circle" src="assets/img/avatar/s23.jpg" alt="/">
                                </div>
                            </div>
                            <div class="mt-4 mb-5">
                                <h3 class="font-weight-600 mb-0">S<mark>23
                              </mark> Ultra
                                </h3>
                                <h6 class="text-alt">Samsung</h6>
                            </div>
                            <nav id="main-nav" class="main-nav clearfix tabbed">
                                <ul class="pl-0">
                                    <li class="outer radius-2 mb-3">
                                        <a class="inner radius-2" href="#home">
                                            <div class="media align-items-center ">
                                                <div class="media-body text-left">
                                                    <span class="font-weight-600 font-size-13 text-uppercase  text-muted">Home</span>
                                                </div>

                                                <span class="fas fa-home" style="color: #F56C6D;"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="outer radius-2 mb-3">
                                        <a class="inner radius-2" href="#about">
                                            <div class="media  align-items-center ">
                                                <div class="media-body text-left">
                                                    <span class="font-weight-600 font-size-13 text-uppercase  text-muted">About</span>
                                                </div>

                                                </svg>
                                                <span class="fas fa-mobile" style="color: #F56C6D; width: 20px;"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="outer radius-2 mb-3">
                                        <a class=" inner radius-2" href="#portfolio">
                                            <div class="media  align-items-center ">
                                                <div class="media-body text-left">
                                                    <span class="font-weight-600 font-size-13 text-uppercase text-muted">Gallery</span>
                                                </div>

                                                </svg>
                                                <span class="fas fa-camera" style="color: #F56C6D;"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="outer radius-2 mb-3">
                                        <a class=" inner radius-2" href="#blog">
                                            <div class="media  align-items-center ">
                                                <div class="media-body text-left">
                                                    <span class="font-weight-600 font-size-13 text-uppercase text-muted">Blog</span>
                                                </div>

                                                </svg>
                                                <span class="fas fa-comment" style="color: #F56C6D;"></span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </header>
                        <div class="text-center mt-5 ">
                            <p class="font-size-14 mb-2 text-alt">© 2023 PhoneGuru</p>
                            <ul class="list-inline mt-auto mb-0">
                                <li class="list-inline-item outer radius-2 mr-1">
                                    <a class="inner btn btn-round btn-icon" href="#">
                                        <span class="fab fa-facebook-f btn-icon-inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-1 outer radius-2">
                                    <a class="inner btn btn-round btn-icon" href="#">
                                        <span class="fab fa-instagram btn-icon-inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mx-0 outer radius-2 ">
                                    <a class="inner btn btn-round btn-icon" href="#">
                                        <span class="fab fa-twitter btn-icon-inner"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="outer scroll-to-top  scroll" href="#wrapper">
            <div class="scroll-to-top-inner inner radius-2"><span class=" fas fa-arrow-up top-icon "></span></div>
        </a>
        <!-- End to the top -->
    </div>
    <!-- End wrapper-->
    <!--Javascript-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easytabs.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/venobox.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/placeholders.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/morphext.min.js"></script>
    <!-- <script src="js/switcher.js"></script> -->
    <script src="js/script.js"></script>
    <!-- Google analytics -->
    <!-- End google analytics -->
</body>

</html>