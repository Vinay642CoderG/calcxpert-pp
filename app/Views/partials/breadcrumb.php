<?php if (isset($breadcrumbs) && is_array($breadcrumbs)): ?>
<section class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumbs">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <?php foreach ($breadcrumbs as $label => $url): ?>
                    <?php if ($url): ?>
                        <li class="breadcrumb-item"><a href="<?= $url ?>"><?= $label ?></a></li>
                    <?php else: ?>
                        <li class="breadcrumb-item active" aria-current="page"><?= $label ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </nav>
    </div>
</section>
<?php endif; ?>