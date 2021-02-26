<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= baseurl; ?>/assets/style/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= baseurl; ?>/style/font-awesome/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title><?= $data['title'] ?></title>

    <style>
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
    </style>

</head>

<body>
    <!-- Navbar Start  -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-expand-md navbar-expand-sm">
            <a class="navbar-brand" href="index.html">
                <img src="<?= baseurl ?>/assets/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-fbp" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="our-services.html">Our Services</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="our-coach.html">Our Coach</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="before-after.html">Before & After</a>
                        <div class="underline-bar"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                        <div class="underline-bar"></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->