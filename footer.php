<section id="section-footer">
    <div class="container">
        <div class="row d-flex justify-content-center subscribe">
            <div class="col-12 text-center title-subscribe">
                <h1>Subscribe</h1>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-9 input-email-subs">
                        <input type="text" class="form-control input-subs" placeholder="Your Email Address">
                    </div>
                    <div class="col-3 button-subs">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex-justify-content-center link-footer">
            <div class="col-3 footer-content address-footer">
                <h4>Address</h4>
                <p>
                    Jalan Sawo Manila Universitas Nasional
                    Pejaten, Pasar Minggu
                    Jakarta Selatan, 11220
                </p>
            </div>
            <div class="col-6 text-center footer-content purchase-footer">
                <h4>Purchasing Method</h4>
            </div>
            <div class="col-3 footer-content menu-footer">
                <h4>Customer Service</h4>
                <div class="link-cs d-flex flex-column">
                    <a href="#">Contact Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">FAQ</a>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container-fluid">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="imagined-by">Imagined by Good Developer</div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="social-media">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/vendors/jquery-3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/vendors/bootstrap-4.4.1/js/bootstrap.min.js"></script>
<script src="assets/vendors/slick-1.8.1/slick/slick.js"></script>

<script type="text/javascript">
    // Scrolling Effect
    $(window).on("scroll", function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('shadow');
        } else {
            $('nav').removeClass('shadow');
        }
    })
</script>