<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-3">
                <h4 class="fw-bold mb-3 h6">Calculator Categories</h4>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('calculators/health') ?>">Health Calculators</a></li>
                </ul>
            </div>
            
            <div class="col-12 col-md-3">
                <h4 class="fw-bold mb-3 h6">Useful Links</h4>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('calculators') ?>">All Calculators</a></li>
                    <li><a href="<?= base_url('about') ?>">About Us</a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                    <li><a href="<?= base_url('sitemap') ?>">Sitemap</a></li>
                </ul>
            </div>
            
            <div class="col-12 col-md-3">
                <h4 class="fw-bold mb-3 h6">About CalcXpert</h4>
                <p class="site-copy small">
                    CalcXpert provides free online calculators for all your calculation needs. 
                    Our tools are designed to be simple, accurate, and easy to use.
                </p>
            </div>
            
            <div class="col-12 col-md-3">
                <h4 class="fw-bold mb-3 h6">Legal</h4>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
                    <li><a href="<?= base_url('terms') ?>">Terms of Service</a></li>
                    <li><a href="<?= base_url('disclaimer') ?>">Disclaimer</a></li>
                </ul>
            </div>
        </div>
        
        <div class="site-copy text-center">
            <p class="small">
                &copy; <?= date('Y') ?> CalcXpert. All rights reserved.
            </p>
        </div>
    </div>
</footer>