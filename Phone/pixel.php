<?php
 include("./env.php");

$db = new mysqli($env_server, $env_username,  $env_password, $env_database, $env_port);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Pixel 7  | PhoneGuru</title>
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
                                <h1 class="font-weight-600 mb-0">Google <mark>Pixel 7
                              </mark>
                                </h1>
                                <div class="text-rotation">
                                    <div class="item">
                                        <h6 class="h5 text-alt mt-1 mb-0 "> <span class=" text-rotating">Google, Comfortable Range, ₹47460 /-</span></h6>
                                    </div>
                                </div>
                                <ul class="list-inline  mb-0 mt-4">
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.facebook.com/madebygoogle">
                                            <span class="fab fa-facebook-f btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://store.google.com/us/product/pixel_7?hl=en-US">
                                            <span class="fab fa-google btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://twitter.com/madebygoogle">
                                            <span class="fab fa-twitter btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.instagram.com/madebygoogle/">
                                            <span class="fab fa-instagram btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.amazon.in/Google-Pixel-Obsidian-128GB-Storage/dp/B0BJL8H3QY/ref=sr_1_1?keywords=pixel+7&sr=8-1">
                                            <span class="fab fa-amazon btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.youtube.com/madebygoogle">
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
                                <a class="float-left" href="https://www.amazon.in/Google-Pixel-Obsidian-128GB-Storage/dp/B0BJL8H3QY/ref=sr_1_1?keywords=pixel+7&sr=8-1">
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
                                <a class="float-md-right" href="https://youtu.be/rfm7Yp9nG-s">
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

                    <!-- About phone -->

                    <section id="about" class="shadow bg-dark radius-2 padding-dy">
                        <div class="row mb-5">
                            <div class="col">
                                <h6 class="font-weight-700  mb-0 text-uppercase mb-2">About Phone</h6>
                                <hr class="divider divider-left divider-lg float-left">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <h1 class="font-weight-600 mb-0"><mark>Pixel 7</mark></h1>
                                <h6 class="h5 text-alt">Google</h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <p>Following last year's landmark Pixel 6 series, the Pixel 7 range looks like an iterative update by comparison, but it doubles down on what makes Google's phones stand out.
                                    Like the Pixel 7 Pro,the Pixel 7 arrives with Google's latest Tensor G2 chipset, which, paired with Google's own take on an Android 13, delivers a satisfying user experience,
                                     with everyday tasks made that little bit easier.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>While Google's Tensor platform doesn't usually compare all that favorably in side-by-side benchmarks with equivalent flagship processors, that's because it's built with a different focus in mind: AI and machine learning.
                                   This remains true for the new Tensor G2, and it enhances a number of facets of the Pixel 7 user experience, from camera quality to call quality, speech recognition and beyond.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class="text-center info-list font-size-14 p-2 list-inline  mb-0">
                                            <li><span class="inf">Name </span> <span class="value">Pixel 7</span></li>
                                            <li><span class="inf">Launch</span> <span class="value"> 2022, October 13</span></li>
                                            <li><span class="inf">Technology</span> <span class="value"> GSM / LTE / 5G</span></li>
                                            <li><span class="inf">Dimensions</span> <span class="value"> 155.6 x 73.2 x 8.7 mm  </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class=" text-center info-list p-2 font-size-14 list-inline mb-0">
                                            <li><span class="inf">Weight</span> <span class="value">197 g (6.95 oz)</span></li>
                                            <li><span class="inf">Build</span> <span class="value"> Gorilla Glass 5</span></li>
                                            <li><span class="inf">SIM</span> <span class="value">Nano SIM</span></li>
                                            <li><span class="inf">Protection</span> <span class="value">Gorilla Glass Victus</span></li>
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Google Tensor G2 (5 nm)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">CPU</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Octa-core (2x2.89 GHz)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Graphics</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Mali-G710 MP7</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">RAM</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">8GB </h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                85%
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">AMOLED</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Resolution</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">1080 x 2400 pixels</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                85%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Pixel Density</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">416 ppi</h6>
                                        <div class="progress">
                                            <div class="percentage">
                                                85%
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">50 MP f/1.9, 25mm (wide)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Front Camera</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">10.8 MP, f/2.2, (wide)</h6>
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
                                                70%
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
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Sleek. </h6>
                                            </div>
                                            <p class="mb-0">Compact and premium build, easy to handle, unique-looking design, dust- and water-resistant.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Efficient. </h6>
                                            </div>
                                            <p class=" mb-0">Good battery life considering the phone's size.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Seamless. </h6>
                                            </div>
                                            <p class=" mb-0">Android from the source, exclusive feature set, unrivaled perception of smoothness on this side of the OS divide.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Smooth performance all around</h6>
                                            </div>
                                            <p class=" mb-0">Overall, great camera quality with an unmatched character that has a loyal following
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Excellent Display</h6>
                                            </div>
                                            <p class=" mb-0">Sharp, bright, color-accurate display.
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
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Smooth, but Not Smooth Enough: Is 90Hz Display a Dealbreaker?
                                               </h6>
                                            </div>
                                            <p class=" mb-0">The display is just 90Hz as opposed to competitors pushing beyond 120Hz.
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Restricted.</h6>
                                            </div>
                                            <p class=" mb-0">Certain software and hardware features are regionally limited - 5G, VoLTE, and much of the onboard AI stuff (though admittedly, so is the phone's availability, to begin with).
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Blurry.</h6>
                                            </div>
                                            <p class=" mb-0">Selfies rarely come out tack sharp. Ultrawide camera is underwhelming in low light.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Sluggish.</h6>
                                            </div>
                                            <p class=" mb-0">Very slow charging by the standards of the day.
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
                                <a class="float-left" href="https://www.amazon.in/Google-Pixel-Obsidian-128GB-Storage/dp/B0BJL8H3QY/ref=sr_1_1?keywords=pixel+7&sr=8-1">
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
                                <a class="float-md-right" href="https://youtu.be/rfm7Yp9nG-s">
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
                                                    $sql = "SELECT * FROM gallery WHERE phonename='gpixel'";
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
                                <a class="float-left" href="https://www.amazon.in/Google-Pixel-Obsidian-128GB-Storage/dp/B0BJL8H3QY/ref=sr_1_1?keywords=pixel+7&sr=8-1">
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
                                <a class="float-md-right" href="https://youtu.be/rfm7Yp9nG-s">
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

                        <!-- Blogs -->


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
                                                <img class="img-fluid radius-1" src="https://images.unsplash.com/photo-1669888940542-bf597f76ef39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://blog.google/products/pixel/pixel-7-pixel-7-pro/">The latest and greatest: meet Pixel 7 and Pixel 7 Pro</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">06 Oct, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Brian Rakowski</a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p>The redesigned Pixel 7 and Pixel 7 Pro are here. Powered by our next-generation Google Tensor G2 processor and shipping with Android 13,
                                    these phones are at the center of our ever-expanding hardware portfolio that also includes a watch, tablet1
                                    and earbuds. All of these devices come with the smarts you expect from Google and work together to help you.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://blog.google/products/pixel/pixel-7-pixel-7-pro/" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.pcmag.com/reviews/google-pixel-7">No other Android phone offers this combination of features and performance for the price</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">12 Oct, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Dave LeClair </a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p>For $599, Google's Pixel 7 sits comfortably between the $449 Pixel 6a and the $899 Pixel 7 Pro in the company's lineup,
                                     which is the sweet spot in the budgets of many smartphone shoppers—and that just so happens to make it one of the most feature-rich, affordable phones on the market.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.pcmag.com/reviews/google-pixel-7" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.androidpolice.com/best-google-pixel-7-features/">The 6 best Google Pixel 7 features</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">12 April, 23</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">JON GILBERT</a>
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
                                                    <blockquote class="mb-2 font-size-16 mr-0 mr-lg-4">"However, the new front-facing camera on both models is capable of 4K videos at 60FPS. It's sure to fulfill all your selfie dreams."
                                                    <h6 class="font-size-15 font-weight-600 mb-0">JON GILBERT</h6>
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
                                <a class="float-left" href="https://www.amazon.in/Google-Pixel-Obsidian-128GB-Storage/dp/B0BJL8H3QY/ref=sr_1_1?keywords=pixel+7&sr=8-1">
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
                                <a class="float-md-right" href="https://youtu.be/rfm7Yp9nG-s">
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

                    <!-- Side Profile -->

                <div class="col-lg-3 pl-lg-0  my-order-switch-2 mb-lg-0 mb-5">
                    <div class="sticky-lg-top">
                        <header class="shadow bg-dark radius-2 px-4 py-6 text-center ">
                            <div class="profile-image">
                                <div class="profile-image-border">
                                    <img class="rounded-circle" src="assets/img/profile.jpg" alt="/">
                                </div>
                            </div>
                            <div class="mt-4 mb-5">
                                <h3 class="font-weight-600 mb-0"><mark>Pixel 7</mark> 
                                </h3>
                                <h6 class="text-alt">Google</h6>
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