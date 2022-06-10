<main>
    <div class="container" style="margin-top: 30px;margin-bottom: 30px;">
        <div class="card" data-aos="fade-left" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;margin-bottom: 30px;background: var(--bs-gray-900);color: var(--bs-body-bg);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 col-sm-10 align-self-center">
                        <p style="margin-bottom: 0px;"><strong>Daftar User</strong></p>
                        <p style="margin-bottom: 0px;">Daftar user pada API ini</p>
                    </div>
                    <div class="col-4 col-sm-2 d-flex d-sm-flex d-xl-flex justify-content-end justify-content-sm-end justify-content-xl-end">
                        <a class="btn btn-info btn-lg" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bss-hover-animate="tada" title="Data User" href="<?= site_url('user') ?>">
                            <i class="far fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($user_data['data'] as $key => $value) : ?>
                <div class="col-12 col-lg-6" data-aos="fade-up">
                    <div class="card" data-bss-hover-animate="pulse" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: var(--bs-gray-900);color: var(--bs-body-bg);margin-bottom: 30px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 col-md-3 col-lg-4 text-center" style="margin-top: 20px;margin-bottom: 20px;">
                                    <img class="rounded-circle" src="<?= $value['picture'] ?>" width="75px" height="75px" alt="Profile Picture">
                                </div>
                                <div class="col align-self-center">
                                    <div style="margin-top: 20px;margin-bottom: 20px;">
                                        <h5 class="text-center text-sm-start"><?= $value['title'] . ' ' . $value['firstName'] . ' ' . $value['lastName'] ?></h5>
                                        <p class="text-center text-sm-start text-secondary" style="margin-bottom: 0px;"><?= $value['id'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>