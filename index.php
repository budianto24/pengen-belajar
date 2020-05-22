<!doctype html>
<html lang="en">

<head>
    <title>Plantoponik</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/vendors/slick-1.8.1/slick/slick.css">
</head>

<body>

    <section id="banner">
        <div class="container-fluid p-0">
            <div class="banner-hero-home">
                <div class="main-slider-banner-home">
                    <div class="main-slider-home" style="background: url('assets/img/background/bg-homepage.png'); background-repeat:no-repeat; background-size:cover;">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="hero-title-banner">
                                <h1>BELIEVE IT. DEW IT. </h1>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-home" style="background: url('assets/img/background/bg-homepage.png'); background-repeat:no-repeat; background-size:cover;">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="hero-title-banner">
                                <h1>BELIEVE IT. DEW IT. </h1>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-home" style="background: url('assets/img/background/bg-homepage.png'); background-repeat:no-repeat; background-size:cover;">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="hero-title-banner">
                                <h1>BELIEVE IT. DEW IT. </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumbnail-slider-banner-home">
                    <div class="thumbnail-slider-home">
                        <!-- <h1>01</h1> -->
                        <img src="assets/img/background/bg-homepage.png" alt="" class="img-fluid thumbnail-banner-home">
                    </div>
                    <div class="thumbnail-slider-home">
                        <!-- <h1>02</h1> -->
                        <img src="assets/img/background/bg-homepage.png" alt="" class="img-fluid thumbnail-banner-home">
                    </div>
                    <div class="thumbnail-slider-home">
                        <!-- <h1>03</h1> -->
                        <img src="assets/img/background/bg-homepage.png" alt="" class="img-fluid thumbnail-banner-home">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/vendors/jquery-3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/vendors/bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="assets/vendors/slick-1.8.1/slick/slick.js"></script>

    <script type="text/javascript">
        $('.main-slider-banner-home').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.thumbnail-slider-banner-home'
        });

        $('.thumbnail-slider-banner-home').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.main-slider-banner-home',
            // dots: true,
            // centerMode: true,
            focusOnSelect: true,
            prevArrow: "<button class='arrowLeftBannerHome'><img src='assets/img/vector/prev-arrow-banner.svg' class='img-fluid'></button>",
            nextArrow: "<button class='arrowRightBannerHome'><img src='assets/img/vector/next-arrow-banner.svg' class='img-fluid'></button>"
        });
    </script>
</body>

</html>