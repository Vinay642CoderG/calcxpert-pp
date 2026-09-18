<?php

$navItems = [
    [
        'label' => 'Home',
        'icon'  => 'fas fa-home',
        'url'   => base_url(),
    ],
    [
        'label' => 'Calculators',
        'icon'  => 'fas fa-th-large',
        'url'   => base_url('calculators'),
    ],
    [
        'label' => 'Health',
        'icon'  => 'fas fa-heartbeat',
        'children' => [
            [
                'label' => 'All',
                'url'   => base_url('calculators/health'),
            ],
            [
                'label' => 'BMI Calculator',
                'url'   => base_url('calculators/health/bmi'),
            ],
        ],
    ],
    [
        'label' => 'About',
        'icon'  => 'fas fa-info-circle',
        'url'   => base_url('about'),
    ],
];

?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark" aria-label="Main navigation">
    <div class="container">
        <div class="d-flex align-items-center">
            <a href="<?= base_url() ?>" class="navbar-brand logo text-white">
                <img
                    src="<?= base_url('assets/images/logo.svg') ?>"
                    alt="CalcXpert Logo"
                    class="logo-img"
                    width="40"
                    height="40"
                >
                <span class="logo-text">CalcXpert</span>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarMain" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <?php foreach ($navItems as $item): ?>
                    <?php if (!empty($item['children'])): ?>
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="<?= esc($item['icon']) ?> me-2" aria-hidden="true"></i><?= esc($item['label']) ?>
                            </button>
                            <ul class="dropdown-menu" data-bs-theme="light">
                                <?php foreach ($item['children'] as $child): ?>
                                    <li><a class="dropdown-item" href="<?= esc($child['url']) ?>"><?= esc($child['label']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= esc($item['url']) ?>">
                                <i class="<?= esc($item['icon']) ?> me-2" aria-hidden="true"></i><?= esc($item['label']) ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <form class="d-flex navbar-search my-2 my-lg-0" action="<?= base_url('calculators') ?>" method="get" role="search">
                <div class="position-relative flex-grow-1 search-wrap">
                    <input class="form-control form-control-sm navbar-search-input" data-bs-theme="light" type="search" name="q" placeholder="Search calculators..." aria-label="Search calculators" autocomplete="off">
                    <div class="search-suggestions" id="navbar-search-results"></div>
                </div>
                <button class="btn btn-warning btn-sm ms-2" type="submit" aria-label="Search"><i class="fas fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="mx-2" id="google_translate_element"></div>
    </div>
</nav>
