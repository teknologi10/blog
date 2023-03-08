<?= $this->include('header') ?>
<section class="container-fluid px-0 mt-5">
    <div class="row pt-5 mx-4">
        <div>
            <button class="btn btn-primary" type="button" id="welcome" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="mx-4"> Create Blog + </span>
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <span class="align-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </span>
            <div class="modal-content" id="modal">
                <form action="<?= base_url(); ?>/admin/save_blog" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-floating mt-2">
                            <textarea class="form-control judul" name="judul" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea" class="label">Type anything for your Title~!</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 text-center">
                                <div class="box">
                                    <input type="file" name="thumb" id="file-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                            </path>
                                        </svg> <span>Uplod Thumbnail</span></label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <div class="box">
                                    <input type="file" name="banner" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                    <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                            </path>
                                        </svg> <span>Uplod Banner</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-1 mb-3 mt-3">
                            <div class="editor p-3">
                                <textarea class="form-control summernote editor" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2 btnsave" type="submit">Save</button>
                            <button class="btn btn-primary btndelete" type="reset">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row pt-3 mx-4 mb-4">
        <?php foreach ($berita as $b) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-3">
                <div class="card container_foto" id="card">
                    <div class="ver_mas text-center">
                        <span class="icon-item edit pt-3">
                            <a data-bs-toggle="modal" data-bs-target="#edit<?= $b['id'] ?>" class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                            </a>
                        </span>
                        <span class="icon-item hapus pt-3">
                            <a href="<?= base_url() ?>/admin/hapus_blog/<?= $b['id'] ?>" class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </a>
                        </span>
                    </div>
                    <img src="<?= base_url() ?>/img/<?= $b['thumb'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="card-title text-center" href="">
                            <h5><?= substr($b['judul'], 0, 23) ?>...</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="edit<?= $b['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <span class="align-content-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </span>
                    <div class="modal-content" id="modal">
                        <form action="<?= base_url(); ?>/admin/edit_blog/<?= $b['id'] ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-floating mt-2">
                                    <textarea class="form-control judul" name="judul" placeholder="Leave a comment here" id="floatingTextarea"><?= $b['judul'] ?></textarea>
                                    <label for="floatingTextarea" class="label">Type anything for your Title~!</label>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 text-center">
                                        <div class="box">
                                            <input type="file" name="thumb" id="file-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                                    </path>
                                                </svg> <span>Uplod Thumbnail</span></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-center">
                                        <div class="box">
                                            <input type="file" name="banner" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                            <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                                    </path>
                                                </svg> <span>Uplod Banner</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-1 mb-3 mt-3">
                                    <div class="editor p-3">
                                        <textarea class="form-control summernote editor" name="deskripsi"><?= $b['deskripsi'] ?></textarea>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2 btnsave" type="submit">Save</button>
                                    <button class="btn btn-primary btndelete" type="reset">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->include('footer') ?>