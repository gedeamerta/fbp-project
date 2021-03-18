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
<!-- Contact Start -->
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
                        <input type="text" class="form-control border-form-contact" id="name" name="user_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="label-contact">Email</label>
                        <input type="email" class="form-control border-form-contact" id="inputEmail4" name="user_email"
                            required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="textarea" class="label-contact">Message</label>
                        <textarea class="form-control border-form-contact" id="textarea" rows="3" name="message"
                            required>
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