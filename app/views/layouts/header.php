<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= baseurl; ?>/assets/style/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= baseurl; ?>/assets/style/font-awesome/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= baseurl ?>/assets/images/logo.png">

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Form Contact Start -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script type="text/javascript">
    (function() {
        // https://dashboard.emailjs.com/admin/integration
        emailjs.init("user_ccrVDCLLQBjfeTTqocDJh");
    })();
    </script>
    <script type="text/javascript">
    window.onload = function() {
        document
            .getElementById("contact-form")
            .addEventListener("submit", function(event) {
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = (Math.random() * 100000) | 0;
                // these IDs from the previous steps
                emailjs
                    .sendForm("service_3htdi5z", "template_803lvlc", "#contact-form")
                    .then(
                        function(response) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Success Send Message',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        },
                        function(error) {
                            console.log("FAILED...", error);
                        }
                    );
            });
    };
    </script>
    <!-- Form Contact End -->

    <title><?= $data['title'] ?></title>

    <style>
    * {
        scroll-behavior: smooth;
    }

    nav ul li {
        margin: 15px;
    }

    .bg-coach {
        background-image: url("<?= baseurl ?>/assets/images/back-coach.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .bg-coach h1 {
        padding-top: 30px;
    }

    @media all and (max-width: 768px) {
        .bg-coach {
            padding-top: 10px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("<?= baseurl ?>/assets/images/coach-phone.png");
        }

        .bg-coach h1 {
            padding-top: 30px;
        }
    }

    .bg-contact {
        background-image: url("<?= baseurl ?>/assets/images/bg-contact.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        height: 30vh;
    }

    @media all and (max-width: 320px) {
        .logo-footer {
            margin-left: 3em;
            padding-top: 20em;
        }
    }

    .image--cover {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 150px !important;
        height: 150px;
        border-radius: 50%;
        margin: 20px;

        object-fit: cover;
        object-position: center right;
    }

    /* // Footer */
    .footer {
        padding-bottom: 2em;
    }

    .footer .column .title {
        font-weight: 800;
        font-size: 26px;
        color: #000;
    }

    .footer .column ul a {
        text-decoration: none;
        font-size: 20px;
        color: gray;
        transition: 0.5s;
    }

    @media only screen and (min-width: 360px) and (max-width: 1200px) {

        .footer .logo-footer {
            margin-left: 3em;
            padding-top: 1em;
        }

        .footer .column ul li {
            list-style: none;
            padding: 5px 0px;
            font-weight: 600;
            color: gray;
        }

        .footer .column ul {
            width: 100%;
        }

        .footer .column ul a {
            text-decoration: none;
            font-size: 1em;
            color: gray;
            transition: 0.5s;
        }

        .footer .column ul .underline-bar {
            height: 5px;
            background-color: transparent;
            width:
                0%;
            transition: width 0.2s, background-color 0.5s;
        }

        .footer .column ul .active .underline-bar {
            background-color: #006478;
            width: 10%;
        }

        .footer .column ul li:hover .underline-bar {
            background-color: #006478;
            width: 50%;
        }

        .footer .column ul i {
            font-size: 2em;
            margin: 0px 10px;
        }

        .footer .column .title {
            font-weight: 800;
            font-size: 20px;
            color: #000;
        }
    }

    .sub-footer {
        background:
            #006478;
        padding-top: 5px;
        text-align: center;
        color: #fff;
        font-size: 12px;
    }

    @media (max-width: 720px) {
        .footer .column {
            width: 90%;
            display: block;
            margin: 0% 0%;
        }

        .footer .column:nth-child(2),
        .footer .column:nth-child(3) {
            width: 40%;
            display: inline-block;
        }
    }


    .title-packages-card {
        font-weight: bold;
        font-size: 36px;
    }
    </style>

</head>

<body>
    <!-- Navbar Start  -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img data-aos="zoom-out-up" data-aos-delay="900" src="<?= baseurl ?>/assets/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"></div>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li data-aos="zoom-out-up" data-aos-delay="1000"
                        class="nav-item <?= $data['set_active'] == 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home">Home <span class="sr-only">(current)</span></a>
                        <div class="underline-bar"></div>
                    </li>
                    <li data-aos="zoom-out-up" data-aos-delay="1200"
                        class="nav-item <?= $data['set_active'] == 'our-services' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/services">Our Services</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li data-aos="zoom-out-up" data-aos-delay="1300"
                        class="nav-item <?= $data['set_active'] == 'our-coach' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/coach">Our Coach</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li data-aos="zoom-out-up" data-aos-delay="1400"
                        class="nav-item <?= $data['set_active'] == 'result' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/result">Before & After</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li data-aos="zoom-out-up" data-aos-delay="1500"
                        class="nav-item <?= $data['set_active'] == 'contact' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/contact">Contact</a>
                        <div class="underline-bar"></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->