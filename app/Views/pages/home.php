<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Free Online Calculators - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Free online calculators for finance, math, health, date & time, and more. Simple, accurate, and easy to use tools for all your calculation needs.<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-3 h2 text-center section-title">Available Calculators</h1>
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

<section class="py-5 bg-light">
    <div class="container">
        <div class="home-about-panel">
            <div class="site-copy">
                <h2 class="fw-bold mb-3 text-center section-title">About CalcXpert</h2>
                <p class="text-center">
                    CalcXpert is your go-to destination for free online calculators. We offer a wide range of tools 
                    for finance, math, health, date & time calculations, and more. Our calculators are designed 
                    to be simple, accurate, and easy to use, making complex calculations accessible to everyone.
                </p>
                <p class="text-center">
                    Whether you need to calculate your BMI, determine loan payments, find percentages, or compute 
                    dates, CalcXpert has you covered. All our tools are free to use and require no registration.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-3 text-center section-title">Frequently Asked Questions</h2>
        <div class="row g-4 justify-content-center mt-5">
            <div class="col-12 col-md-8">
                <div class="accordion">
                    <div class="accordion-item active">
                        <button class="accordion-header" aria-expanded="true">
                            <span class="accordion-title">Are the calculators free to use?</span>
                            <span class="d-inline-flex align-items-center justify-content-center accordion-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>Yes, all calculators on CalcXpert are completely free to use with no hidden charges or registration required.</p>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <button class="accordion-header" aria-expanded="false">
                            <span class="accordion-title">How accurate are the calculators?</span>
                            <span class="d-inline-flex align-items-center justify-content-center accordion-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>Our calculators are designed to provide accurate results based on standard formulas. For important decisions, please verify the results with trusted sources or a qualified professional.</p>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <button class="accordion-header" aria-expanded="false">
                            <span class="accordion-title">Do I need to create an account?</span>
                            <span class="d-inline-flex align-items-center justify-content-center accordion-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>No, you can use all our calculators without creating an account or providing any personal information.</p>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <button class="accordion-header" aria-expanded="false">
                            <span class="accordion-title">Can I use the calculators on mobile devices?</span>
                            <span class="d-inline-flex align-items-center justify-content-center accordion-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>Yes, all our calculators are fully responsive and work perfectly on smartphones, tablets, and desktop computers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>