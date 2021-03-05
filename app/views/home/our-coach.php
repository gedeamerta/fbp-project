<!-- Banner Start -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="<?= baseurl ?>/assets/images/our-coach.png" alt="" data-aos="zoom-out" data-aos-duration="3000" />
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="coach-biodata">
                <h1 class="title-coach-page" data-aos="fade-left" data-aos-delay="1000">
                    Setya Herawan
                </h1>
                <h2 class="subtitle-coach-page" data-aos="fade-left" data-aos-delay="1500">
                    Name <span class="font-weight-bold">I Gede Setya Erawan</span>. I
                    was born on
                    <span class="font-weight-bold">January 27, 1995, Jembrana</span>.
                    I have a lot of experiences like playing basketball and fighting.
                    <br />
                    And I have some achievements like
                    <span class="font-weight-bold">Basketball Porprov Bali Gold Medalist 2013 , 2013 Harjaba
                        silver medal (national).</span>
                    And some fighting achievements like
                    <span class="font-weight-bold">2018 provincial championship bronze medalist, Gold Medal for
                        the Mayor of Denpasar Cup 2019, Bali Porprov bronze medalist
                        2019</span>. I became a personal trainer from 2015 until now. My experience
                    working in the gym in 2015 - 2019 . I work on
                    <span class="font-weight-bold">Augi Sport Center (2015-2017), and Island warrior Bali
                        (2018-2019)</span>
                </h2>
                <a href="https://api.whatsapp.com/send?phone=6287861250115" class="btn btn-3 hover-border-1 mt-2"
                    data-aos="fade-left" data-aos-delay="1000">
                    <span> Contact Now</span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php if($data['coach']) : ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-title">
                <span class="underline-title-text">Team Work</span>
            </h2>
            <h2 class="subtitle-text">
                We Work Together, to help you all
            </h2>
        </div>
    </div>
    <div class="row">
        <?php foreach($data['coach'] as $coach) : ?>
        <div class="col-lg-4 col-md-6 col-sm-6 align-items-center justify-content-center d-flex" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
            <div class="card-pages-services card mt-3">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if($coach['photos']) : ?>
                        <img class="mx-auto card-img-top image--cover"
                            src="<?= baseurl ?>/assets/images/<?= $coach['photos']?>" alt="">
                        <?php else : ?>
                        <img class="mt-0 image--cover" src="<?= baseurl ?>/assets/images/default.jpg" alt="" />
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card-body card-body-packages">
                            <p class="card-text subtitle-packages text-center" style="color: #00d5ff; margin:0">
                                <?= $coach['job']?>
                            </p>
                            <h3 class="card-title title-packages-card text-center" style="margin: 0;">
                                <?= $coach['name']?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php else : ?>

<?php endif; ?>
<!-- Banner End -->

<!-- FBP Pic Start -->
<div class="container" style="margin-top: 5em">
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-title">
                <span class="underline-title-text">FBP - Future Body Project</span>
            </h2>
            <h2 class="subtitle-text">
                All of our activity to stay healthy and always maintain it
            </h2>
        </div>
        <?php foreach($data['docs'] as $docs) : ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="flip-left" data-aos-duration="1000">
            <img src="<?= baseurl ?>/assets/images/<?= $docs['photos'] ?>" alt="" />
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- FBP Pic End -->

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