<main>
    <div class="container" style="margin-top: 30px;margin-bottom: 30px;">
        <div class="card" data-aos="fade-left" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;margin-bottom: 30px;background: var(--bs-gray-900);color: var(--bs-body-bg);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 col-sm-10 align-self-center">
                        <p style="margin-bottom: 0px;"><strong>Data User</strong></p>
                        <p style="margin-bottom: 0px;">email&nbsp;:&nbsp;<?= $user_data['email'] ?></p>
                    </div>
                    <div class="col-4 col-sm-2 d-flex d-sm-flex d-xl-flex justify-content-end justify-content-sm-end justify-content-xl-end">
                        <a class="btn btn-info btn-lg d-xxl-flex justify-content-xxl-center align-items-xxl-center" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bss-hover-animate="tada" title="Update Data" href="<?= base_url('user/update') ?>" style="border-radius: 10px;">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-right" data-aos-delay="500" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: var(--bs-gray-900);color: var(--bs-body-bg);margin-bottom: 30px;">
            <div class="card-body">
                <div class="table-responsive text-white border-dark" style="padding: 15px;">
                    <table class="table table-bordered">
                        <tbody class="text-light border-secondary">
                            <tr>
                                <td>Secret Key / ID</td>
                                <td><?= $user_data['id'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Depan<br></td>
                                <td><?= $user_data['firstName'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Belakang</td>
                                <td><?= $user_data['lastName'] ?></td>
                            </tr>
                            <tr>
                                <td>Dibuat pada tanggal</td>
                                <td><?= $user_data['registerDate'] ?></td>
                            </tr>
                            <tr>
                                <td>Terakhir di update</td>
                                <td><?= $user_data['updatedDate'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="900" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;margin-bottom: 30px;background: var(--bs-gray-900);color: var(--bs-pink);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 col-sm-10 align-self-center">
                        <p style="margin-bottom: 0px;"><strong>Hapus Akun</strong></p>
                        <p style="margin-bottom: 0px;">Hapus Akun</p>
                    </div>
                    <div class="col-4 col-sm-2 d-flex d-sm-flex d-xl-flex justify-content-end justify-content-sm-end justify-content-xl-end">
                        <a class="btn btn-danger btn-lg d-xxl-flex justify-content-xxl-center align-items-xxl-center" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bss-hover-animate="flash" title="Logout" href="<?= base_url('user/delete') ?>">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>