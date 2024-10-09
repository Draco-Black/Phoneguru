<?php
 include("./env.php");

$db = new mysqli($env_server, $env_username,  $env_password, $env_database, $env_port);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Phone 1 | PhoneGuru</title>
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
                                <h1 class="font-weight-600 mb-0">Nothing <mark>Phone 1
                              </mark>
                                </h1>
                                <div class="text-rotation">
                                    <div class="item">
                                        <h6 class="h5 text-alt mt-1 mb-0 "> <span class=" text-rotating">Nothing, Comfortable Range, ₹28900 /-</span></h6>
                                    </div>
                                </div>
                                <ul class="list-inline  mb-0 mt-4">
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.facebook.com/Nothing-Technology-724644021637509/">
                                            <span class="fab fa-facebook-f btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://in.nothing.tech/pages/phone-1">
                                            <span class="fab fa-google btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://twitter.com/nothing">
                                            <span class="fab fa-twitter btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.instagram.com/nothing/?hl=en">
                                            <span class="fab fa-instagram btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.amazon.in/Nothing-Phone-Black-256-RAM/dp/B0B8TBNGBG/ref=sr_1_2?keywords=nothing+phone+1&sr=8-2">
                                            <span class="fab fa-amazon btn-icon-inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                                        <a class="inner btn btn-round btn-icon" href="https://www.youtube.com/c/NothingTechnology">
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
                                <a class="float-left" href="https://www.amazon.in/Nothing-Phone-Black-256-RAM/dp/B0B8TBNGBG/ref=sr_1_2?keywords=nothing+phone+1&sr=8-2">
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
                                <a class="float-md-right" href="https://youtu.be/1USExPyX9ds">
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
                                <h1 class="font-weight-600 mb-0"><mark>Phone 1</mark></h1>
                                <h6 class="h5 text-alt">Nothing</h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <p>At first blush, the appeal of the Nothing Phone 1 rests on its standout design and the strength of its story. 
                                    The company clearly learnt lessons from its first product and the level of polish applied to the Phone 1 surpasses expectations,
                                     while unique features like its transparent back and glyph lighting marry novelty and functionality in a way that's absent from most other phones.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>The Phone 1 is Nothing's second ever physical product released in its short existence,
                                   following on from 2021's Ear 1 true wireless earbuds and preceding the Nothing Ear (Stick) wireless earbuds, which arrived in October 2022.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class="text-center info-list font-size-14 p-2 list-inline  mb-0">
                                            <li><span class="inf">Name </span> <span class="value">Nothing Phone 1</span></li>
                                            <li><span class="inf">Launch</span> <span class="value"> 2022, July 12</span></li>
                                            <li><span class="inf">Technology</span> <span class="value"> GSM / LTE / 5G</span></li>
                                            <li><span class="inf">Dimensions</span> <span class="value"> 159.2 x 75.8 x 8.3 mm </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center  p-2 radius-1 shadow-inner ">
                                    <div class="shadow radius-1">
                                        <ul class=" text-center info-list p-2 font-size-14 list-inline mb-0">
                                            <li><span class="inf">Weight</span> <span class="value">193.5 g (6.84 oz)</span></li>
                                            <li><span class="inf">Build</span> <span class="value"> Gorilla Glass 5</span></li>
                                            <li><span class="inf">SIM</span> <span class="value">Dual SIM</span></li>
                                            <li><span class="inf">Protection</span> <span class="value">Corning Gorilla Glass 5</span></li>
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Snapdragon 778G+ 5G (6 nm)</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">CPU</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Octa-core (1x2.5 GHz )</h6>
                                        <div class="progress mb-3">
                                            <div class="percentage">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-600 font-size-14 text-uppercase">Graphics</h6>
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">Adreno 642L</h6>
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">OLED</h6>
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">402 ppi</h6>
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
                                        <h6 class="font-weight-300 font-size-12 text-uppercase">16 MP, f/2.2, (wide)</h6>
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
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">120Hz Smooth OLED Display</h6>
                                            </div>
                                            <p class="mb-0">This phone boasts a 120Hz smooth OLED display, providing a stunningly smooth and immersive visual experience.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Solid Build Quality </h6>
                                            </div>
                                            <p class=" mb-0">This phone features solid build quality with a robust metal frame and a toughened glass exterior, ensuring it can withstand the rigors of everyday use.
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Clean Android Experience </h6>
                                            </div>
                                            <p class=" mb-0">This phone offers a clean Android experience with no bloatware or unnecessary software, providing users with a streamlined and efficient user interface.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Glyph Lights on the Back</h6>
                                            </div>
                                            <p class=" mb-0">The back of this phone is adorned with glyph lights that not only add a unique aesthetic appeal but also serve as notification indicators, 
                                              providing users with a convenient and stylish way to stay informed.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Wireless Charging Support</h6>
                                            </div>
                                            <p class=" mb-0">With wireless charging support,this phone allows users to charge their device without the hassle of cables, providing a convenient and efficient charging experience.
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
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">No Charger in the Box</h6>
                                            </div>
                                            <p class=" mb-0">This phone comes without a charger in the box,
                                                 a trend adopted by some smartphone manufacturers that aims to reduce electronic waste and encourage users to utilize existing chargers.
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Not the best option for Gaming</h6>
                                            </div>
                                            <p class=" mb-0">While this phone may have some gaming capabilities, 
                                                it may not be the best option for gaming enthusiasts as it lacks certain features such as a high refresh rate display or advanced cooling systems that are typically found in gaming-focused devices.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">No 3.5mm Audio Jack</h6>
                                            </div>
                                            <p class=" mb-0">This phone does not feature a 3.5mm audio jack, requiring users to utilize wireless headphones or a dongle to connect traditional wired headphones.
                                            </p>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="mb-1">
                                                <h6 class="font-weight-600 font-size-15 mb-1" style="text-transform: uppercase;">Average Front and Ultra-Wide Camera.</h6>
                                            </div>
                                            <p class=" mb-0">This phone's front and ultra-wide cameras provide an average performance, capturing decent quality images and videos, 
                                                but may not offer the advanced features or image quality of higher-end camera systems found in some flagship smartphones.
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
                                <a class="float-left" href="https://www.amazon.in/Nothing-Phone-Black-256-RAM/dp/B0B8TBNGBG/ref=sr_1_2?keywords=nothing+phone+1&sr=8-2">
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
                                <a class="float-md-right" href="https://youtu.be/1USExPyX9ds">
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
                                                    $sql = "SELECT * FROM gallery WHERE phonename='nothing'";
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
                                <a class="float-left" href="https://www.amazon.in/Nothing-Phone-Black-256-RAM/dp/B0B8TBNGBG/ref=sr_1_2?keywords=nothing+phone+1&sr=8-2">
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
                                <a class="float-md-right" href="https://youtu.be/1USExPyX9ds">
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
                                                <img class="img-fluid radius-1" src="https://images.unsplash.com/photo-1664700651198-42cf8d382dc3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.howtogeek.com/830540/nothing-phone-1-review/">Nothing Phone (1) Review: An Attempted Marriage of Design and Function</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">04 Oct, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">DOMINICK D'AGOSTINO</a>
                                 </span>
                                    </li>
                                </ul>
                                <hr class="mt-3 mb-3">
                                <p>The Nothing Phone 1 is the newest product from U.K.-based tech company Nothing.
                                     As a follow-up of the Nothing Ear 1 earbuds, this android phone aims to use design to help users eliminate distractions. 
                                    It doesn’t do everything perfectly, but it’s a good start from a new company.
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.howtogeek.com/830540/nothing-phone-1-review/" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.tomsguide.com/reviews/nothing-phone-1">Nothing Phone (1) review: A brave and flashy start</a></h1>
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
                                <p>An admirable first try at a smartphone, the Nothing Phone (1) is a mid-range device with some heart.
                                     While it lacks performance and camera gusto, it makes a statement with a revised take on the familiar iPhone-like design. 
                                </p>
                                <div class="outer radius-2 d-inline-block">
                                    <a href="https://www.tomsguide.com/reviews/nothing-phone-1" class="inner radius-2 d-block px-4 py-2 font-size-14 text-alt font-weight-500">
                              Read more
                              </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-6">
                                <hr class="divider divider-md divider-center ">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <h1 class="h5 font-weight-500 d-inline-block"><a href="https://www.tomsguide.com/reviews/nothing-phone-1/">Nothing Phone (1) review: A brave and flashy start</a></h1>
                                    <span class="d-inline-block shadow-inner text-secondary radius-1 font-size-13 mb-3 mb-lg-0  px-3">24 Aug, 22</span>
                                </div>
                                <ul class="list-inline font-size-13">
                                    <li class="list-inline-item">
                                        <span class=" fas fa-user mr-1 "></span>
                                        <span>Post by
                                 <a href="#">Jordan Palmer </a>
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
                                <a class="float-left" href="https://www.amazon.in/Nothing-Phone-Black-256-RAM/dp/B0B8TBNGBG/ref=sr_1_2?keywords=nothing+phone+1&sr=8-2">
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
                                <a class="float-md-right" href="https://youtu.be/1USExPyX9ds">
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
                                <h3 class="font-weight-600 mb-0">Pho<mark>ne 1</mark>
                                </h3>
                                <h6 class="text-alt">Nothing</h6>
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