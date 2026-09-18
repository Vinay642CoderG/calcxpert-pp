<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Terms of Service - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Read CalcXpert terms of service to understand the conditions for using our free online calculators and website.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['Terms of Service' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="fw-bold mb-3 text-center">Terms of Service</h1>
                <p class="text-center">Last updated: <?= date('F j, Y') ?></p>
                
                <div class="site-copy mt-5">
                    <h2 class="fw-bold mb-3 h4">Acceptance of Terms</h2>
                    <p>
                        By accessing and using CalcXpert website and calculators, you agree to be bound by these Terms of Service. 
                        If you do not agree to these terms, please do not use our website.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Use of Services</h2>
                    <h3 class="fw-bold mb-3 h5">Permitted Use</h3>
                    <p>
                        You may use our calculators and website for personal, non-commercial purposes. Our services are provided 
                        free of charge for your convenience.
                    </p>
                    
                    <h3 class="fw-bold mb-3 h5">Prohibited Use</h3>
                    <p>You agree not to:</p>
                    <ul>
                        <li>Use our services for any illegal or unauthorized purpose</li>
                        <li>Attempt to gain unauthorized access to our systems</li>
                        <li>Interfere with or disrupt the service or servers</li>
                        <li>Transmit any malicious code or viruses</li>
                        <li>Copy, modify, or distribute our content without permission</li>
                    </ul>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Calculator Accuracy</h2>
                    <p>
                        While we strive to provide accurate calculations, we make no warranties or representations about the 
                        accuracy, completeness, or reliability of our calculators. The results provided are for informational 
                        purposes only and should not be considered as professional advice.
                    </p>
                    <p>
                        For critical financial, health, or other important decisions, please consult with qualified professionals.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Intellectual Property</h2>
                    <p>
                        All content on this website, including text, graphics, logos, and software, is the property of CalcXpert 
                        and is protected by intellectual property laws. You may not reproduce, distribute, or create derivative 
                        works without our express written permission.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Limitation of Liability</h2>
                    <p>
                        CalcXpert shall not be liable for any direct, indirect, incidental, special, or consequential damages 
                        arising from your use of our website or calculators. Use our services at your own risk.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Disclaimer of Warranties</h2>
                    <p>
                        Our website and calculators are provided "as is" without any warranties, express or implied. We do not 
                        warrant that our services will be uninterrupted, error-free, or free of viruses or other harmful components.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Changes to Terms</h2>
                    <p>
                        We reserve the right to modify these terms of service at any time. Changes will be effective immediately 
                        upon posting on this page. Your continued use of our website constitutes acceptance of the modified terms.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Governing Law</h2>
                    <p>
                        These terms shall be governed by and construed in accordance with the laws of the jurisdiction in which 
                        CalcXpert operates, without regard to its conflict of law provisions.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Contact Information</h2>
                    <p>
                        If you have any questions about these terms of service, please contact us through our 
                        <a href="<?= base_url('contact') ?>">contact page</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>