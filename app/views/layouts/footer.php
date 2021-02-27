<!-- Footer Start -->
<footer>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 column">
                    <img class="logo-footer" src="<?= baseurl; ?>/assets/images/footer-logo.png" alt="" />
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 column">
                    <ul>
                        <li class="title">Features</li>
                        <li class="<?= $data['set_active'] == 'index' ? 'active' : '' ?>">
                            <a href="<?= baseurl; ?>/home">Home</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="<?= $data['set_active'] == 'our-services' ? 'active' : '' ?>">
                            <a href="<?= baseurl; ?>/services">Our Services</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="<?= $data['set_active'] == 'our-coach' ? 'active' : '' ?>">
                            <a href="<?= baseurl; ?>/home/coach">Our Coach</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="<?= $data['set_active'] == 'result' ? 'active' : '' ?>">
                            <a href="<?= baseurl; ?>/home/result">Before & After</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="<?= $data['set_active'] == 'contact' ? 'active' : '' ?>">
                            <a href="<?= baseurl; ?>/home/contact">Contact</a>
                            <div class="underline-bar"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 column">
                    <ul>
                        <li class="title">Contact</li>
                        <li>
                            <img src="<?= baseurl; ?>/assets/images/mail.svg" alt="" />
                            <a href="#">fbp.bali@gmail.com</a>
                        </li>
                        <li>
                            <img src="<?= baseurl; ?>/assets/images/phone.svg" alt="" />
                            <a href="https://api.whatsapp.com/send?phone=6287861250115">+6287861250115</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 column">
                    <ul>
                        <li class="title">Follow Us</li>
                        <li>
                            <img src="<?= baseurl; ?>/assets/images/instagram.svg" alt="" />
                            <a href="#">fbp_bali</a>
                        </li>
                        <li>
                            <img src="<?= baseurl; ?>/assets/images/facebook.svg" alt="" style="padding-left: 2px" />
                            <a href="#">fbp_bali</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    FBP Copyright © 2021 Future-Body-Project - All rights reserved || Designed
    By: gdamerta
</div>
<!-- Footer End -->

<!-- AOS START-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
<!-- AOS END -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

<script src="<?= baseurl ?>/assets/style/font-awesome/js/all.js"></script>
<script src="<?= baseurl ?>/assets/script/script.js"></script>
</body>

</html>