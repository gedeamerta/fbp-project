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
    <title><?= $data['title'] ?></title>

    <style>
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
                <img src="<?= baseurl ?>/assets/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"></div>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?= $data['set_active'] == 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home">Home <span class="sr-only">(current)</span></a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item <?= $data['set_active'] == 'our-services' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/services">Our Services</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item <?= $data['set_active'] == 'our-coach' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/coach">Our Coach</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item <?= $data['set_active'] == 'result' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/result">Before & After</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item <?= $data['set_active'] == 'contact' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= baseurl; ?>/home/contact">Contact</a>
                        <div class="underline-bar"></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->