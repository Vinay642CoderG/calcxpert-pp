<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $this->renderSection('title', 'CalcXpert - Free Online Calculators') ?></title>

    <meta name="description"
        content="<?= $this->renderSection('meta_description', 'CalcXpert offers free online calculators for finance, math, health, date & time, and more. Simple, accurate, and easy to use.') ?>">
    <meta name="keywords"
        content="<?= $this->renderSection('meta_keywords', 'online calculator, free calculator, finance calculator, math calculator, health calculator') ?>">
    <meta name="author" content="CalcXpert">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?= $this->renderSection('canonical_url', base_url()) ?>">

    <link rel="icon" href="<?= base_url('assets/images/favicon_io/favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon_io/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= base_url('assets/images/favicon_io/favicon-16x16.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= base_url('assets/images/favicon_io/favicon-32x32.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= base_url('assets/images/favicon_io/apple-touch-icon.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/images/favicon_io/site.webmanifest') ?>">
    <meta name="theme-color" content="#2563eb">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

    <?= $this->renderSection('styles') ?>
</head>

<body>

    <?= view('partials/navbar') ?>

    <main class="main-content">
        <?= $this->renderSection('breadcrumb') ?>

        <div class="container main-container">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <?= view('partials/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>

    <?= $this->renderSection('scripts') ?>
</body>

</html>