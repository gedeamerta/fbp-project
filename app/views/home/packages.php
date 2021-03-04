<!-- Banner Start -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="4000">
            <img src="<?= baseurl ?>/assets/images/banner-services-1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="<?= baseurl ?>/assets/images/banner-services-2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-interval="6000">
            <img src="<?= baseurl ?>/assets/images/banner-services-3.jpg" class="d-block w-100" alt="..." />
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Our Services Section Start -->
<div class="container" style="margin-top: 5em">
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-title">
                <span class="underline-title-text">Packages</span>
            </h2>
            <h2 class="subtitle-text">
                Awesome Packages That We Offer For Our Clients
            </h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach($data['packages'] as $packages) : ?>
        <div class="col-lg-4 col-md-6 col-sm-6 align-items-center justify-content-center d-flex" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
            <div class="card-pages-services card mt-3">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if($packages['photos']) : ?>
                        <img class="mt-0" src="<?= baseurl ?>/assets/images/<?= $packages['photos'] ?>" alt=""
                            style="width: 100%">
                        <?php else : ?>
                        <img class="mt-0" src="<?= baseurl ?>/assets/images/default.jpg" alt="" style="width: 100%" />
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card-body card-body-packages">
                            <h5 class="card-title title-packages-card"><?= $packages['title_packages']?></h5>
                            <p class="card-text subtitle-packages">
                                <?= $packages['descriptions']?>
                            </p>
                            <a href="<?= baseurl?>/home/detail_packages/<?= $packages['id']?>">See Details<i
                                    class="fas fa-arrow-right" style="margin-left: 5px; padding-top: 2px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Our Services Section End -->

<!-- Contact Start -->
<div class="container-lg" style="margin-top: 5em">
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-title">
                <span class="underline-title-text">Contact</span>
            </h2>
        </div>
    </div>
</div>
<div class="bg-contact">
    <h1 class="subtitle-contact">
        We love question and feedback - and we’re always happy to help! Here
        <br />
        are some ways to contact us
    </h1>

    <div class="container">
        <div class="container-contact col-md-12 col-sm-12">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-lg-6 mb-4">
                    <div class="card card-contact">
                        <div class="card-body">
                            <h5 class="card-title title-card-contact">Talk to Me !</h5>
                            <p class="card-text subtitle-card-contact">
                                Contact me to request a training day and tell or give advice
                                on the exercises that have been given
                            </p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center link-contact">
                                        <img src="<?= baseurl ?>/assets/images/phone-contact.svg" alt="" />
                                        <a href="https://api.whatsapp.com/send?phone=6287861250115">+6287861250115</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card card-contact">
                        <div class="card-body">
                            <h5 class="card-title title-card-contact">Email Me !</h5>
                            <p class="card-text subtitle-card-contact">
                                Send all complaints, or fun things that have been passed
                                during the training. We are very open to your opinions
                            </p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center link-contact">
                                        <img src="<?= baseurl ?>/assets/images/email-card.svg" alt="" />
                                        <a href="">fbp.bali@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->