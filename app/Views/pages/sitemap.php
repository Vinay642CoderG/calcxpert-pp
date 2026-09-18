<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Sitemap - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Explore the sitemap for CalcXpert and browse all main pages and calculators available on the site.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['Sitemap' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-8 text-start">
                <h1 class="fw-bold mb-3">Sitemap</h1>

                <div class="site-copy text-start">

                    
                    <h2 class="fw-bold mb-3 h5">Calculators</h2>
                    <ul class="ps-5 mb-5">
                        <li><a href="<?= base_url('calculators') ?>">All Calculators</a></li>
                        <li>
                            <a href="<?= base_url('calculators/health') ?>">Health Calculators</a>
                            <ul class="ps-5 mt-2">
                                <li><a href="<?= base_url('calculators/health/bmi') ?>">BMI Calculator</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <h2 class="fw-bold mb-3 h5">Main Pages</h2>
                    <ul class="ps-5 mb-5">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= base_url('about') ?>">About</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
                        <li><a href="<?= base_url('terms') ?>">Terms</a></li>
                        <li><a href="<?= base_url('disclaimer') ?>">Disclaimer</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>
