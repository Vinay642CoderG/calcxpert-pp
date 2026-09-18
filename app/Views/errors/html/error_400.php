<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>400 - Bad Request | CalcXpert</title>
    <meta name="description" content="The request could not be understood by the server.">
    
    <link rel="icon" href="<?= base_url('assets/images/favicon_io/favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon_io/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon_io/favicon-16x16.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon_io/favicon-32x32.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/favicon_io/apple-touch-icon.png') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    
    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .error-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 1rem;
        }
        
        .error-code {
            font-size: 8rem;
            font-weight: 800;
            color: var(--primary-color);
            line-height: 1;
            margin-bottom: 1rem;
        }
        
        .error-icon {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }
        
        .error-message {
            color: var(--text-light);
            font-size: 1.1rem;
            max-width: 500px;
            margin: 0 auto 2rem;
        }
        
        .error-actions {
            display: flex;
            gap: 0.75rem;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="error-page">
        <header class="header-section">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <a href="<?= base_url() ?>" class="logo">
                                <img
                                    src="<?= base_url('assets/images/logo.svg') ?>"
                                    alt="CalcXpert Logo"
                                    class="logo-img"
                                    width="40"
                                    height="40"
                                >
                                <span class="logo-text">CalcXpert</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <section class="error-section">
            <div class="container text-center">
                <div class="error-icon">
                    <span class="d-inline-flex align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle fa-4x"></i>
                    </span>
                </div>
                <h1 class="error-code">400</h1>
                <h2 class="fw-bold mb-3 h4">Bad Request</h2>
                <p class="error-message">
                    <?php if (ENVIRONMENT !== 'production') : ?>
                        <?= nl2br(esc($message)) ?>
                    <?php else : ?>
                        The request could not be understood by the server due to malformed syntax. Please check your request and try again.
                    <?php endif; ?>
                </p>
                <div class="error-actions">
                    <a href="<?= base_url() ?>" class="btn btn-primary">
                        <span class="d-inline-flex align-items-center justify-content-center">
                            <i class="fas fa-home"></i>
                        </span>
                        <span>Go to Homepage</span>
                    </a>
                    <a href="<?= base_url('contact') ?>" class="btn btn-light">
                        <span class="d-inline-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span>Contact Support</span>
                    </a>
                </div>
            </div>
        </section>
        
        <footer class="site-footer">
            <div class="container">
                <div class="site-copy text-center">
                    <p class="small">
                        &copy; <?= date('Y') ?> CalcXpert. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>