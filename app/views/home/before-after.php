<!-- Before & After -->
<div class="container" style="margin-top: 5em">
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-title">
                <span class="underline-title-text">Before & After</span>
            </h2>
            <h2 class="subtitle-text">
                This is what you will get if you want to train with us
            </h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- before & after -->
        <?php foreach($data['getBefore'] as $before) :  ?>
        <div class="col-lg-6" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
            <div class="card-pages-services card mt-3" style="max-width: 100%">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img class="mt-0" src="<?= baseurl ?>/assets/images/<?= $before['photos']?>" alt="..."
                            style="width: 100%; border-radius: 0 0 0 50px" />
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card-body card-body-packages">
                            <h1 class="card-title title-packages-card" style="margin-top: 0">
                                <?= $before['name'] ?>
                            </h1>
                            <p class="card-text subtitle-bef" style="color: #00d5ff">
                                <?= $before['job'] ?>
                            </p>
                            <h5>
                                <?= html_entity_decode($before['descriptions']) ?>
                            </h5>
                            <h5><span style="font-weight: 900;">-Before-</span></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <?php foreach($data['getAfter'] as $after) :  ?>
        <div class="col-lg-6" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
            <div class="card-pages-services card mt-3" style="max-width: 100%">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img class="mt-0" src="<?= baseurl ?>/assets/images/<?= $after['photos']?>" alt="..."
                            style="width: 100%; border-radius: 0 0 0 50px" />
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card-body card-body-packages">
                            <h1 class="card-title title-packages-card" style="margin-top: 0">
                                <?= $after['name'] ?>
                            </h1>
                            <p class="card-text subtitle-bef" style="color: #00d5ff">
                                <?= $after['job'] ?>
                            </p>
                            <h5>
                                <?= html_entity_decode($after['descriptions']) ?>
                            </h5>
                            <h5><span style="font-weight: 900; color:#00d5ff">-After-</span></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Before & After -->

<!-- Contact Start -->
<div class="container-lg" style="margin-top: 4em">
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
                                        <img src="./images/email-card.svg" alt="" />
                                        <a href="mailto:fbp.bali@gmail.com?subject=Hello%20Coach">fbp.bali@gmail.com</a>
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