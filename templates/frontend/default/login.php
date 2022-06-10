<main>
    <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
        <div data-aos="fade-left" data-aos-duration="1000" style="z-index: -1;left: 0;right: 0;position: relative;margin-left: auto;margin-right: auto;">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_cmuwykxd.json" background="transparent" speed="1" style="width: 500px; height: 500px; position: absolute;" loop autoplay></lottie-player>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 align-self-center">
                <div class="card" data-aos="fade-left" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: var(--bs-gray-900);color: var(--bs-white);">
                    <div class="card-body">
                        <div style="margin-bottom: 60px;margin-top: 30px;">
                            <h4 class="text-center">Hallo Apa Kabar?<br>Selamat Datang Kembali</h4>
                            <h6 class="text-center text-muted mb-2">Login Untuk Melanjutkan</h6>
                        </div>
                        <div>
                            <form action="<?= site_url('login/submit') ?>" method="POST" enctype="application/x-www-form-urlencoded">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12" style="margin-bottom: 10px;"><input class="form-control form-control-lg" type="email" placeholder="Email" name="email" autofocus="" style="background: var(--bs-gray-800);border-color: var(--bs-body-color);color: var(--bs-gray-100);"></div>
                                        <div class="col-12" style="margin-bottom: 10px;"><input class="form-control form-control-lg" type="password" placeholder="Password" name="password" style="background: var(--bs-gray-800);border-color: var(--bs-body-color);color: var(--bs-gray-100);"></div>
                                        <div class="col-12" style="margin-bottom: 10px;"><input class="form-control form-control-lg" type="password" placeholder="Secret Key" name="secret" style="background: var(--bs-gray-800);border-color: var(--bs-body-color);color: var(--bs-gray-100);"></div>
                                    </div>
                                </fieldset>
                                <div style="margin-top: 40px;">
                                    <div style="margin-bottom: 10px;"><button class="btn btn-info btn-lg" type="submit" style="width: 100%;">Masuk</button></div>
                                    <div style="margin-top: 5px;"><a class="btn btn-secondary btn-lg" role="button" style="width: 100%;" href="<?= base_url('registration') ?>">Registrasi</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>