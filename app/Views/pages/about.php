<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>About Us - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Learn about CalcXpert, your trusted source for free online calculators. Discover our mission, values, and commitment to providing accurate calculation tools.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['About' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="fw-bold mb-3 text-center">About CalcXpert</h1>
                
                <div class="site-copy">
                    <p class="fs-5">
                        CalcXpert is a comprehensive online platform offering free calculators for all your calculation needs. 
                        We provide tools for finance, math, health, date & time calculations, and more.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Our Mission</h2>
                    <p>
                        Our mission is to make complex calculations simple and accessible to everyone. We believe that 
                        everyone should have access to accurate calculation tools without any cost or barriers.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Why Choose CalcXpert?</h2>
                    <div class="row g-4 mt-4">
                        <div class="col-12 col-md-6">
                            <div class="p-4 rounded border shadow-sm">
                                <h3 class="fw-bold mb-3 h5">
                                    <span class="d-inline-flex align-items-center justify-content-center">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    Free to Use
                                </h3>
                                <p>All our calculators are completely free with no hidden charges or registration required.</p>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="p-4 rounded border shadow-sm">
                                <h3 class="fw-bold mb-3 h5">
                                    <span class="d-inline-flex align-items-center justify-content-center">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    Accurate Results
                                </h3>
                                <p>Our calculators use standard formulas and algorithms to ensure accurate results.</p>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="p-4 rounded border shadow-sm">
                                <h3 class="fw-bold mb-3 h5">
                                    <span class="d-inline-flex align-items-center justify-content-center">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    Easy to Use
                                </h3>
                                <p>Simple and intuitive interfaces make our calculators easy to use for everyone.</p>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="p-4 rounded border shadow-sm">
                                <h3 class="fw-bold mb-3 h5">
                                    <span class="d-inline-flex align-items-center justify-content-center">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    Mobile Friendly
                                </h3>
                                <p>All calculators are fully responsive and work perfectly on all devices.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Our Values</h2>
                    <ul class="mt-3">
                        <li><strong>Accessibility:</strong> Making calculation tools available to everyone</li>
                        <li><strong>Accuracy:</strong> Providing reliable and precise calculation results</li>
                        <li><strong>Simplicity:</strong> Keeping our tools simple and easy to use</li>
                        <li><strong>Privacy:</strong> Respecting user privacy with no data collection</li>
                    </ul>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Contact Us</h2>
                    <p>
                        Have questions, suggestions, or feedback? We'd love to hear from you. 
                        Visit our <a href="<?= base_url('contact') ?>">contact page</a> to get in touch with us.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>