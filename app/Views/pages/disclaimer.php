<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>Disclaimer - CalcXpert<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Read CalcXpert disclaimer to understand the limitations of our free online calculators and the nature of information provided.<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
    <?= view('partials/breadcrumb', ['breadcrumbs' => ['Disclaimer' => false]]) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="fw-bold mb-3 text-center">Disclaimer</h1>
                <p class="text-center">Last updated: <?= date('F j, Y') ?></p>
                
                <div class="site-copy mt-5">
                    <h2 class="fw-bold mb-3 h4">General Disclaimer</h2>
                    <p>
                        The information, formulas, and calculator results provided on CalcXpert are for general informational 
                        and educational purposes only. We aim to provide accurate and useful tools, but we do not guarantee 
                        that the information is complete, error-free, or suitable for every situation.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">No Professional Advice</h2>
                    <p>
                        CalcXpert tools do not constitute professional advice. They are not a substitute for advice from a 
                        qualified professional in finance, healthcare, law, accounting, engineering, or any other field. You 
                        should verify important results and consult a qualified expert before making decisions that may have 
                        legal, financial, personal, or health consequences.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">General Limitations</h2>
                    <p>
                        Calculator outputs may depend on the assumptions, inputs, rounding, formulas, and context you provide. 
                        Results may vary depending on your specific situation, and some tools may use simplified models rather 
                        than real-world conditions. For critical or high-impact decisions, please validate the results through 
                        trusted sources or a qualified professional.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">External Links</h2>
                    <p>
                        Our website may contain links to external websites for your convenience. We have no control over the 
                        content or practices of these external sites and are not responsible for their content, privacy 
                        practices, or accuracy.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Limitation of Liability</h2>
                    <p>
                        In no event shall CalcXpert be liable for any direct, indirect, incidental, special, or consequential 
                        damages arising from your use of our website or reliance on any information or calculations provided. 
                        You use our website and calculators at your own risk.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Changes to This Disclaimer</h2>
                    <p>
                        We reserve the right to modify this disclaimer at any time without notice. Changes will be effective 
                        immediately upon posting on this page. Your continued use of our website constitutes acceptance of 
                        the modified disclaimer.
                    </p>
                    
                    <h2 class="fw-bold mb-3 h4 mt-5">Contact Us</h2>
                    <p>
                        If you have any questions about this disclaimer, please contact us through our 
                        <a href="<?= base_url('contact') ?>">contact page</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection() ?>