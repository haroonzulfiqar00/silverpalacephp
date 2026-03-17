<?php include 'includes/header.php'; ?>

<style>
    
/* =========================================
   THANK YOU PAGE
========================================= */
.thank-you-section {
    padding: 150px 0 100px;
    background-color: var(--light-gray);
    min-height: 80vh;
    display: flex;
    align-items: center;
    
}

.thank-you-box {
    background: var(--white);
    max-width: 600px;
    margin: 0 auto;
    padding: 60px 40px;
    border-radius: var(--border-radius);
    text-align: center;
    box-shadow: var(--box-shadow);
    border-top: 5px solid var(--accent);
}

.success-icon {
    font-size: 5rem;
    color: var(--accent);
    margin-bottom: 24px;
}

.thank-you-box h1 {
    font-size: 2.5rem;
    color: var(--dark);
    margin-bottom: 16px;
}

.thank-you-box p {
    font-size: 1.125rem;
    color: var(--text-muted);
    margin-bottom: 32px;
}

.thank-you-box .btn {
    margin-top: 10px;
}
</style>
    <!-- THANK YOU CONTENT -->
    <section class="thank-you-section">
        <div class="container">
            <div class="thank-you-box">
                <i class="fa-solid fa-circle-check success-icon"></i>
                <h1>Thank You!</h1>
                <p>Your message has been successfully sent. Our team at Silver Palace will review your inquiry and get
                    back to you within 24 hours.</p>
                <a href="index.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-arrow-left"></i> Back to
                    Homepage</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
