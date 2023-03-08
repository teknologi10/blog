<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Kelas Fullstack</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/assets/css/app.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="<?= base_url(); ?>">Kelas Fullstack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end mx-4" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php if (session('email')) { ?>
                        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>/admin">Home</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= session('nama') ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?= base_url(); ?>/auth/logout">Logout</a>
                            </div>
                        </div>
                        <!-- <a class="nav-link" href="<?= base_url(); ?>/auth/logout">Logout</a> -->
                    <?php } else { ?>
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        <a class="nav-link" href="<?= base_url(); ?>/blog/login">Login</a>
                    <?php }  ?>
                </div>
            </div>
        </div>
    </nav>