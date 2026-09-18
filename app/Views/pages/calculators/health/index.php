<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Health Calculators - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Browse free health calculators including BMI, calorie, and body metrics tools. Find the right calculator for your health tracking needs.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>

<?= view('partials/breadcrumb', [
    'breadcrumbs' => [
        'Calculators' => base_url('calculators'),
        'Health' => false
    ]
]) ?>

<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-3">Health Calculators</h1>
        <p class="fs-6 text-secondary mb-3">Browse free health and wellness calculators.</p>

        <div class="row g-4 mt-5">
            <div class="col-12 col-md-6 text-start">
                <ol class="fs-5 ps-5">
                    <li>
                        <a href="<?= base_url('calculators/health/bmi') ?>" class="text-decoration-underline">BMI Calculator</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>