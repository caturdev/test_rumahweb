<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RumahWeb Dark Version</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: Poppins, sans-serif;background: var(--bs-gray-800);">
    <header>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container"><a class="navbar-brand" href="#">Aplikasi User</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" style="margin-top: 3px;margin-bottom: 3px;">
                            <a class="nav-link text-center" href="<?= site_url('dashboard') ?>">Semua User</a>
                        </li>
                        <li class="nav-item" style="margin-top: 3px;margin-bottom: 3px;">
                            <a class="nav-link text-center" href="<?= site_url('user') ?>">Data User</a>
                        </li>
                        <li class="nav-item d-xxl-flex align-items-xxl-center" style="min-width: 116px;padding-left: 8px;padding-right: 8px;margin-top: 3px;margin-bottom: 3px;">
                            <a class="btn btn-warning" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bss-hover-animate="flash" style="min-width: 100%;" href="<?= site_url('dashboard/logout') ?>" title="Keluar">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>