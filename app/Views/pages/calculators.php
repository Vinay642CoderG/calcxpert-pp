<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>All Calculators - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Browse all free online calculators including financial, math, health, date & time calculators. Find the right tool for your calculation needs.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['Calculators' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-3 text-center">All Calculators</h1>
        <p class="text-center fs-5">
            Browse our collection of free online calculators for all your calculation needs.
        </p>

        <div class="mt-5">
            <h2 class="fw-bold mb-3 h4">Health</h2>
            <ol class="fs-5">
                <li>
                    <a href="<?= base_url('calculators/health/bmi') ?>" class="text-decoration-underline">BMI Calculator</a>
                </li>
            </ol>
        </div>
    </div>
</section>

<?php $this->endSection() ?>