<main>
    <div class="container" style="margin-top: 30px;margin-bottom: 30px;">
        <div class="card" data-aos="fade-left" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;margin-bottom: 30px;background: var(--bs-gray-900);color: var(--bs-body-bg);">
            <div class="card-body">
                <div class="row">
                    <div class="col align-self-center">
                        <p style="margin-bottom: 0px;"><strong>Update Data User</strong></p>
                        <p style="margin-bottom: 0px;">email&nbsp;:&nbsp;<?= $user_data['email'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-right" data-aos-delay="500" style="border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: var(--bs-gray-900);color: var(--bs-body-bg);margin-bottom: 30px;">
            <div class="card-body" style="padding: 40px;">
                <form action="<?= site_url('user/submit') ?>" method="POST" enctype="application/x-www-form-urlencoded">
                    <fieldset style="margin-top: 20px;margin-bottom: 20px;">
                        <legend class="fs-5">Data Diri</legend>
                        <div class="row">
                            <div class="col-12 col-md-6" style="margin-bottom: 15px;">
                                <input class="form-control" type="text" name="first_name" placeholder="Nama Depan" value="<?= $user_data['firstName'] ?>" style="color: var(--bs-body-bg);background: var(--bs-gray-800);border-color: var(--bs-body-color);">
                            </div>
                            <div class="col-12 col-md-6" style="margin-bottom: 15px;">
                                <input class="form-control" type="text" name="last_name" placeholder="Nama Belakang" value="<?= $user_data['lastName'] ?>" style="color: var(--bs-body-bg);background: var(--bs-gray-800);border-color: var(--bs-body-color);">
                            </div>
                            <div class="col-12 col-md-6" style="margin-bottom: 15px;">
                                <input class="form-control" type="date" name="date_of_birth" value="<?= $user_data['dateOfBirth'] ?>" style="color: var(--bs-gray-100);background: var(--bs-gray-800);border-color: var(--bs-body-color);">
                            </div>
                            <div class="col-12 col-md-6" style="margin-bottom: 15px;">
                                <select class="form-select" name="gender" style="color: var(--bs-gray-100);background: var(--bs-gray-800);border-color: var(--bs-body-color);">
                                    <option value="male" <?= $user_data['gender'] == 'male' ? "selected" : ''; ?>>Laki-laki</option>
                                    <option value="female" <?= $user_data['gender'] == 'female' ? "selected" : ''; ?>>Perempuan</option>
                                    <option value="other" <?= $user_data['gender'] == 'other' ? "selected" : ''; ?>>Lainya</option>
                                </select>
                            </div>
                            <div class="col-12" style="margin-bottom: 15px;">
                                <input class="form-control" type="tel" style="border-color: var(--bs-body-color);background: var(--bs-gray-800);color: var(--bs-gray-100);" name="phone" value="<?= isset($user_data['phone']) ? $user_data['phone'] : '' ?>" placeholder="Nomor Handphone">
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-center">
                        <button class="btn btn-info btn-lg" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-bss-hover-animate="pulse" type="submit" title="Kirim Data">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>