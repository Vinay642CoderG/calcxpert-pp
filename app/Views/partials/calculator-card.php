<div class="col-12 col-md-4">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start gap-3">
                <div class="flex-shrink-0">
                    <figure class="m-0">
                        <span class="d-inline-flex align-items-center justify-content-center">
                            <i class="<?= $icon ?? 'fas fa-calculator' ?> fa-2x"></i>
                        </span>
                    </figure>
                </div>
                <div class="flex-grow-1">
                    <p class="fw-bold mb-3 h4"><?= $name ?? 'Calculator Name' ?></p>
                    <p class="mb-3 h6"><?= $category ?? 'Category' ?></p>
                </div>
            </div>
            <div class="site-copy">
                <?= $description ?? 'Calculator description goes here.' ?>
            </div>
        </div>
        <footer class="card-footer">
            <a href="<?= $url ?? '#' ?>" class="d-block text-center text-decoration-none p-2">Calculate Now</a>
        </footer>
    </div>
</div>