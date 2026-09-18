<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Contact Us - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Get in touch with CalcXpert. Contact us for questions, suggestions, or feedback about our free online calculators.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['Contact' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="fw-bold mb-3 text-center">Contact Us</h1>
                <p class="text-center fs-5">
                    Have questions, suggestions, or feedback? We'd love to hear from you.
                </p>
                
                <div class="row g-4 mt-5">
                    <div class="col-12 col-md-12">
                        <div class="p-4 rounded border shadow-sm">
                            <h2 class="fw-bold mb-3 h4">Get in Touch</h2>
                            
                            <div class="site-copy">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <span class="d-inline-flex align-items-center justify-content-center">
                                            <i class="fas fa-envelope fa-lg"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="fw-bold mb-3 h6">Email</p>
                                        <p>calcxpert@nexorasoft.io</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <div class="flex-shrink-0">
                                        <span class="d-inline-flex align-items-center justify-content-center">
                                            <i class="fas fa-clock fa-lg"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="fw-bold mb-3 h6">Response Time</p>
                                        <p>We typically respond within 24-48 hours</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <div class="flex-shrink-0">
                                        <span class="d-inline-flex align-items-center justify-content-center">
                                            <i class="fas fa-globe fa-lg"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="fw-bold mb-3 h6">Website</p>
                                        <p>www.calcxpert.nexorasoft.io</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 rounded border shadow-sm mt-4">
                            <h2 class="fw-bold mb-3 h4">Frequently Asked Questions</h2>
                            <p>
                                Before contacting us, you might find the answer to your question in our 
                                <a href="<?= base_url() ?>">FAQ section</a> on the homepage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>