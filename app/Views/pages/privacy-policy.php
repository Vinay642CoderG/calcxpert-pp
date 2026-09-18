<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Privacy Policy - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Read CalcXpert privacy policy to learn how we collect, use, and protect your information when using our free online calculators.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['Privacy Policy' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="fw-bold mb-3 text-center">Privacy Policy</h1>
                <p class="text-center">Last updated: <?= date('F j, Y') ?></p>
                
                <div class="site-copy mt-5">
                    <h2 class="fw-bold mb-3 h4">Introduction</h2>
                    <p>
                        CalcXpert ("we," "our," or "us") respects your privacy and is committed to protecting your personal information. 
                        This privacy policy explains how we collect, use, and safeguard your information when you use our website 
                        and calculators.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Information We Collect</h2>
                    <h3 class="fw-bold mb-3 h5">Personal Information</h3>
                    <p>
                        We do not collect personal information unless you voluntarily provide it to us. If you contact us through 
                        our contact form, we may collect your name, email address, and any other information you choose to provide.
                    </p>
                    
                    <h3 class="fw-bold mb-3 h5">Usage Information</h3>
                    <p>
                        We may collect anonymous usage information to improve our website and services. This may include:
                    </p>
                    <ul>
                        <li>Browser type and version</li>
                        <li>Operating system</li>
                        <li>Pages visited and time spent on pages</li>
                        <li>Referring website</li>
                    </ul>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">How We Use Your Information</h2>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Provide and maintain our calculators and services</li>
                        <li>Improve user experience</li>
                        <li>Respond to your inquiries and requests</li>
                        <li>Analyze usage patterns to enhance our website</li>
                    </ul>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Cookies</h2>
                    <p>
                        We may use cookies to enhance your experience on our website. Cookies are small files stored on your device 
                        that help us understand how you interact with our site. You can choose to disable cookies through your 
                        browser settings.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Third-Party Services</h2>
                    <p>
                        We may use third-party services for analytics and advertising. These services may collect information 
                        about your use of our website. We encourage you to review the privacy policies of these third parties.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Data Security</h2>
                    <p>
                        We implement appropriate security measures to protect your information. However, no method of transmission 
                        over the internet is 100% secure, and we cannot guarantee absolute security.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Children's Privacy</h2>
                    <p>
                        Our website is not intended for children under 13 years of age. We do not knowingly collect personal 
                        information from children under 13.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Changes to This Policy</h2>
                    <p>
                        We may update this privacy policy from time to time. We will notify you of any changes by posting the 
                        new policy on this page and updating the "Last updated" date.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Contact Us</h2>
                    <p>
                        If you have any questions about this privacy policy, please contact us through our 
                        <a href="<?= base_url('contact') ?>">contact page</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>