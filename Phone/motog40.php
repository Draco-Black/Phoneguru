<?php
 include("./env.php");

$db = new mysqli($env_server, $env_username,  $env_password, $env_database, $env_port);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Moto G40 | PhoneGuru</title>
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
                                <h1 class="font-weight-600 mb-0">Moto<mark> G40
                              </mark>
                                </h1>
                                <div class="text-rotation">
                                    <div class="item">
                                        <h6 class="h5 text-alt mt-1 mb-0 "> <span class=" text-rotating">Motorola, Wallet Friendly, ₹ 12999 /-</span></h6>
                                    </div>
                                </div>
                                <ul class="list-inline  mb-0 mt-4">
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.facebook.com/MotorolaIN">
                                            <span class="fab fa-facebook-f btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.motorola.in/smartphones-moto-g40-fusion/p?skuId=251">
                                            <span class="fab fa-google btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://twitter.com/motorolaindia">
                                            <span class="fab fa-twitter btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.instagram.com/motorolain/">
                                            <span class="fab fa-instagram btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.amazon.in/MOTOROLA-Fusion-Dynamic-128GB-Storage/dp/B09DG851NK">
                                            <span class="fab fa-amazon btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.youtube.com/channel/UCo2M-E3Xd9oIQoznNfCDGcA">
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
                                <a class="float-left" href="https://www.amazon.in/MOTOROLA-Fusion-Dynamic-128GB-Storage/dp/B09DG851NK">
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
                                <a class="float-md-right" href="https://youtu.be/kY39eO1S2Xs">
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
                                <h1 class="font-weight-600 mb-0"><mark>G40</mark></h1>
                                <h6 class="h5 text-alt">Moto</h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <p>The Moto G40 Fusion is Lenovo-owned Motorola’s latest G series smartphone launched alongside the Moto G60 (review).
                                     Aiming to disrupt the affordable segment and compete against brands like Xiaomi and Realme, the G40 Fusion has been priced starting at Rs 13,999. The phone boasts some decent features and respectable specs, including the Qualcomm Snapdragon 732G chipset, a 6,000mAh battery and a 120Hz refresh rate display. 
                                    Let’s see if the Moto G40 Fusion can go head to head against its rivals..
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>The specs that the Redmi Note 11 comes with aren't quite as impressive, which is to be expected, but during our time with the phone, we didn't notice any major issues in terms of slowdowns or bugs. Whether it's watching movies, playing games, sending messages, checking social media, or browsing the web, the phone is perfectly capable and isn't going to let you down in any of these areas.
                                     Thanks to the bright AMOLED screen and the competent stereo speakers, media playback is an area where the Redmi Note 11 does really well. 
                                     If you're looking for a phone that is going to cope well with YouTube, Netflix, iPlayer, and so on, then this might be exactly what you need – and at 6.43 inches, the screen hits a sweet spot between the smallest and the largest displays out there.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class="text-center info-list font-size-14 p-2 list-inline  mb-0">
                                            <li><span class="inf">Name </span> <span class="value">Moto G40</span></li>
                                            <li><span class="inf">Launch</span> <span class="value"> 2022, January 26</span></li>
                                            <li><span class="inf">Technology</span> <span class="value"> GSM / LTE /HSPA </span></li>
                                            <li><span class="inf">Dimensions</span> <span class="value"> 169.6 x 75.9 x 9.7 mm </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class=" text-center info-list p-2 font-size-14 list-inline mb-0">
                                            <li><span class="inf">Weight</span> <span class="value">225 g (7.94 oz)</span></li>
                                            <li><span class="inf">Build</span> <span class="value">Corning Gorilla Glass 3</span></li>
                                            <li><span class="inf">SIM</span> <span class="value">Dual SIM (Nano-SIM, dual stand-by)</span></li>
                                            <li><span class="inf">Protection</span> <span class="value">Water repellent design</span></li>
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Snapdragon 732G (8 nm)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">CPU</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Octa core (2x2.3 GHz)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                75%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Graphics</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Adreno 618</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                85%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">RAM</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">6 GB LPDDR5X</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                80%
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">IPS LCD</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                70%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Resolution</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">1080 x 2460 pixels</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                75%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Pixel Density</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">395 ppi</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                65%
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">64 MP f/1.7, Wide Angle</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Front Camera</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">16 MP f/1.7, Wide Angle</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                70%
                                            </div>
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Image Resolution</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">14500 x 13650 Pixels</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                95%
                                            </div>
                                        </div>
                                    </li> -->
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
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">120Hz AMOLED Display </h6>
                                            </div>
                                            <p class="mb-0">The 120Hz refresh rate of the AMOLED display provides a smooth and responsive user experience, especially for tasks like scrolling and gaming
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Clean software </h6>
                                            </div>
                                            <p class=" mb-0">The clean software on the phone provides a streamlined and easy-to-use interface, making it simple for users to navigate and use the phone's features.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Solid Battery Life </h6>
                                            </div>
                                            <p class=" mb-0">The 6000mAh battery provides a solid battery life, allowing users to use their phone for an extended period without having to worry about recharging it frequently.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Decent performance hardware  </h6>
                                            </div>
                                            <p class=" mb-0">The decent performance hardware on the phone allows for smooth and responsive operation, providing users with a reliable and enjoyable user experience
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Snapdragon 732G</h6>
                                            </div>
                                            <p class=" mb-0"> The Snapdragon 732G processor provides efficient and powerful performance, allowing users to multitask and run resource-intensive apps without experiencing lag or slowdowns.
                                            </p>
                                        </div>
                                        <!-- <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Perfect for Night Time Use</h6>
                                            </div>
                                            <p class=" mb-0">The screen of the S23 Ultra is less curved and can get very dim, making it perfect for night time use. This feature is particularly useful for those who like to use their phone in bed or in a dark room.
                                            </p>
                                        </div> -->
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
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Thick and heavy </h6>
                                            </div>
                                            <p class=" mb-0">The thicker and heavier design may make the phone less portable and convenient to carry around, especially for users who prefer a sleek and lightweight design. 
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Slow charging speeds </h6>
                                            </div>
                                            <p class=" mb-0">Users who are always on the go or frequently away from a power source may find slow charging speeds to be a hindrance to their daily routine.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Cameras need fine-tuning</h6>
                                            </div>
                                            <p class=" mb-0">users may have to rely on software updates or third-party apps to improve camera performance, which may not be as effective as hardware improvements.
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
                                <a class="float-left" href="https://www.amazon.in/MOTOROLA-Fusion-Dynamic-128GB-Storage/dp/B09DG851NK">
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
                                <a class="float-md-right" href="https://youtu.be/kY39eO1S2Xs">
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
                                                    $sql = "SELECT * FROM gallery WHERE phonename='moto40'";
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
                                <a class="float-left" href="https://www.amazon.in/MOTOROLA-Fusion-Dynamic-128GB-Storage/dp/B09DG851NK">
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
                                <a class="float-md-right" href="https://youtu.be/kY39eO1S2Xs">
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
                                                <img class="img-fluid radius-1" src="https://riggear-web-images.s3.ap-south-1.amazonaws.com/UploadImages/Motorola-Moto%20G40%20Fusion-Skins-7f6130f8-a056-4276-82b6-55791b5a7b49_big.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.gadgets360.com/motorola-moto-g40-fusion-price-in-india-101338">Motorola Moto G40 Fusion</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">23 Feb, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">ABHIMAN BISWAS</a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p> The phone comes with a 6.80-inch touchscreen display offering a resolution of 1080x2460 pixels. Motorola Moto G40 Fusion is powered by an octa-core Qualcomm Snapdragon 732G processor. It comes with 4GB, 6GB of RAM.
                                     The Motorola Moto G40 Fusion runs Android 11 and is powered by a 6000mAh battery.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.gadgets360.com/motorola-moto-g40-fusion-price-in-india-101338" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.smartprix.com/bytes/moto-g40-fusion-review-motorola-gets-aggressive/"> Moto G40 Fusion review: Motorola Gets Aggressive </a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">27 Feb, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Deepak Singh </a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p>Motorola’s G series phones have since long served as polished, stock-android (almost) alternatives to ‘disruptive’ phones from Xiaomi and others that are known to undercut the competition. Off late,
                                Moto has shifted to the same aggressive stance and is offering more hardware for value price – and that’s what the new Moto G60 and Moto G40 Fusion are about.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.smartprix.com/bytes/moto-g40-fusion-review-motorola-gets-aggressive/" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.91mobiles.com/hub/moto-g40-fusion-review/"> Moto G40 Fusion review: a solid all-rounder with average cameras</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">07 June, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Kshitij Pujari</a>
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
                                                    <blockquote class="mb-2 font-size-16 mr-0 mr-lg-4">"In many aspects, the Moto G40 Fusion is a solid phone. 
                                                                                                        Whether it’s the smooth 120Hz display or its clean software or the smooth performance, you get what you paid for. However, 
                                                                                                        the camera quality is lacking and the phone’s substantial weight makes it a not-so-enticing option."
                                                    </blockquote>
                                                    <h6 class="font-size-15 font-weight-600 mb-0"></h6>
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
                                <a class="float-left" href="https://www.amazon.in/MOTOROLA-Fusion-Dynamic-128GB-Storage/dp/B09DG851NK">
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
                                <a class="float-md-right" href="https://youtu.be/kY39eO1S2Xs">
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
                                    <img class="rounded-circle" src="assets/img/profile.jpg" alt="/">
                                </div>
                            </div>
                            <div class="mt-4 mb-5">
                                <h3 class="font-weight-600 mb-0">Moto<mark>G40
                              </mark> 
                                </h3>
                                <h6 class="text-alt">Motorola</h6>
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