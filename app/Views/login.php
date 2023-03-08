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
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/assets/css/app.css">
</head>

<body>
    <div class="wrapper">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <header class="mb-3">Login</header>
        <form action="<?= base_url(); ?>/auth/verif" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                <input type="text" name="email" class="form-control form-control-lg" placeholder="Your Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Your Password">
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="#" class="btn btn-primary btn-lg mt-2 col-12 col-lg-12" id="facebook">Facebook</a>
                </div>
                <div class="col-12 col-lg-6">
                    <a class="btn btn-primary btn-lg mt-2 col-12 col-lg-12" id="google">Google</a>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col-12">
                    <button type="submit" name="submit" value="1" class="btn btn-primary btn-lg mt-2 col-12" id="login">Login</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>
</body>

</html>