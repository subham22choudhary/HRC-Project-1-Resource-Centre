<?php
/*
Template Name: RCC-1
*/

get_header();

?>


<style>
    /* Second-fold css */

    body {
        font-family: 'Poppins', sans-serif;
    }

    .grid-item {
        width: 25%;
        padding: 25px 0px;
        box-shadow: 15px 15px 10px -15px grey;
        border-radius: 32px;
        padding-left: 34px;
    }

    .exp-btn {
        font-size: 15px;
    }

    .trend-text-2,
    .rc-font-2 {
        font-size: 28px;
    }

    html {
        scroll-behavior: smooth;
    }

    a.text-size {
        font-size: 14px;
    }

    li.footer-parent {
        margin-bottom: 12px;
        font-weight: 600;
    }


    /* third-fold css */
    .section {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    a:hover {
        color: #FC7500;
        text-decoration: none;
    }

    a {
        color: #ffffff;
        text-decoration: none;
        background-color: transparent;
    }



    .click-switch:hover {
        background: #ffffff;
        color: #FC7500;
        border-color: #FC7500;
        text-decoration: none;

    }

    .click-switch {
        background: #FC7500;
        font-weight: 600;
        font-size: 15px;
        padding: 6px 25px;
        text-transform: uppercase;
        border: 2px solid #FC7500;
        border-radius: 7px;
        text-decoration: none;
        /* margin: 44px;
            margin-bottom: 19rem; */
        color: #ffffff;
        margin-left: 57px;
        margin-right: 49px;
    }


    .card-image-1 {
        border-radius: 16px;
        background-color: #f1f8ff;
        padding: 50px 73px 20px 89px;
        background-size: auto;
        background-repeat: no-repeat;
        background-position: center;
    }

    .card-category-1 {
        position: absolute;
        top: 30px;
        border: none;
        font-weight: 600;
        left: 39px;
        background-color: transparent;
    }

    .content-card {
        width: 250px;
        height: 297px;
        background-color: #FAFAFA;
        box-shadow: 15px 15px 10px -15px grey;
        position: relative;
        border-radius: 20px;
        margin-bottom: 3rem;
        margin-top: 3rem;
    }




    /* section-1 */
    .global-orange {
        color: #fc7500;
    }

    .upcoming-card {
        background: #fafafa;
        color: #666666;
        position: relative;
        height: 110px;
    }


    .upcoming {
        position: absolute;
        bottom: 0;
        left: 0px;
        background-color: #fff;
        color: #666666;
        font-size: 14px;
        padding: 15px;
        font-weight: 500;
    }

    .date,
    .time {
        display: block;
    }

    .card-container {
        position: relative;
        overflow: hidden;
        width: 220px;
        height: 336px;
        box-shadow: 15px 15px 10px -15px grey;
        border-radius: 20px;
    }

    .img-block {
        height: 140px;
        margin-bottom: 20px;
        background-size: auto;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 7px;
        background-color: #F1F8FF;
        padding: 30px;
        width: -webkit-fill-available;
    }

    .card-category {
        position: absolute;
        top: 0;
        border: none;
        font-weight: 600;
        left: 4px;
        background-color: transparent;
    }

    /* .card-info{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #FAFAFA;
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;
      }
      .card-container:hover .card-info{
        height: 100%;
      }
      .card-info-content{
        color: #666666;
        font-size: 14px;
        position: absolute;
        top: 30%;
        left: 30%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
      } */
    .card-title {
        color: #666666;
        font-size: 14px;
        line-height: 23px;
        font-weight: 600;
        padding: 8px 14px;
    }

    a,
    a:hover {
        text-decoration: none;
        color: #fc7500;
        background-color: transparent;
    }

    .scroll {
        max-height: 25px;
    }

    .btn {
        background: #FC7500;
        font-weight: 600;
        font-size: 12px;
        padding: 5px 13px;
        border-radius: 7px;
        color: #fff;
        text-transform: uppercase;
        border: 2px solid #FC7500;
        transition: all 0.3s ease;
        display: inline-block;
        text-align: center;
    }

    .btn:hover {
        background: #ffffff;
        color: #FC7500;
        border-color: #FC7500;
    }

    .featured-img-card {
        background-image: url('https://cdn-resources.highradius.com/resources/wp-content/themes/hrcres/images/featured-o2c.jpg');
        background-repeat: no-repeat;
        background-position: center;
        padding-bottom: 14rem;
        background-size: cover;
        border-radius: 20px 0px 0px 20px;
    }

    .feature-card {
        box-shadow: 5px 5px 10px rgb(35 34 34 / 12%);
        border-radius: 20px;
    }

    .feature {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: #fff;
        color: #666666;
        font-size: 14px;
        padding: 6px;
        font-weight: 500;
    }

    .feature-title {
        color: #666666;
        font-size: 20px;
        font-weight: 600;
        padding: 24px;
        line-height: 35px;
    }

    .box {
        background-color: #fafafa;
        padding: 25px;
        color: #666666;
        text-align: center;
        margin-bottom: 0px;
        font-size: 21px;
        max-width: fit-content;
        border-radius: 20px;
    }





    .btn-1 {
        background: #FC7500;
        font-weight: 600;
        font-size: 14px;
        padding: 9px 57px;
        border-radius: 7px;
        color: #fff;
        text-transform: uppercase;
        border: 2px solid #FC7500;
        transition: all 0.3s ease;
        display: inline-block;
        text-align: center;
    }

    .btn-1:hover {
        background: #ffffff;
        color: #FC7500;
        border-color: #FC7500;
    }

    h2 {
        font-weight: 600;
        color: #666666;
    }



    .btn-2:hover {
        background: #ffffff;
        color: #FC7500;
        border-color: #FC7500;
    }


    .btn-2 {
        background: #ffffff;
        color: #666666;
        border-color: #666666;
        border-radius: 7px;
        width: 8rem;
        height: 38px;
        margin: 7px;
    }



    .button {
        position: absolute;
        right: 20px;
        bottom: 10px;
        min-width: 118px;
    }

    h3 {
        font-size: 14px;
    }

    .date,
    .time {
        font-size: 12px;
        font-weight: 600;
        color: #666666;
    }

    .global-grey {
        color: #666666;
    }





    .footer-2 {
        background-color: #393939;
    }


    ul {
        list-style-type: none;
    }

    p.p-tag {
        margin-bottom: 0rem;
    }

    .footer-text-color {
        color: #ffffff;
    }

    .text-color {
        font-size: 12px;
    }

    a:hover {
        color: #ffffff;
        text-decoration: none;
    }


    a {
        color: #ffffff;
        text-decoration: none;
    }

    .copyright {
        color: rgba(255, 255, 255, 0.5);
        font-size: 10px;
        margin-top: 4px;
    }

    a {

        text-decoration: none;
    }

    .footer-parent a:before {
        content: "";
        position: absolute;
        left: 53px;
        top: -3px;
        width: 20px;
        height: 3px;
        background-color: #fc7500;
    }



    /* Mobile */

    @media screen and (max-device-width: 481px) {

        div#button-group-1 {
            margin-left: 58px;
        }


        element.style {
            position: absolute;
            left: 39px;
            top: 0px;
        }

        .grid-item {
            width: 71%;
            padding: 33px 3px;
            border-radius: 32px;
            padding-left: 0px;
        }

        /* .grid {
    left: 86px;
} */

        .scrollbtn {
            display: none !important;
        }

        .crd-bx {
            margin-top: 40px;
        }

        .button-group {
            margin-left: -12px;
        }


        .buttn-move {
            margin-left: 61px;
        }


        .o2c-card {
            margin-left: -64px;
        }

        .trend-text-2 {
            font-size: 20px;
        }


        .card-move {
            width: 400px;
        }

        .rc-font {
            font-size: 23px;
            font-weight: 700;
        }

        .trend-text {
            left: -61px;
        }

        .img-1,
        .img-2 {
            width: 81%;
            padding-left: 50px;
            padding-right: 31px;
            margin-top: 10px;
        }

        .date-text {
            font-size: 14px;
            font-weight: 700;
        }

        .title-text {
            font-size: 20px;
            margin-left: -42px;
            margin-top: 15px;
        }

        .exp-btn {
            margin-left: -44px;
        }

        .rc-font-2 {
            font-size: 20px;
            font-weight: 600;
            margin-left: -50px
        }


        .move-block-1 {
            margin-left: 41px;
        }

        .font-title-2 {
            font-size: 36px;
            margin-top: 1rem;
            margin-left: -110px;
        }

        .font-title-2-1 {
            font-size: 26px;
            margin-left: -107px;
            color: #fc7500;
            font-weight: 400;
        }

        .move-block-3 {
            margin-left: -30px;
        }

        .upcoming {
            position: absolute;
            bottom: 0;
            left: -29px;
            background-color: #fff;
            color: #666666;
            font-size: 16px;
            padding: 6px;
            font-weight: 500;
        }


        .card-category-1 {
            top: 44px;
        }

    }

    /* Mobile-to-Tab */

    @media screen and (min-device-width: 481px) and (max-device-width: 768px) {

        .grid-item {
            width: 40%;
            padding: 24px 3px;
            margin-left: 17px !important;
            margin-right: 37px !important;
        }

        .rc-font {
            font-size: 22px;
            font-weight: 600;
        }

        .trend-text-2,
        .rc-font-2 {
            font-size: 20px;
        }

        .grid {
            left: 38px;
        }

        .scrollbtn {
            display: none !important;
        }


    }


    /* Tab-to-PC */

    @media screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

    /* PC */

    @media screen and (min-device-width: 1024px) and (max-device-width: 1440px) {}




    .animated {
        width: 400px;
        height: auto;
        background-position: center;
        background-size: cover;
    }

    /* Fade in left */
    .fadeInLeft {
        -webkit-animation: fadeInLeft 1.2s both;
        /* Safari 4+ */
        -moz-animation: fadeInLeft 1.2s both;
        /* Fx 5+ */
        -o-animation: fadeInLeft 1.2s both;
        /* Opera 12+ */
        animation: fadeInLeft 1.2s both;
        /* IE 10+, Fx 29+ */
    }


    /* Safari 4+ */
    @-webkit-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-200px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
        }
    }




    /* Fade in right */
    .fadeInRight {
        -webkit-animation: fadeInRight 1.2s both;
        /* Safari 4+ */
        -moz-animation: fadeInRight 1.2s both;
        /* Fx 5+ */
        -o-animation: fadeInRight 1.2s both;
        /* Opera 12+ */
        animation: fadeInRight 1.2s both;
        /* IE 10+, Fx 29+ */
    }

    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translateX(200px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
        }
    }



    /* .section-2 {
    margin-bottom: 120px;
} */



    .arrow-sign {
        font-weight: 600;
        text-transform: uppercase;
        margin-top: 18px;
        background-repeat: no-repeat;
        background-size: 20px;
        background-image: url(https://cdn.highradius.com/wp-content/themes/trifecta/assets/images/arrow-right.svg);
        background-position: right center;
        padding-right: 30px;
    }

    a {
        transition: all 0.3s ease;
        /* color: #fc7500; */
        text-decoration: none;
    }

    .arrow-sign:hover {
        padding-right: 35px;
    }

    a:hover {
        text-decoration: none;
        color: #fc7500;
    }

    .click-switch-2 {
        background: #FC7500;
        font-weight: 600;
        font-size: 15px;
        padding: 6px 25px;
        text-transform: uppercase;
        border: 2px solid #FC7500;
        border-radius: 7px;
        text-decoration: none;
        color: #ffffff;
        margin-left: 5px;
        margin-right: 49px;
    }


    .click-btn {
        cursor: pointer;
    }
</style>

<section class="first-fold">
    <div class="container">
        <div class="title">
            <h1 class="global-orange rc-font">Order to Cash Knowledge Center</h1>

        </div>
        <div class="row mt-3 move-block-1">
            <div class="col-lg-6 col-sm-12 col-md-7 animated fadeInLeft">
                <h2 class="global-grey rc-font-2">Upcoming Webinars</h2>

                <div class="item">
                    <div class="row pb-4">
                        <div class="col-md-3">
                            <img class="justify-content-sm-center img-fluid img-1"
                                src="https://cdn-resources.highradius.com/resources/wp-content/uploads/2022/05/Receviables-Townhall-Logo.png"
                                alt="webinar-logo" width="100%">
                            <p class="text-center mt-3 mb-md-0 mb-2">
                                <span class="date date-text">23 JUNE 2022</span>
                                <span class="time date-text">11:30 AM CT</span>
                            </p>
                        </div>
                        <div class="col-md-7 upcoming-card">
                            <h3 class="title-text">Decoding AI for Accounts Receivables Automation</h3>
                            <div class="upcoming">Upcoming</div>
                            <a class="btn button" href="#">REGISTER NOW</a>
                        </div>
                    </div>

                    <div class="row pb-4">
                        <div class="col-md-3">
                            <img class="justify-content-sm-center img-fluid img-2"
                                src="https://cdn-resources.highradius.com/resources/wp-content/uploads/2022/06/CFO-circle-LOGO.svg.gzip"
                                alt="webinar-logo" width="80%">
                            <p class="text-center mt-3 mb-md-0 mb-2">
                                <span class="date date-text">16 JUNE 2022</span>
                                <span class="time date-text">10:30 AM CT</span>
                            </p>
                        </div>
                        <div class="col-md-7 upcoming-card">
                            <h3 class="title-text">How should the CFOs office overcome supply chain disruption</h3>
                            <div class="upcoming">Upcoming</div>
                            <a class="btn button" href="#">REGISTER NOW</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="trend-text col-lg-6 col-sm-12 col-md-5 animated fadeInRight">
                <h2 class="global-grey trend-text-2">Trending Content</h2>
                <a href="https://radiance.highradius.com/" target="_blank">
                    <img src="https://cdn-resources.highradius.com/resources/wp-content/uploads/2022/01/Radiance_HighRadius-Resource-Section_Banner_1-2.jpg"
                        class="img-fluid" style="border-radius:20px;">
                </a>
            </div>
            <a href="https://www.highradius.com/resources/" class="exp-btn arrow-sign global-orange">EXPLORE OTHER
                SESSIONS</a>

            <div class="col-12 d-flex justify-content-center pb-3 scrollbtn">
                <a href="#button-group-1">
                    <img src="https://cdn-resources.highradius.com/resources/wp-content/themes/Trifecta-Resources/images/scroll-icon.png"
                        alt="Scroll" class="scroll">
                </a>
            </div>
        </div>
    </div>
</section>




<!-- phase-1 filter -->



<!-- phase-2 filter -->
<div class="button-group filter-button-group buttn-move">
    <div id="button-group-1">
        <h2 class="font-title-2">What are you looking for?</h2>
        <h4 class="global-grey font-title-2-1">Filter by Type:</h4>
    </div>





    <div class="button-group filter-button-group ">
        <button class="btn-2" data-filter="*">All</button>
        <?php
$categories = get_categories();
    foreach ($categories as $category) {
        echo '<button  class="btn-2" data-filter=".'.$category->slug.'">'.$category->name.'</button>';
    }
?>
    </div>


    <div class="row pb-3 my-3 o2c-card">
        <div class="col-lg-8 col-md-12 col-sm-12 animated fadeInLeft">
            <div class="container">
                <div class="row feature-card">
                    <div class="col-md-6 col-12 featured-img-card">
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="flipcard-box-container">
                            <h4 class="feature-title">
                                Everything you need to know about Order-To-Cash
                            </h4>
                        </div>
                        <div style="padding: 24px;">
                            <a class="click-switch-2" href="#">Read Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="crd-bx col-lg-3 col-md-12 col-sm-12 animated fadeInRight">
            <div class="container offset-lg-5 d-flex justify-content-center ">
                <div class="box text-center">
                    <p>Elevate your process
                        to the next level
                        with Automation</p>
                    <a class="btn" href="#">REQUEST A DEMO</a>
                </div>
            </div>
        </div>
    </div>



    <div class="grid card-move d-flex justify-content-center">
        <?php

$cats = new WP_Query(['post_type'=>'cats']);

if ($cats->have_posts()) : while ($cats->have_posts()) : $cats->the_post() ;

?>

        <a class="grid-item mx-0  <?php $categories = get_the_category(get_the_id ());
    foreach ($categories as $category) {
         echo $category->slug.' ';
    } ?>" href="<?php the_permalink(); ?>">


            <div class="card-design ">

                <span class="card-category-1 global-orange">
                    <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
                </span>
            </div>
            <div class="image-design-1 card-image-1 d-flex justify-content-center"><img
                    src="<?php the_field('image'); ?>" class="img-fluid" alt="Responsive image"></div>
            <h6 class="d-flex justify-content-center mt-5 mb-3 card-title">
                <?php the_title(); ?>
            </h6>
            <span class="click-switch card-button d-flex justify-content-center">Read Now</span>
        </a>



        <?php endwhile; endif; ?>



    </div>


    <section class=" third-fold section move-block-3">
        <div class="container">
            <div class="row text-center d-flex justify-content-center">
                <h2 class="text-">FinTech Advocacy Network</h2>
                <p>Now more than ever we wanted a platform to allow finance professionals in the credit and accounts
                    receivables community to come together and safely interact and support each other. If you would like
                    to share your thought leadership with industry peers,</p>
                <p>sign up for the <strong><a href="https://www.highradius.com/fintech-advocacy-network/"
                            class="global-orange">FinTech
                            Advocacy Network</a></strong> and learn about upcoming opportunities to participate in
                    various types of engagements.</p>
            </div>
            <div class="row d-flex justify-content-center"><button type="button" class="btn-1 ">Sign up for FAN</button>
            </div>
        </div>
    </section>






    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>


    <!-- Back to Top -->

    <script>
        var mybutton = document.getElementById("myBtn");

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>




    <?php get_footer(); ?>