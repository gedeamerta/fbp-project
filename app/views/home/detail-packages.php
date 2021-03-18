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
                <span class="underline-title-text">Details
                    <?= (!isset($data['packages_title']['title_packages'])) ? '' : $data['packages_title']['title_packages']  ?></span>
            </h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach($data['packages_details'] as $packages_details) :?>
        <div class="col-lg-4 col-md-6 col-sm-6 align-items-center justify-content-center d-flex" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
            <div class="card-pages-services card mt-3">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if($packages_details['photos_details']) : ?>
                        <img class="mx-auto card-img-top image--cover"
                            src="<?= baseurl ?>/assets/images/<?= $packages_details['photos_details']?>" alt="">
                        <?php else : ?>
                        <img class="mt-0 image--cover" src="<?= baseurl ?>/assets/images/default.jpg" alt="" />
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card-body card-body-packages">
                            <h5 class="card-title title-packages-card" style="margin-top: 0;">
                                <?= $packages_details['title_packages_details']?>
                            </h5>
                            <p class="card-text subtitle-packages">
                                <?= html_entity_decode($packages_details['descriptions_details'])?>
                            </p>
                            <a href="https://wa.me/6287861250115?text=Halo%20saya%20ingin%20mulai%20latihan%20!">
                                Contact Now<i class="fas fa-phone-alt" style="margin-left: 5px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach;?>
    </div>
</div>
<!-- Our Services Section End -->

<!-- Contact Start -->
<div class="container" style="margin-top: 5em">
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-title">
                <span class="underline-title-text">Contact Us</span>
            </h2>
            <h2 class="subtitle-text">Share your ideas, ask questions, send me a message, or chat me, and start building
                your website!</h2>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= baseurl ?>/assets/images/contact-logo.png" alt="">
        </div>
        <div class="col-lg-6">
            <form action="" id="contact-form" class="form-contact">
                <input type="hidden" name="contact_number" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="label-contact">Name</label>
                        <input type="text" class="form-control border-form-contact" id="name" name="user_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="label-contact">Email</label>
                        <input type="email" class="form-control border-form-contact" id="inputEmail4" name="user_email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="textarea" class="label-contact">Message</label>
                        <textarea class="form-control border-form-contact" id="textarea" rows="8" cols="1"
                            name="message">
                        </textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-3 p-0" value="Send">
                            <span> Send Message</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Contact End -->