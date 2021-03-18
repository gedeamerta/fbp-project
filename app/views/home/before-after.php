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
        <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
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
        <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
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