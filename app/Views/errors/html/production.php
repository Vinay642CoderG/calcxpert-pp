<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Something Went Wrong | CalcXpert</title>
    <meta name="description" content="An unexpected error occurred. Please try again later.">
    
    <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">
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
                                <span class="d-inline-flex align-items-center justify-content-center">
                                    <i class="fas fa-calculator fa-lg"></i>
                                </span>
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
                        <i class="fas fa-exclamation-circle fa-4x"></i>
                    </span>
                </div>
                <h1 class="fw-bold mb-3 h1">Oops!</h1>
                <h2 class="fw-bold mb-3 h4">Something Went Wrong</h2>
                <p class="error-message">
                    We're sorry, but an unexpected error occurred while processing your request. 
                    Please try again later. If the problem persists, please contact our support team.
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