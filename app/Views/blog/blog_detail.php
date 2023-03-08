<?= $this->include('header') ?>
<<section class="container-fluid px-0">
    <div class="row">
        <div class="banner" style="background-image: url('<?= base_url() ?>/img/<?= $konten['banner'] ?>');">
            <div class="container-banner">
            </div>
        </div>
    </div>
    </section>
    <section class="container-fluid px-0 mt-5">
        <div class="row mx-4">
            <div class="col-lg-8 mb-3">
                <div class="col-12 d-inline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                    <?= $konten['kreator'] ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                    </svg>
                    <?= tgl_lengkap($konten['waktu']) ?>
                </div>
                <div class="col-lg-12 mt-3">
                    <span class="title-post"><?= $konten['judul'] ?></span>
                    <p class="mt-2 desc-post"><?= $konten['deskripsi'] ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12 underline mb-3">
                    <span class="title-old-post">Explore Other Post</span>
                </div>
                <?php foreach ($berita as $b) : ?>
                    <div class="col-lg-12">
                        <div class="card mb-3 card-old" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 thumbnail">
                                    <img src="<?= base_url() ?>/img/<?= $b['thumb'] ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="<?= base_url() ?>/blog/blog_detail/<?= $b['id'] ?>" class="card-title">
                                            <h5 class="card-title thumb-title"><?= substr($b['judul'], 0, 30) ?>...</h5>
                                        </a>
                                        <p class="card-text thumb-desc"><?= substr($b['deskripsi'], 0, 70) ?>...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?= $this->include('footer') ?>