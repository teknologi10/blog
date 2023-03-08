<?= $this->include('header') ?>
<section class="container-fluid px-0 mb-5 mt-5">
    <div class="row pt-5 mx-2">
        <div class="text-center">
            <button class="btn btn-primary" type="button" id="welcome">
                <span class="mx-4"> Welcome To My Blog </span>
            </button>
        </div>
    </div>
    <div class="row pt-3 mx-4">
        <?php foreach ($berita as $b) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-3">
                <div class="card" id="card">
                    <img src="<?= base_url() ?>/img/<?= $b['thumb'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="card-title text-center" href="<?= base_url() ?>/blog/blog_detail/<?= $b['id'] ?>" target="_blank">
                            <h5><?= substr($b['judul'], 0, 23) ?>...</h5>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->include('footer') ?>