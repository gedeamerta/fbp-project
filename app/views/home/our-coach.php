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
                <a href="https://wa.me/6287861250115?text=Halo%20saya%20ingin%20mulai%20latihan%20!"
                    class="btn btn-3 hover-border-1 mt-2" data-aos="fade-left" data-aos-delay="1000">
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